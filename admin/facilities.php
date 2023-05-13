<?php
require('../admin/essentials.php');
require('../admin/db_config.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3ce7f5ba6a.js" crossorigin="anonymous"></script>
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
                        <span class="title d-block position-relative text-start"><span>Bayangan</span>
                    </a>
                </li>
                <li class="position-relative w-100 nav-item">
                    <a href="./dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title d-block position-relative text-start">Dashboard</span>
                    </a>
                </li>
                <li class="position-relative w-100 nav-item">
                    <a href="../admin/queries.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title d-block position-relative text-start">Queries</span>
                </li>
                <li class="position-relative w-100 nav-item">
                    <a href="../admin/facilities.php">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                            </svg>
                        </span>
                        <span class="title d-block position-relative text-start">Features & Facilities</span>
                    </a>
                </li>
                <li class="position-relative w-100 nav-item">
                    <a href="../admin/rooms.php">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                            </svg>
                        </span>
                        <span class="title d-block position-relative text-start">Room</span>
                    </a>
                </li>
                <li class="position-relative w-100 nav-item">
                    <a href="./settings.php">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                            </svg>
                        </span>
                        <span class="title d-block position-relative text-start" id="logout">Settings</span>
                    </a>
                </li>
                <li class="position-relative w-100 nav-item">
                    <a href="./logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title d-block position-relative text-start" id="logout">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-------------main------------->

        <div class="main position-absolute">
            <div class="topbar d-flex w-100 justify-content-between align-items-center">
                <div class='d-flex justify-content-center align-items-center'>
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                </div>

                <div class="user">
                    <img src="../assets/diving.jpg" alt="worker1" width="50" height="50" id="user_img" />
                </div>
            </div>




            <!----------features------->

            <div class="details shadow-sm">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Feature</h2>
                    </div>
                    <div class="mb-2 d-flex align-items-center justify-content-end">
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-settings">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg> Add</button>
                    </div>
                    <table>
                        <thead style="background-color: #1A5F7A;">
                            <tr>
                                <td class="fw-bold text-white">id</td>
                                <td class="fw-bold text-white">Name</td>
                                <td class="fw-bold text-white">Action</td>
                            </tr>
                        </thead>
                        <tbody id="feature-data">
                        </tbody>
                    </table>
                </div>

                <!-------------Features modal-------------->

                <div class="modal fade" id="feature-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                    <div class="modal-dialog">
                        <form action="" id="feature_settings_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Feature</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="">
                                        <label class="form-label fw-semibold">Name</label>
                                        <input type="text" name="feature_name" class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">
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

            <div class="details shadow-sm">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Facilities</h2>
                    </div>
                    <div class="mb-2 d-flex align-items-center justify-content-end">
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-settings">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg> Add</button>
                    </div>
                    <table>
                        <thead style="background-color: #1A5F7A;">
                            <tr>
                                <td class="fw-bold text-white">id</td>
                                <td class="fw-bold text-white">Icon</td>
                                <td class="fw-bold text-white">Name</td>
                                <td class="fw-bold text-white">Description</td>
                                <td class="fw-bold text-white">Action</td>
                            </tr>
                        </thead>
                        <tbody id="facilities-data">
                        </tbody>
                    </table>
                </div>
            </div>

            <!-------------Facilities modal-------------->

            <div class="modal fade" id="facility-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                <div class="modal-dialog">
                    <form action="" id="facility_settings_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add facility</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Name</label>
                                    <input type="text" name="facility_name" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Icon</label>
                                    <input type="file" name="facility_icon" accept=".svg" class="form-control shadow-none" required>
                                </div>
                                <div class="m-3">
                                    <label class="form-label fw-semibold">Description</label>
                                    <textarea name="facility_desc" class="form-control shadow-none" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        let feature_settings_form = document.getElementById('feature_settings_form');
        let facility_settings_form = document.getElementById('facility_settings_form')

        feature_settings_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_feature();
        })

        function add_feature() {
            let data = new FormData();
            data.append('name', feature_settings_form.elements['feature_name'].value);
            data.append('add_feature', '');


            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('feature-settings');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'New member added!');
                    feature_settings_form.elements['feature_name'].value = '';
                    get_features();
                } else {
                    alert('error', 'server down!')
                }

            }

            xhr.send(data);
        }

        function get_features() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('feature-data').innerHTML = this.responseText;
            }

            xhr.send('get_features');
        }

        function rem_feature(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (this.responseText == 1) {
                    alert('success', 'Feature removed!');
                    get_features();
                } else if (this.responseText == 'room added') {
                    alert('error', 'Feature is added in room!')
                } else {
                    alert('error', 'Server down!');
                }
            }

            xhr.send('rem_feature=' + val);
        }

        facility_settings_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_facility();
        })

        function add_facility() {
            let data = new FormData();
            data.append('name', facility_settings_form.elements['facility_name'].value);
            data.append('icon', facility_settings_form.elements['facility_icon'].files[0]);
            data.append('desc', facility_settings_form.elements['facility_desc'].value);
            data.append('add_facility', '');


            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('facility-settings');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 'inv_img') {
                    alert('error', 'Only SVG images are allowed!');
                } else if (this.responseText == 'inv_size') {
                    alert('error', 'Image should be less than 1MB!');
                } else if (this.responseText == 'upd_failed') {
                    alert('error', 'Image upload failed. Server down!');
                } else {
                    alert('success', 'New facility added!');
                    facility_settings_form.reset();
                    get_facilities();
                }

            }

            xhr.send(data);
        }

        function get_facilities() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('facilities-data').innerHTML = this.responseText;
            }

            xhr.send('get_facilities');
        }

        function rem_facility(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (this.responseText == 1) {
                    alert('success', 'Facility removed!');
                    get_facilities();
                } else if (this.responseText == 'room added') {
                    alert('error', 'Facility is added in room!')
                } else {
                    alert('error', 'Server down!');
                }
            }

            xhr.send('rem_facility=' + val);
        }


        window.onload = function() {
            get_features();
            get_facilities();
        }
    </script>
</body>

</html>