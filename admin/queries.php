<?php
    require('../admin/essentials.php');
    require('../admin/db_config.php');
    adminLogin();

    if(isset($_GET['seen']))
    {
        $form_data = filteration($_GET);

        if($form_data['seen'] == 'all')
        {
            $query = "UPDATE `user_queries` SET `seen`=?";
            $values = [1];
            if(update($query,$values,'i')){
                alert('success','Marked all as read.');
            }
            else{
                alert('error','failed');
            }
        }
         else {
            $query = "UPDATE `user_queries` SET `seen`=? WHERE `id`=?";
            $values = [1,$form_data['seen']];
            if(update($query,$values,'ii')){
                alert('success','Marked as read.');
            }
            else{
                alert('error','failed');
            }
        }
    }

    if(isset($_GET['del']))
    {
        $form_data = filteration($_GET);

        if($form_data['del'] == 'all'){
          $query = "DELETE FROM `user_queries`";
            if(mysqli_query($conn,$query)){
                alert('success','All Message deleted!');
            }
            else{
                alert('error','failed');
            }
        }else{
            $query = "DELETE FROM `user_queries` WHERE `id`=?";
            $values = [$form_data['del']];
            if(delete($query,$values,'i')){
                alert('success','Message deleted!');
            }
            else{
                alert('error','failed');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/3ce7f5ba6a.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./styles/dashboard.css" />
  </head>
  <body>
    <div class="container_body position-relative w-100">

    <!-----------navifation-------------->

      <div class="navigation_container position-fixed h-100">
        <ul class="position-absolute w-100 list-unstyled">
          <li class="position-relative w-100 nav-item">
            <a href="./dashboard.php" class="harvest_logo">
              <span class="icon">
                <!-- <i class="fa-solid fa-tractor"></i> -->
              </span>
              <span class="title d-block position-relative text-start"
                ><span>Bayangan</span
              >
            </a>
          </li>
          <li class="position-relative w-100 nav-item">
            <a href="./dashboard.php">
              <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="title d-block position-relative text-start"
                >Dashboard</span
              >
            </a>
          </li>
          <li class="position-relative w-100 nav-item">
            <a href="../admin/queries.php">
              <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
              </span>
              <span class="title d-block position-relative text-start"
                >Queries</span
              >
          </li>
          <li class="position-relative w-100 nav-item">
            <a href="adminProduct.html">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg>
              </span>
              <span class="title d-block position-relative text-start"
                >Room</span
              >
            </a>
          </li>
          <li class="position-relative w-100 nav-item">
            <a href="./settings.php">
              <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
              </svg>
              </span>
              <span class="title d-block position-relative text-start"
                id="logout">Settings</span
              >
            </a>
          </li>
          <li class="position-relative w-100 nav-item">
            <a href="./logout.php">
              <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
              </span>
              <span class="title d-block position-relative text-start"
                id="logout">Sign Out</span
              >
            </a>
          </li>
        </ul>
      </div>

    <!-------------main------------->

      <div class="main position-absolute">
        <div
          class="topbar d-flex w-100 justify-content-between align-items-center"
        >
          <div class='d-flex justify-content-center align-items-center'>
            <div class="toggle">
              <ion-icon name="menu-outline"></ion-icon>
            </div>
            <h3 class="text-primary m-0 text-uppercase">Dashboard</h3>
          </div>

          <div class="user">
            <img src="../assets/diving.jpg" alt="worker1" width="50" height="50" id="user_img"/>
          </div>
        </div>

        
    

        <!----------order details list------->

        <div class="details">
          <div class="recentOrders">
            <div class="cardHeader">
              <h2>Recent Booking</h2>
              <a href="" class="btn">View all</a>
            </div>
            <div class="text-end">
                <a href="?seen=all" class="btn btn-primary rounded-pill shadow-none btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>    
                Mark all as read</a>
                <a href="?del=all" class="btn btn-primary rounded-pill shadow-none btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>    
                Delete all</a>
            </div>
            <table>
              <thead>
                <tr>
                  <td class="fw-bold">id</td>
                  <td class="fw-bold">First Name</td>
                  <td class="fw-bold">Last Name</td>
                  <td class="fw-bold">Email</td>
                  <td class="fw-bold">Message</td>
                  <td class="fw-bold">Seen</td>
                </tr>
              </thead>
              <tbody>
                <!-- 
                <tr>
                  <td>2</td>
                  <td>Gabrielle</td>
                  <td>Agartha</td>
                  <td><span class="status Female">Female</span></td>
                </tr> -->
                <?php
                    $query = "SELECT * FROM `user_queries` ORDER BY `id` DESC";
                    $data = mysqli_query($conn,$query);
                    $i = 1;

                    while($row = mysqli_fetch_assoc($data)){

                        $seen = '';
                        if($row['seen'] != 1){
                            $seen = "<a href='?seen=$row[id]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";
                        }
                        $seen.="<a href='?del=$row[id]' class='btn btn-sm rounded-pill btn-danger'>Delete</a>";
                        echo <<<query
                            <tr>
                                <td>$i</td>
                                <td>$row[first_name]</td>
                                <td>$row[last_name]</td>
                                <td>$row[email]</td>
                                <td>$row[message]</td>
                                <td>$seen</td>
                            </tr>
                        query;
                        $i++;
                    }
                ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>

    <!--------------------main-------------------->

    <script src="./script.js"></script>

    <!-----------icon script----->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>