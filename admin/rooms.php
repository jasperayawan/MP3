<?php
require('../admin/essentials.php');
require('../admin/db_config.php');
adminLogin();
require('../admin/script.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Room - Dashboard</title>
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
                        <h2>Room</h2>
                    </div>
                    <div class="mb-2 d-flex align-items-center justify-content-end">
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room-settings">
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
                                <td class="fw-bold text-white">Area</td>
                                <td class="fw-bold text-white">Guests</td>
                                <td class="fw-bold text-white">Price</td>
                                <td class="fw-bold text-white">Quantity</td>
                                <td class="fw-bold text-white">Status</td>
                                <td class="fw-bold text-white">Action</td>
                            </tr>
                        </thead>
                        <tbody id="room-data">
                        </tbody>
                    </table>
                </div>

                <!-------------Room modal-------------->

                <div class="modal fade" id="add-room-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <form action="" id="add_room_form" autocomplete="off">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Room</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Name</label>
                                            <input type="text" name="name" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Area</label>
                                            <input type="number" min="1" name="area" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Price</label>
                                            <input type="number" min="1" name="price" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Quantity</label>
                                            <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Adult (Max.)</label>
                                            <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Children (Max.)</label>
                                            <input type="number" min="1" name="children" class="form-control shadow-none" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label fw-semibold">Feature</label>
                                            <div class="row">
                                                <?php
                                                $res = selectAll('features');

                                                while ($opt = mysqli_fetch_assoc($res)) {
                                                    echo "
                                                            <div class='col-md-3 mb-1'>
                                                                <label>
                                                                    <input type='checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none'>
                                                                    $opt[name]
                                                                </label>
                                                            </div>
                                                        ";
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label class="form-label fw-semibold">Facilities</label>
                                            <div class="row">
                                                <?php
                                                $res = selectAll('facilities');

                                                while ($opt = mysqli_fetch_assoc($res)) {
                                                    echo "
                                                            <div class='col-md-3 mb-1'>
                                                                <label>
                                                                    <input type='checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                                                    $opt[name]
                                                                </label>
                                                            </div>
                                                        ";
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label fw-bold">Description</label>
                                            <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                                        </div>

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

                <!-------------edit Room modal-------------->

                <div class="modal fade" id="edit-room-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <form action="" id="edit_room_form" autocomplete="off">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Room</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Name</label>
                                            <input type="text" name="name" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Area</label>
                                            <input type="number" min="1" name="area" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Price</label>
                                            <input type="number" min="1" name="price" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Quantity</label>
                                            <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Adult (Max.)</label>
                                            <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Children (Max.)</label>
                                            <input type="number" min="1" name="children" class="form-control shadow-none" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label fw-semibold">Feature</label>
                                            <div class="row">
                                                <?php
                                                $res = selectAll('features');

                                                while ($opt = mysqli_fetch_assoc($res)) {
                                                    echo "
                                                            <div class='col-md-3 mb-1'>
                                                                <label>
                                                                    <input type='checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none'>
                                                                    $opt[name]
                                                                </label>
                                                            </div>
                                                        ";
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label class="form-label fw-semibold">Facilities</label>
                                            <div class="row">
                                                <?php
                                                $res = selectAll('facilities');

                                                while ($opt = mysqli_fetch_assoc($res)) {
                                                    echo "
                                                            <div class='col-md-3 mb-1'>
                                                                <label>
                                                                    <input type='checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                                                    $opt[name]
                                                                </label>
                                                            </div>
                                                        ";
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label fw-bold">Description</label>
                                            <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                                        </div>

                                        <input type="hidden" name='room_id'>

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

                <!--------------Manage room images modal--------->

                <div class="modal fade" id="room-images" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                       
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Room Name</h5>
                                    <button type="button" class="btn btn-dark btn-close" aria-label="close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="image-alert"></div>
                                    <div class="border-bottom border-3 pb-3 mb-3">
                                        <form id="add_image_form">
                                            <label class="form-label fw-semibold">Add image</label>
                                            <input type="file" name="image" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none mb-3" required>
                                            <button class="btn shadow-none text-white btn-info">Add</button>
                                            <input type="hidden" name="room_id">
                                        </form>
                                    </div>
                                </div>

                                <div class="table-responsive-lg" style="height:350px; overflow-y: scroll;">
                                <table class="table text-center">
                                    <thead style="background-color: #1A5F7A;">
                                        <tr class="sticky-top">
                                            <th scope="col" width="60%" class="fw-bold text-white">Image</th>
                                            <th scope="col" class="fw-bold text-white">Thumb</th>
                                            <th scope="col" class="fw-bold text-white">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="room-image-data">
                                    </tbody>
                                </table>
                                </div>
                            </div>
                      
                    </div>
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
        let add_room_form = document.getElementById('add_room_form');

        add_room_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_rooms();
        });

        function add_rooms() {
            let data = new FormData();
            data.append('add_room', '');
            data.append('name', add_room_form.elements['name'].value);
            data.append('area', add_room_form.elements['area'].value);
            data.append('price', add_room_form.elements['price'].value);
            data.append('quantity', add_room_form.elements['quantity'].value);
            data.append('adult', add_room_form.elements['adult'].value);
            data.append('children', add_room_form.elements['children'].value);
            data.append('desc', add_room_form.elements['desc'].value);

            let features = [];

            add_room_form.elements['features'].forEach(el => {
                if (el.checked) {
                    features.push(el.value)
                }
            });

            let facilities = [];

            add_room_form.elements['facilities'].forEach(el => {
                if (el.checked) {
                    facilities.push(el.value)
                }
            });

            data.append('features', JSON.stringify(features));
            data.append('facilities', JSON.stringify(facilities));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('add-room-settings');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'New room added!');
                    add_room_form.reset();
                    get_all_rooms();

                } else {
                    alert('error', 'server down!')
                }

            }

            xhr.send(data);
        }

        function get_all_rooms() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('room-data').innerHTML = this.responseText;

            }

            xhr.send('get_all_rooms');
        }

        let edit_room_form = document.getElementById('edit_room_form');

        edit_room_form.addEventListener('submit', function(e) {
            e.preventDefault();
            submit_edit_room();

        })

        function submit_edit_room() {
            let data = new FormData();
            data.append('edit_room', '');
            data.append('room_id', edit_room_form.elements['room_id'].value);
            data.append('name', edit_room_form.elements['name'].value);
            data.append('area', edit_room_form.elements['area'].value);
            data.append('price', edit_room_form.elements['price'].value);
            data.append('quantity', edit_room_form.elements['quantity'].value);
            data.append('adult', edit_room_form.elements['adult'].value);
            data.append('children', edit_room_form.elements['children'].value);
            data.append('desc', edit_room_form.elements['desc'].value);

            let features = [];

            edit_room_form.elements['features'].forEach(el => {
                if (el.checked) {
                    features.push(el.value)
                }
            });

            let facilities = [];

            edit_room_form.elements['facilities'].forEach(el => {
                if (el.checked) {
                    facilities.push(el.value)
                }
            });

            data.append('features', JSON.stringify(features));
            data.append('facilities', JSON.stringify(facilities));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('edit-room-settings');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Room data edited!');
                    edit_room_form.reset();
                    get_all_rooms();

                } else {
                    alert('error', 'server down!')
                }

            }

            xhr.send(data);
        }

        function edit_details(id) {
            let xhr = new XMLHttpRequest();

            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                let data = JSON.parse(this.responseText);

                edit_room_form.elements['name'].value = data.roomdata.name;
                edit_room_form.elements['area'].value = data.roomdata.area;
                edit_room_form.elements['price'].value = data.roomdata.price;
                edit_room_form.elements['quantity'].value = data.roomdata.quantity;
                edit_room_form.elements['adult'].value = data.roomdata.adult;
                edit_room_form.elements['children'].value = data.roomdata.children;
                edit_room_form.elements['desc'].value = data.roomdata.description;
                edit_room_form.elements['room_id'].value = data.roomdata.id;

                edit_room_form.elements['features'].forEach(el => {
                    if (data.features.includes(Number(el.value))) {
                        el.checked = true;
                    }
                });

                edit_room_form.elements['facilities'].forEach(el => {
                    if (data.facilities.includes(Number(el.value))) {
                        el.checked = true;
                    }
                });
            }

            xhr.send('get_room=' + id);
        }


        function toggle_status(id, val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (this.responseText == 1) {
                    alert('success', 'Status toggled!');
                    get_all_rooms();
                } else {
                    alert('error', 'Server down')
                }
            }

            xhr.send('toggle_status=' + id + '&value=' + val);
        }

        let add_image_form = document.getElementById('add_image_form');

        add_image_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_image();
        })

        function add_image()
        {
            let data = new FormData();

            data.append('image',add_image_form.elements['image'].files[0]);
            data.append('room_id',add_image_form.elements['room_id'].value);
            data.append('add_image', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);

            xhr.onload = function()
            {
                if(this.responseText == 'inv_img'){
                    alert('error','Only JPG, WEBP or PNG images are allowed!','image-alert');
                }
                else if(this.responseText == 'inv_size'){
                    alert('error','Image should be less than 2MB!','image-alert');
                }
                else if(this.responseText == 'upd_failed'){
                    alert('error','Image upload failed. Server down!','image-alert');
                }
                else{
                    alert('success','New image added!','image-alert');
                    room_images(add_image_form.elements['room_id'].value,document.querySelector('#room-images .modal-title').innerText);
                    add_image_form.reset();
                }
            }
           

            xhr.send(data);
        }

        function room_images(id,rname)
        {
            document.querySelector('#room-images .modal-title').innerText = rname;
            add_image_form.elements['room_id'].value = id;
            add_image_form.elements['image'].value = '';

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('room-image-data').innerHTML = this.responseText;
            }

            xhr.send('get_room_images='+id);

        }

        function rem_image(img_id,room_id)
        {
            let data = new FormData();

            data.append('image_id',img_id);
            data.append('room_id',room_id);
            data.append('rem_image','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);

            xhr.onload = function()
            {
                if(this.responseText == 1){
                    alert('success','Image removed!','image-alert');
                    room_images(room_id,document.querySelector('#room-images .modal-title').innerText);
                }
                else{
                    alert('error','Image removal failed!','image-alert');
                }
            }
            xhr.send(data);
        }

        function thumb_image(img_id,room_id)
        {
            let data = new FormData();

            data.append('image_id',img_id);
            data.append('room_id',room_id);
            data.append('thumb_image','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);

            xhr.onload = function()
            {
                if(this.responseText == 1){
                    alert('success','Image Thumbnail changed!','image-alert');
                    room_images(room_id,document.querySelector('#room-images .modal-title').innerText);
                }
                else{
                    alert('error','Thumbnail update failed!','image-alert');
                }
            }
            xhr.send(data);
        }

        function remove_room(room_id)
        {
            if(confirm("Are you sure you want to delet this room?"))
            {
                let data = new FormData();
                data.append('room_id',room_id);
                data.append('remove_room','');

                let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);

            xhr.onload = function()
            {
                if(this.responseText == 1){
                    alert('success','Room removed!');
                    get_all_rooms();

                }
                else{
                    alert('error','Room removal failed!');
                }
            }
            xhr.send(data);
            }
            
        }

        window.onload = function() {
            get_all_rooms();
        }
    </script>
</body>

</html>