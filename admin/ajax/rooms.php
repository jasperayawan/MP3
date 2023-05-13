<?php

require('../db_config.php');
require('../essentials.php');
adminLogin();

if (isset($_POST['add_room'])) {
    $features = filteration(json_decode($_POST['features']));
    $facilities = filteration(json_decode($_POST['facilities']));

    $form_data = filteration($_POST);
    $flag = 0;

    $query = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)";
    $values = [$form_data['name'], $form_data['area'], $form_data['price'], $form_data['quantity'], $form_data['adult'], $form_data['children'], $form_data['desc']];

    if (insert($query, $values, 'siiiiis')) {
        $flag = 1;
    }

    $room_id = mysqli_insert_id($conn);

    $query2 = "INSERT INTO `room_facilities`(`room_id`, `facilities_id`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($conn, $query2)) {
        foreach ($facilities as $f) {
            mysqli_stmt_bind_param($stmt, 'ii', $room_id, $f);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die('query cannot be prepared - insert');
    }


    $query3 = "INSERT INTO `room_features`(`room_id`, `features_id`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($conn, $query3)) {
        foreach ($features as $f) {
            mysqli_stmt_bind_param($stmt, 'ii', $room_id, $f);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die('query cannot be prepared - insert');
    }

    if ($flag) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['get_all_rooms'])) {
    $res = selectAll('rooms');
    $i = 1;

    $data = "";

    while ($row = mysqli_fetch_assoc($res)) {

        if ($row['status'] == 1) {
            $status = "<button class='btn' onclick='toggle_status($row[id],0)' btn-sm shadow-none' style='background-color: #1A5F7A; color: #fff;'>active</button>";
        } else {
            $status = "<button class='btn' onclick='toggle_status($row[id],1)' btn-sm shadow-none' style='background-color: #E38B29; color: #fff;'>inactive</button>";
        }
        $data .= "
                <tr>
                    <td>$i</td>
                    <td>$row[name]</td>
                    <td>$row[area] sq. ft.</td>
                    <td>
                        <span class='badge rounded-pill bg-light text-dark'>
                            Adult: $row[adult]
                        </span>
                        <span class='badge rounded-pill bg-light text-dark'>
                            Children: $row[children]
                        </span>
                    </td>
                    <td>₱$row[price]</td>
                    <td>$row[quantity]</td>
                    <td>$status</td>
                    <td>
                        <button type='button' class='btn btn-primary shadow-none btn-sm' data-bs-toggle='modal' data-bs-target='#edit-room-settings'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                    </svg></button>
                    </td>
                </tr>
            ";
        $i++;
    }
    echo $data;
}

if (isset($_POST['toggle_status'])) {
    $form_data = filteration($_POST);

    $query = "UPDATE `rooms` SET `status`=? WHERE `id`=?";
    $value = [$form_data['value'], $form_data['toggle_status']];

    if (update($query, $value, 'ii')) {
        echo 1;
    } else {
        echo 0;
    }
}
