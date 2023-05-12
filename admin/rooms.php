<?php
require('../admin/essentials.php');
require('../admin/db_config.php');
adminLogin();

if (isset($_GET['seen'])) {
    $form_data = filteration($_GET);

    if ($form_data['seen'] == 'all') {
        $query = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if (update($query, $values, 'i')) {
            alert('success', 'Marked all as read.');
        } else {
            alert('error', 'failed');
        }
    } else {
        $query = "UPDATE `user_queries` SET `seen`=? WHERE `id`=?";
        $values = [1, $form_data['seen']];
        if (update($query, $values, 'ii')) {
            alert('success', 'Marked as read.');
        } else {
            alert('error', 'failed');
        }
    }
}

if (isset($_GET['del'])) {
    $form_data = filteration($_GET);

    if ($form_data['del'] == 'all') {
        $query = "DELETE FROM `user_queries`";
        if (mysqli_query($conn, $query)) {
            alert('success', 'All Message deleted!');
        } else {
            alert('error', 'failed');
        }
    } else {
        $query = "DELETE FROM `user_queries` WHERE `id`=?";
        $values = [$form_data['del']];
        if (delete($query, $values, 'i')) {
            alert('success', 'Message deleted!');
        } else {
            alert('error', 'failed');
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
                    <a href="adminProduct.html">
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




            <!----------order details list------->

            <div class="px-4 px-lg-5 py-lg-5">
                <div class="text-end py-2">
                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg> Add</button>
                </div>
                <table class="table table-hover">
                    <thead style="background-color: #1A5F7A;">
                        <tr>
                            <td class="fw-bold text-white">id</td>
                            <td class="fw-bold text-white">Name</td>
                            <td class="fw-bold text-white">Area Guest</td>
                            <td class="fw-bold text-white">Price</td>
                            <td class="fw-bold text-white">Quantity</td>
                            <td class="fw-bold text-white">Status</td>
                        </tr>
                    </thead>
                    <tbody id="room-data">

                    </tbody>
                </table>
            </div>

            <!-----add room modal---->

            <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <form id="add_room_form" autocomplete="off">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-between align-items-center">
                                <h5 class="modal-title text-dark">Add Room</h5>
                                <button class="btn btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label fw-bold">Name</label>
                                        <input type="text" name="name" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label fw-bold">Area</label>
                                        <input type="number" min="1" name="area" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label fw-bold">Price</label>
                                        <input type="number" min="1" name="price" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label fw-bold">Quantity</label>
                                        <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label fw-bold">Adult (Max.)</label>
                                        <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label fw-bold">Children (Max.)</label>
                                        <input type="number" min="1" name="children" class="form-control shadow-none" required>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-secondary" type="submit">Submit</button>
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
        let add_room_form = document.getElementById('add_room_form')

        add_room_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_rooms();
        })

        function add_rooms() {
            let data = new FormData();
            data.append('add_rooms', '');
            data.append('name', add_room_form.elements['name'].value);
            data.append('area', add_room_form.elements['area'].value);
            data.append('price', add_room_form.elements['price'].value);
            data.append('quantity', add_room_form.elements['quantity'].value);
            data.append('adult', add_room_form.elements['adult'].value);
            data.append('children', add_room_form.elements['children'].value);

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('add-room');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                if (this.responseText == 1) {
                    alert('success', 'new room added!');
                    add_room_form.reset();
                    
                } else {
                    alert('error', 'Server down!');
                }
            }

            xhr.send(data);
        }
    </script>
</body>

</html>