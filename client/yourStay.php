<?php
require('../admin/db_config.php');
require('../admin/essentials.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your stay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="yourStay.css">
</head>

<body>
    <?php
    require('../components/header.php')
    ?>

    <main>
        <section class="heroStay">
            <div class="container">
                <div class="heroStay_content d-flex justify-content-center align-items-center">
                    <h1 class="text-white">Your Stay</h1>
                </div>
            </div>
        </section>

        <section class="roomCollection py-md-5 container-fluid py-5">
            <div class=" py-md-5">
                <div class="roomCollection_content">
                    <div class="title">
                        <h1>Room Collection</h1>
                    </div>

                    <div class="row">

                        <!-- <div class="col rooms p-4 d-flex flex-column justify-content-between flex-lg-row position-relative gap-4 bg-light">
                            <img src="../assets/Confortroom.jpg" alt="room 1" class="rounded-2 object-fit-cover">
                            <div class="d-flex flex-c gap-2">
                                <div class="">
                                    <h2 class="fs-5">Room 1</h2>
                                    <span>Size of Room</span>
                                    <span>Good for how manay people</span>
                                    <span>size of bed</span>
                                    <span>Room service / amenities</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column w-25 gap-3">
                                <div class="star_ratings">
                                    <h2 class="fs-5">Ratings</h2>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>

                                </div>
                                <div class="buttons d-flex flex-column gap-2">
                                    <button class="btn btn_book btn-sm">Book now</button>
                                    <button class="btn btn_viewDetails btn-sm">details</button>
                                </div>
                            </div>
                        </div>

                        <div class="col rooms p-4 d-flex flex-column justify-content-between flex-lg-row position-relative gap-4 bg-light">
                            <img src="../assets/Confortroom.jpg" alt="room 1" class="rounded-2 object-fit-cover">
                            <div class="d-flex flex-c gap-2">
                                <div class="">
                                    <h2 class="fs-5">Room 2</h2>
                                    <span>Size of Room</span>
                                    <span>Good for how manay people</span>
                                    <span>size of bed</span>
                                    <span>Room service / amenities</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column w-25 gap-3">
                                <div class="star_ratings">
                                    <h2 class="fs-5">Ratings</h2>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>

                                </div>
                                <div class="buttons d-flex flex-column gap-2">
                                    <button class="btn btn_book btn-sm">Book now</button>
                                    <button class="btn btn_viewDetails btn-sm">details</button>
                                </div>
                            </div>
                        </div>

                        <div class="col rooms p-4 d-flex flex-column justify-content-between flex-lg-row position-relative gap-4 bg-light">
                            <img src="../assets/Confortroom.jpg" alt="room 1" class="rounded-2 object-fit-cover">
                            <div class="d-flex flex-c gap-2">
                                <div class="">
                                    <h2 class="fs-5">Room 3</h2>
                                    <span>Size of Room</span>
                                    <span>Good for how manay people</span>
                                    <span>size of bed</span>
                                    <span>Room service / amenities</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column w-25 gap-3">
                                <div class="star_ratings">
                                    <h2 class="fs-5">Ratings</h2>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>

                                </div>
                                <div class="d-flex flex-column gap-2 w-100">
                                    <button class="btn btn_book btn-sm w-100">Book now</button>
                                    <button class="btn btn_viewDetails btn-sm w-100">details</button>
                                </div>
                            </div>
                        </div> -->

                        <div class="d-flex flex-column gap-4">
                            <!-- room 1 -->
                        <div class="card mb-3 rounded-0">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/DR_2.jpg" class="img-fluid rounded-0" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h5 class="card-title" style="color:#1A5F7A">Standard Room</h5>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/pan_zoom_FILL0_wght400_GRAD0_opsz48.png" alt="rooms size" style="width:40px;">
                                                <span>0.00 sq. m</span>
                                            </li>
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px;">
                                                <span>Good for 1 person</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px;">
                                                <span>Single Bed</span>
                                            </li>
                                        </ul>
                                        <a class="form-text">Includes amenities afforded to lower room types</a> <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <p>From</p>
                                        <p style="text-decoration-line: line-through">Php 950.00</p>
                                        <p>0.00/night</p>
                                        <p>Only available with King Bed rate and availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- room 2 -->
                        <div class="card mb-3 rounded-0">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/DSR_1.jpg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h5 class="card-title" style="color:#1A5F7A">Deluxe Room</h5>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/pan_zoom_FILL0_wght400_GRAD0_opsz48.png" alt="rooms size" style="width:40px">
                                                <span>0.00 sq. m</span>
                                            </li>
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px">
                                                <span>Good for 1 person</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px">
                                                <span>Single Bed</span>
                                            </li>
                                        </ul>
                                        <a class="form-text">Includes amenities afforded to lower room types</a> <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <p>From</p>
                                        <p style="text-decoration-line: line-through">Php 950.00</p>
                                        <p>0.00/night</p>
                                        <p>Only available with King Bed rate and availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- room 3 -->
                        <div class="card mb-3 rounded-0">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/DOR_2.jpg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h5 class="card-title" style="color:#1A5F7A">Double Room</h5>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/pan_zoom_FILL0_wght400_GRAD0_opsz48.png" alt="rooms size" style="width:40px">
                                                <span>0.00 sq. m</span>
                                            </li>
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px">
                                                <span>Good for 1 person</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px">
                                                <span>Single Bed</span>
                                            </li>
                                        </ul>
                                        <a class="form-text">Includes amenities afforded to lower room types</a> <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <p>From</p>
                                        <p style="text-decoration-line: line-through">Php 950.00</p>
                                        <p>0.00/night</p>
                                        <p>Only available with King Bed rate and availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- room 4 -->
                        <div class="card mb-3 rounded-0">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/OBS_1.jpg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h5 class="card-title" style="color:#1A5F7A">Premium Suite</h5>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/pan_zoom_FILL0_wght400_GRAD0_opsz48.png" alt="rooms size" style="width:40px">
                                                <span>0.00 sq. m</span>
                                            </li>
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px">
                                                <span>Good for 1 person</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px">
                                                <span>Single Bed</span>
                                            </li>
                                        </ul>
                                        <a class="form-text">Includes amenities afforded to lower room types</a> <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <p>From</p>
                                        <p style="text-decoration-line: line-through">Php 950.00</p>
                                        <p>0.00/night</p>
                                        <p>Only available with King Bed rate and availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- room 4 -->
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/Confortroom.jpg" class="img-fluid rounded-start h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0" style="background-color: #E38B29; color: #fff">
                                        <p>From</p>
                                        <p style="text-decoration-line: line-through">Php 950.00</p>
                                        <p>0.00/night</p>
                                        <p>Only available with King Bed rate and availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/Confortroom.jpg" class="img-fluid rounded-start h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0" style="background-color: #E38B29; color: #fff">
                                        <p>From</p>
                                        <p style="text-decoration-line: line-through">Php 950.00</p>
                                        <p>0.00/night</p>
                                        <p>Only available with King Bed rate and availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0" style="background-color: #1A5F7A">
                                            Select Room
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ourGuestSay">
            <div class="container">
                <div class="ourGuestSay_content d-flex flex-column gap-5 justify-content-center align-items-center">
                    <div class="titleGuest">
                        <h1>Our Guests Say It Best</h1>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center gap-4 w-50">
                        <div class="star_ratings">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                        </div>
                        <div class="statement">
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, commodi
                                aperiam quisquam, veritatis aut quasi, doloribus unde veniam maxime iste
                                qui. Quasi, maiores. Amet deleniti laboriosam harum consequatur recusandae
                                dicta cum nobis consectetur culpa. Laudantium aut ea magni quod. Atque?</p>
                        </div>
                        <div class="userProfile">
                            <table>
                                <tr class="d-flex gap-3">
                                    <td>
                                        <img src="../assets/capcake.jpg" alt="" width="40" height="40" class="rounded-5">
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <h2>Judith Black</h2>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="relative px-4">
            <div class="roomOffers py-4 py-md-5">
                <div class="title_SPA w-100">
                    <h1>Resort SPA</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 w-100">

                    <div class="col p-1">
                        <div class="card h-100">
                            <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title title">Offer 1</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer border-0 py-4" style="background-color: #E38B29; color: #fff">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn_bookNowOffers" style="background-color: #1A5F7A">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col p-1">
                        <div class="card h-100">
                            <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title title">Offer 2</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer border-0 py-4" style="background-color: #E38B29; color: #fff">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn_bookNowOffers" style="background-color: #1A5F7A">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col p-1">
                        <div class="card h-100">
                            <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title title">Offer 3</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer border-0 py-4" style="background-color: #E38B29; color: #fff">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn_bookNowOffers" style="background-color: #1A5F7A">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    require('../components/footer.php')
    ?>
</body>

</html>