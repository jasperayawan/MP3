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

    if(isset($_POST['get_contacts']))
    {
        $query = "SELECT * FROM `contact_details` WHERE `id`=?";
        $values = [1];
        $res = select($query,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['update_contacts']))
    {
        $form_data = filteration($_POST);

        $query = "UPDATE `contact_details` SET `address`=?,`gmap`=?,`phone1`=?,`phone2`=?,`email`=?,`facebook`=?,`instagram`=?,`twitter`=?,`iframe`=? WHERE `id`=?";
        $values = [$form_data['address'],$form_data['gmap'],$form_data['phone1'],$form_data['phone2'],$form_data['email'],$form_data['facebook'],$form_data['instagram'],$form_data['twitter'],$form_data['iframe'],1];
        $res = update($query,$values,'sssssssssi');
        echo $res;
    }

    if(isset($_POST['add_member']))
    {
        $form_data = filteration($_POST);

        $img_r = uploadImage($_FILES['picture'],ABOUT_FOLDER);

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
            $query = "INSERT INTO `team_details`(`name`, `picture`) VALUES (?,?)";
            $values = [$form_data['name'],$img_r];
            $res = insert($query,$values,'ss');
            echo $res;
        }
    }

    if(isset($_POST['get_members']))
    {
        $res = selectAll('team_details');

        while($row = mysqli_fetch_assoc($res))
        {
            $path = ABOUT_IMG_PATH;
            echo <<<data
                <div class="col-md-2 mb-3">
                    <div class="card bg-dark text-white border-0">
                    <img src="$path$row[picture]" class="card-img">
                    <div class="card-img-overlay text-end">
                        <button type="button" onclick="rem_member($row[id])" class="btn btn-danger shdaow-none btn-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                            Delete
                        </button>
                    </div>
                        <p class="card-text text-center px-3 py-2">$row[name]</p>
                    </div>
                </div>
            data;
        }
    }

    if(isset($_POST['rem_member']))
    {
        $form_data = filteration($_POST);
        $values = [$form_data['rem_member']];

        $pre_query = "SELECT * FROM `team_details` WHERE `id`=?";
        $res = select($pre_query,$values,'i');
        $img = mysqli_fetch_assoc($res);

        if(deleteImage($img['picture'],ABOUT_FOLDER)){
            $query = "DELETE FROM `team_details` WHERE `id`=?";
            $res = delete($query,$values,'i');
            echo $res;
        }
        else{
            echo 0;
        }
    }
?>