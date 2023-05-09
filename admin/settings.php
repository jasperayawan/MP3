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
                      <h6 class="card-title mb-1 text-secondary fw-semibold">Site title</h6>
                      <p class="card-text" id="site_title"></p>
                      <h6 class="card-subtitle text-secondary fw-semibold">About us</h6>
                      <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-----------general settings modal--------->

                <div class="modal fade" id="general-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
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

                <div class="card border-0 shadow-sm mb-4">
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

                <!-----------contact section--------->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                      <div class="mb-2 d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0">Contacts Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-settings">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg> edit</button>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-4">
                            <h6 class="card-title mb-1 text-secondary  fw-semibold">Address</h6>
                            <p class="card-text" id="address"></p>
                          </div>
                          <div class="mb-4">
                            <h6 class="card-title mb-1 text-secondary  fw-semibold">Google Map</h6>
                            <p class="card-text" id="gmap"></p>
                          </div>
                          <div class="mb-4">
                            <h6 class="card-title mb-2 text-secondary fw-semibold">Phone Numbers</h6>
                            <p class="card-text">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                              <span id="phone1"></span>
                            </p>
                            <p class="card-text">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                              <span id="phone2"></span>
                            </p>
                          </div>
                          <div class="mb-4">
                            <h6 class="card-title mb-1 text-secondary  fw-semibold">E-mail</h6>
                            <p class="card-text" id="email"></p>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="mb-4">
                              <h6 class="card-title mb-2 text-secondary fw-semibold">Social Links</h6>
                              <p class="card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                                <span id="facebook"></span>
                              </p>
                              <p class="card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                                <span id="instagram"></span>
                              </p>
                              <p class="card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                                <span id="twitter"></span>
                              </p>
                          </div>

                          <div class="mb-4">
                              <h6 class="card-title mb-2 text-secondary fw-semibold">iFrame</h6>
                              <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <!-----------contact details modal--------->

                <div class="modal fade" id="contacts-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                    <form action="" id="contacts_settings_form">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Contacts Settings</h5>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid p-0">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="mb-3">
                                  <label class="form-label fw-semibold">Address</label>
                                  <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label fw-semibold">Google Map Link</label>
                                  <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label fw-semibold">Phone Numbers (with country code)</label>
                                  <div class="input-group mb-3">
                                    <span class="input-group-text">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                      </svg>
                                    </span>
                                    <input type="text" name="phone1" id="phone1_inp" class="form-control shadow-none" required>
                                  </div>
                                  <div class="input-group mb-3">
                                    <span class="input-group-text">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                      </svg>
                                    </span>
                                    <input type="text" name="phone2" id="phone2_inp" class="form-control shadow-none" required>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label fw-semibold">Email</label>
                                  <input type="email" name="eamil" id="email_inp" class="form-control shadow-none" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Social Links</label>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                      </span>
                                      <input type="text" name="facebook" id="facebook_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                      </span>
                                      <input type="text" name="instagram" id="instagram_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg>
                                      </span>
                                      <input type="text" name="twitter" id="twitter_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label fw-semibold">iFrame Src</label>
                                      <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="contacts_inp(contacts_data)">
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

    <script src="settingsScript.js"></script>
  </body>
</html>