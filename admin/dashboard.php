<?php
    require('../admin/essentials.php');
    adminLogin();
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
      <div class="navigation_container position-fixed h-100">
        <ul class="position-absolute w-100 list-unstyled">
          <li class="position-relative w-100 nav-item">
            <a href="index.html" class="harvest_logo">
              <span class="icon">
                <!-- <i class="fa-solid fa-tractor"></i> -->
              </span>
              <span class="title d-block position-relative text-start"
                ><span>Bayangan</span
              >
            </a>
          </li>
          <li class="position-relative w-100 nav-item">
            <a href="admin-dashboard.html">
              <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="title d-block position-relative text-start"
                >Dashboard</span
              >
            </a>
          </li>
          <li class="position-relative w-100 nav-item">
            <a href="adminUsers.html">
              <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
              </span>
              <span class="title d-block position-relative text-start"
                >Users</span
              >
          </li>
          <li class="position-relative w-100 nav-item">
            <a href="adminProduct.html">
              <span class="icon">
                <ion-icon name="cube-outline"></ion-icon>
              </span>
              <span class="title d-block position-relative text-start"
                >Room</span
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

      <div class="main position-absolute">
        <div
          class="topbar d-flex w-100 justify-content-between align-items-center"
        >
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>
          <div class="search">
            <label>
              <input type="text" placeholder="Search here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>
          <div class="user">
            <img src="../assets/diving.jpg" alt="worker1" width="50" height="50" id="user_img"/>
          </div>
        </div>

        <!----------cards------------>

        <div class="cardBox">
          <div class="card">
            <div>
              <div class="numbers">0</div>
              <div class="cardName">Daily Views</div>
            </div>

            <div class="iconBx">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">0</div>
              <div class="cardName">Booking</div>
            </div>

            <div class="iconBx">
              <ion-icon name="cart-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">0</div>
              <div class="cardName">Reviews</div>
            </div>

            <div class="iconBx">
              <ion-icon name="chatbubble-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">Php 0</div>
              <div class="cardName">Earning</div>
            </div>

            <div class="iconBx">
              <ion-icon name="cash-outline"></ion-icon>
            </div>
          </div>
        </div>

        <!----------order details list------->

        <div class="details">
          <div class="recentOrders">
            <div class="cardHeader">
              <h2>Recent Booking</h2>
              <a href="" class="btn">View all</a>
            </div>

            <table>
              <thead>
                <tr>
                  <td class="fw-bold">id</td>
                  <td class="fw-bold">Name</td>
                  <td class="fw-bold">Location</td>
                  <td class="fw-bold">User Type</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Leonel</td>
                  <td>Agartha</td>
                  <td><span class="status Male">Male</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Gabrielle</td>
                  <td>Agartha</td>
                  <td><span class="status Female">Female</span></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!----------new customers------------->

          <div class="recentCustomers">
            <div class="cardHeader">
              <h2>Recent Customers</h2>
            </div>

            <table>
              <tr>
                <td width="60px">
                  <div class="imgBx">
                    <img src="../assets/diving.jpg" alt="" />
                  </div>
                </td>
                <td>
                  <h4>
                    jasper <br />
                    <span>Pitogo</span>
                  </h4>
                </td>
              </tr>

              <tr>
                <td width="60px">
                  <div class="imgBx">
                    <img src="../assets/diving.jpg" alt="" />
                  </div>
                </td>
                <td>
                  <h4>
                    jasper <br />
                    <span>Pitogo</span>
                  </h4>
                </td>
              </tr>

              <tr>
                <td width="60px">
                  <div class="imgBx">
                    <img src="../assets/diving.jpg" alt="" />
                  </div>
                </td>
                <td>
                  <h4>
                    jayson <br />
                    <span>Pitogo</span>
                  </h4>
                </td>
              </tr>

              <tr>
                <td width="60px">
                  <div class="imgBx">
                    <img src="../assets/diving.jpg" alt="" />
                  </div>
                </td>
                <td>
                  <h4>
                    jasper <br />
                    <span>Pitogo</span>
                  </h4>
                </td>
              </tr>
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