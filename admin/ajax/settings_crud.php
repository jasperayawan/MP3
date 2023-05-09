<?php
    require('../db_config.php');
    require('../essentials.php');
    adminLogin();

    if(isset($_POST['get_general']))
    {
        $query = "SELECT * FROM `settings` WHERE `id`=?";
        $values = [1];
        $res = select($query,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['update_general']))
    {
        $form_data = filteration($_POST);

        $query = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `id`=?";
        $values = [$form_data['site_title'],$form_data['site_about'],1];
        $res = update($query,$values,"ssi");
        echo $res;
    }

    if(isset($_POST['update_shutdown']))
    {
        $form_data = ($_POST['update_shutdown'] == 0) ? 1 : 0;

        $query = "UPDATE `settings` SET `shutdown`=? WHERE `id`=?";
        $values = [$form_data,1];
        $res = update($query,$values,"ii");
        echo $res;
    }
?>