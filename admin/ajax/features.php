<?php
    require('../db_config.php');
    require('../essentials.php');
    adminLogin();


    if(isset($_POST['add_feature']))
    {
        $form_data = filteration($_POST);

        $query = "INSERT INTO `features`(`name`) VALUES (?)";
        $values = [$form_data['name']];
        $res = insert($query,$values,'s');
        echo $res;
    }

    if(isset($_POST['get_features']))
    {
        $res = selectAll('features');
        $i = 1;

        while($row = mysqli_fetch_assoc($res))
        {
            echo <<<data
                <tr>
                    <td>$i</td>
                    <td>$row[name]</td>
                    <td><button type="button" onclick="rem_feature($row[id])" class="btn btn-danger shdaow-none btn-sm ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>
                    Delete
                </button></td>
                </tr>
            data;
            $i++;
        }
    }

    if(isset($_POST['rem_feature']))
    {
        $form_data = filteration($_POST);
        $values = [$form_data['rem_feature']];

        $query = "DELETE FROM `features` WHERE `id`=?";
        $res = delete($query,$values,'i');
        echo $res;

    }


    if(isset($_POST['add_facility']))
    {
        $form_data = filteration($_POST);

        $img_r = uploadSVGImage($_FILES['icon'],FACILITIES_FOLDER);

        if($img_r == 'inv_img'){
            echo $img_r;
        }
        else if($img_r == 'inv_size'){
            echo $img_r;
        }
        else if($img_r == 'upd_failed'){
            echo $img_r;
        }
        else{
            $query = "INSERT INTO `facilities`(`icon`,`name`, `description`) VALUES (?,?,?)";
            $values = [$img_r,$form_data['name'],$form_data['desc']];
            $res = insert($query,$values,'sss');
            echo $res;
        }
    }


    if(isset($_POST['get_facilities']))
    {
        $res = selectAll('facilities');
        $i = 1;
        $path = FACILITIES_IMG_PATH;

        while($row = mysqli_fetch_assoc($res))
        {
            echo <<<data
                <tr>
                    <td>$i</td>
                    <td><img src="$path$row[icon]" width="30px"></td>
                    <td>$row[name]</td>
                    <td>$row[description]</td>
                    <td><button type="button" onclick="rem_facility($row[id])" class="btn btn-danger shdaow-none btn-sm ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>
                    Delete
                </button></td>
                </tr>
            data;
            $i++;
        }
    }

    if(isset($_POST['rem_facility']))
    {
        $form_data = filteration($_POST);
        $values = [$form_data['rem_facility']];

        $query = "DELETE FROM `facilities` WHERE `id`=?";
        $res = delete($query,$values,'i');
        echo $res;

    }
?>