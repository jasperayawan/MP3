<?php
    require('../admin/essentials.php');
    require('./db_config.php');

    session_start();
        if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
            redirect('../admin/dashboard.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <?php
        if(isset($_POST['login'])){ 
                $frm_data = filteration($_POST);
                $query = "SELECT * FROM `admin_user` WHERE `username`=? AND `password`=?";
                $values = [$frm_data['admin_username'],$frm_data['admin_password']];
                $res = select($query,$values,"ss");
            
                if($res->num_rows == 1){
                    $row = mysqli_fetch_assoc($res);
                    $_SESSION['adminLogin'] = true;
                    $_SESSION['adminId'] = $row['id'];
                    redirect('dashboard.php');
                }else{
                    alert('error','Login failed - Invalid Credentials!');
                }
                
            }

                //$query = "SELECT * FROM user WHERE username = ?";
                // $bind_param = [$username];
                // $result = mysqli_execute_query($connection, $query, $bind_param)->fetch_all();
    ?>

    <div class="form-container w-lg-25 px-2">
        <form action="" method="POST">
            <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                <div class="w-100">
                    <input type="username" name="admin_username" placeholder="username" class="form-control" required>
                </div>
                <div class="w-100">
                    <input type="password" name="admin_password" placeholder="password" class="form-control" required>
                </div>
                <button class="btn btn-success w-100" name="login" type="submit">login</button>
            </div>
        </form>
    </div>
</body>
</html>