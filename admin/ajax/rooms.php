<?php

    require('../db_config.php');
    require('../essentials.php');
    adminLogin();

    if(isset($_POST['add_room']))
    {
        $form_data = filteration($_POST);
        $flag = 0;

        $query = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`) VALUES (?,?,?,?,?,?)";
        $values = [$form_data['name'],$form_data['area'],$form_data['price'],$form_data['quantity'],$form_data['adult'],$form_data['children']];
        
        if(insert($query,$values,'siiiii')){
            $flag = 1;
        }

        $room_id = mysqli_insert_id($conn);
    }
?>