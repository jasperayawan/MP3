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
            <a href="./settings.php">
              <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
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

        <div class="settings-content">
            <div class="px-4 position-relative">
                <h1 class="fs-3">Settings</h1>

                <!-----------general settings --------->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                      <div class="mb-2 d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-settings">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg> edit</button>
                      </div>
                      <h5 class="card-title fw-semibold">Site title</h5>
                      <p class="card-text" id="site_title"></p>
                      <h6 class="card-subtitle fw-semibold">About us</h6>
                      <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-----------general settings modal--------->

                <div class="modal" id="general-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                  <div class="modal-dialog">
                    <form action="" id="general_settings_form">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">General Settings</h5>
                        </div>
                        <div class="modal-body">
                          <div class="">
                            <label class="form-label fw-semibold">Site Title</label>
                            <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                          </div>
                          <div class="">
                            <label class="form-label fw-semibold">About us</label>
                            <textarea name="site_about" class="form-control shdaow-none" id="site_about_inp" rows="6" required></textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about">
                            Cancel
                          </button>
                          <button type="submit" class="btn btn-primary">
                            Submit
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <!-----------shutdown section--------->

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                      <div class="mb-2 d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0">Shutdown Website</h5>
                        <div class="form-check form-switch">
                          <form>
                            <input type="checkbox" class="form-check-input" id="shutdown-toggle" onchange="update_shutdown(this.value)">
                          </form>
                        </div>
                        
                      </div>
                      <p class="card-text">
                        No customers will be allowed to book hotel room, when shutdown mode is turned on.
                      </p>
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

    <?php
      require('./script.php')
    ?>

    <script>
      
        let general_data;

        let general_settings_form = document.getElementById('general_settings_form')
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        function get_general()
        {
          let site_title = document.getElementById('site_title');
          let site_about = document.getElementById('site_about');


          let shutdown_toggle = document.getElementById('shutdown-toggle');

          let xhr = new XMLHttpRequest();
          xhr.open("POST","ajax/settings_crud.php",true);
          xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

          xhr.onload = function(){
            general_data = JSON.parse(this.responseText);

            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;

            if(general_data.shutdown == 0){
              shutdown_toggle.checked = false;
              shutdown_toggle.value = 0;
            }else{
              shutdown_toggle.checked = true;
              shutdown_toggle.value = 1;
            }
          }

          xhr.send('get_general');
        }

        general_settings_form.addEventListener('submit', function(e){
          e.preventDefault();
          update_general(site_title_inp.value,site_about_inp.value);

        })

        function update_general(site_title_val,site_about_val)
        {
          let xhr = new XMLHttpRequest();
          xhr.open("POST","ajax/settings_crud.php",true);
          xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

          xhr.onload = function(){

              var myModal = document.getElementById('general-settings');
              var modal = bootstrap.Modal.getInstance(myModal);

              modal.hide();
              console.log(this.responseText);

              if(this.responseText == 1)
              {
                  alert('success','Changes saved');
                  get_general();
              }
              else{
                alert('error', 'No changes made')
              }
          }

          xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&update_general');
        }

        function update_shutdown(val)
        {
          let xhr = new XMLHttpRequest();
          xhr.open("POST","ajax/settings_crud.php",true);
          xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

          xhr.onload = function(){
              if(this.responseText == 1 && general_data.shutdown == 0)
              {
                  alert('success','Bayangan has been shutdown!');
              }
              else{
                alert('success', 'Shutdown mode off')
              }
              get_general();
          }

          xhr.send('update_shutdown='+val);
        }

        window.onload = function(){
          get_general();
        }
    </script>
  </body>
</html>