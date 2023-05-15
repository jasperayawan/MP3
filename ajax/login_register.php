<?php
    require('../admin/db_config.php');
    require('../admin/essentials.php');
    require('../components/sendgrid/sendgrid-php.php');

    function send_Mail($uemail,$first_name,$token){
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("ejayawan22@gmail.com", "Bayangan");
        $email->setSubject("Account Verification Link");
        $email->addTo($uemail,$first_name);
        $email->addContent(
            "text/html", 
            "Click the link to confirm your email: <br>
            <a href='".SITE_URL."email_confirm.php?email_confirmation&email=$uemail&token=$token"."'>
                CLICK ME
            </a>"
        );

        $sendgrid = new \SendGrid(SENDGRID_API_KEY);

        try{
            $sendgrid->send($email);
            return 1;
        }catch (Exception $e){
            return 0;
        }
    }

    if(isset($_POST['register']))
    {
        $data = filteration($_POST);

        //match password and confirm password

        if($data['password'] != $data['cpassword'])
        {
            echo 'not_matching';
            exit;
        }

        //check user if exist or not

        $user_exist = select("SELECT * FROM `user_cred` WHERE `email`=? OR `phone_number`=? LIMIT 1", 
        [$data['email'],$data['phone_number']],'ss');

        if(mysqli_num_rows($user_exist)!=0){
            $user_exist_fetch = mysqli_fetch_assoc($user_exist);
            echo ($user_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
            exit;
        }

        //upload user image to server

        $img = uploadUserImage($_FILES['profile']);

        if($img == 'inv_img'){
            echo 'inv_img';
            exit;
        }
        else if($img == 'upd_failed'){
            echo 'upd_failed';
            exit;
        }

        //send confirmation link to user's email

        $token = bin2hex(random_bytes(16));
        if(!send_Mail($data['email'],$data['first_name'],$token)){
            echo 'mail_failed';
            exit;
        }

        $enc_pass = password_hash($data['password'],PASSWORD_BCRYPT);

        $query = "INSERT INTO `user_cred`(`first_name`, `last_name`, `email`, `phone_number`, `address`, `dob`, 
                    `profile`, `password`,`token`) VALUES (?,?,?,?,?,?,?,?,?)";

        $values = [$data['first_name'],$data['last_name'],$data['email'],$data['phone_number'],$data['address']
                ,$data['dob'],$img,$enc_pass,$token];
        
        if(insert($query,$values,'sssssssss')){
            echo 1;
        }
        else{
            echo 'ins_failed';
        }
        
    }
