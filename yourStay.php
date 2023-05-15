<?php
require('./admin/db_config.php');
require('./admin/essentials.php')
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
    <link rel="stylesheet" href="./yourStay.css">
</head>

<body>
<?php
    require('./components/header.php');
    ?>

    <main>
        <section class="heroStay">
            <div class="container">
                <div class="heroStay_content d-flex justify-content-center align-items-center">
                    <h1 class="text-white">BOOK YOUR STAY</h1>
                </div>
            </div>
        </section>

        <section class="roomCollection py-md-5 container-fluid py-5">
            <div class=" py-md-5">
                <div class="roomCollection_content px-4">
                    <div class="title">
                        <h2 style="color:#1A5F7A"><strong>ROOM COLLECTION</strong></h2>
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

                        <?php
                            $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `removed`=?",[1,0],'ii');
                            while($room_data = mysqli_fetch_assoc($room_res))
                            {
                                // get features of room

                                $features_query = mysqli_query($conn,"SELECT f.name FROM `features` f 
                                    INNER JOIN `room_features` rfea ON f.id = rfea.features_id 
                                    WHERE rfea.room_id = '$room_data[id]'");

                                $features_data = "";
                                while($fea_row = mysqli_fetch_assoc($features_query)){
                                    $features_data .="<span class='badge rounded-pill bg-light text-dark text-wrap'>$fea_row[name]</span>";
                                    
                                }
                                // echo $features_data;

                                $facility_query = mysqli_query($conn, "SELECT f.name FROM `facilities` f 
                                    INNER JOIN `room_facilities` rfac ON f.id = rfac.facilities_id 
                                    WHERE rfac.room_id = '$room_data[id]'");

                                $facilities_data = "";
                                while($fac_row = mysqli_fetch_assoc($facility_query)){
                                    $facilities_data .="<span class='badge rounded-pill bg-light text-dark text-wrap'>$fac_row[name]</span>";
                                    
                                }

                                //get thumbnail of image

                                $room_thumb = ROOMS_PATH."thumbnail.jpg";
                                $thumb_query = mysqli_query($conn, "SELECT * FROM `room_images` 
                                    WHERE `room_id`='$room_data[id]' 
                                    AND `thumb`='1'");

                                    if(mysqli_num_rows($thumb_query)>0){
                                        $thumb_res = mysqli_fetch_assoc($thumb_query);
                                        $room_thumb = ROOMS_PATH.$thumb_res['image'];
                                    }

                                    //print room card

                                    echo <<<data
                                            <div class="card mb-3 rounded-0 p-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="$room_thumb" class="img-fluid rounded-0 h-100" alt="...">
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
                                                        <a type="button" href="room_details.php?id=$room_data[id]" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                                            View Details
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                                        <p>From</p>
                                                        <p style="text-decoration-line: line-through">₱$room_data[price]</p>
                                                        <p>0.00/night</p>
                                                        <p>Only available with King Bed rate and availability are subject to changes.</p>
                                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                                            BOOK ROOM
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>      
                                    data;

                                    
                            }
                        ?>

                        <div class="d-flex flex-column gap-4">
                            <!-- room 1 -->
                        <!-- <div class="card mb-3 rounded-0">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/DR_2.jpg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h3 class="card-title" style="color:#1A5F7A"><strong>Standard Single Room</strong></h3>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px;">
                                                <span>Good for 1 person</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px;">
                                                <span>Single Bed</span>
                                            </li>
                                            <li>
                                                <p>
                                                    Our Standard Single Room is for those who travel alone but want the basic comforts their budget can offer.
                                                </p>
                                            </li>
                                        </ul>
                                        <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <br />
                                        <h3>P920.00/night</h3>
                                        <p>Availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- room 2 -->
                        <!-- <div class="card mb-3 rounded-0">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/DSR_1.jpg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h3 class="card-title" style="color:#1A5F7A"><strong>Deluxe Room</strong></h3>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px">
                                                <span>Good for 2 people</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px">
                                                <span>Queen Bed</span>
                                            </li>
                                            <li>
                                                <p>
                                                    The Deluxe Room is perfect for travelling partners. The room has 1 full Queen Bed complete with all the basic amenities.
                                                </p>
                                            </li>
                                        </ul>
                                        <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <br />
                                        <h3>P1,350.00/night</h3>
                                        <p>Availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- room 3 -->
                        <!-- <div class="card mb-3 rounded-0">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/DOR_2.jpg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h3 class="card-title" style="color:#1A5F7A"><strong>Double Room</strong></h3>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px">
                                                <span>Good for 2 people</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px">
                                                <span>2 Single Beds</span>
                                            </li>
                                            <li>
                                                <p>
                                                    The Double Room is great for travelling companions/partners. Each person gets their own single bed complete with all the basic amenities we offer.
                                                </p>
                                            </li>
                                        </ul>
                                        <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <br />
                                        <h3>P1,280.00/night</h3>
                                        <p>Availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- room 4 -->
                        <!-- <div class="card mb-3 rounded-0">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/OBS_1.jpg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h3 class="card-title" style="color:#1A5F7A"><strong>Premium Suite</strong></h3>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px">
                                                <span>Good for 2 people</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px">
                                                <span>King Bed</span>
                                            </li>
                                            <li>
                                                <p>
                                                    This is a favorite among business travelers and those who want some extra room when they travel.
                                                </p>
                                            </li>
                                        </ul>
                                        <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <br />
                                        <h3>P1,850.00/night</h3>
                                        <p>Availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

<<<<<<< HEAD:client/yourStay.php
                        <!-- room 5 -->
                        <div class="card mb-3 rounded-0">
=======
                        <!-- room 4 -->
                        <!-- <div class="card mb-3">
>>>>>>> d77534b396df5e4a0a6325aa21b9bf526e24710b:yourStay.php
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/DAYBEDS.jpg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h3 class="card-title" style="color:#1A5F7A"><strong>Beach Day Beds</strong></h3>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px">
                                                <span>Good for Group</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px">
                                                <span>Outdoor Lounge Bed</span>
                                            </li>
                                            <li>
                                                <p>
                                                    This is perfect for a group who wants to camp-out in our beach and sleep under the stars.
                                                </p>
                                            </li>
                                        </ul>
                                        <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <br />
                                        <h3>P400.00/night</h3>
                                        <p>Availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

<<<<<<< HEAD:client/yourStay.php
                        <!-- room 6 -->
                        <div class="card mb-3 rounded-0">
=======
                        <!-- <div class="card mb-3">
>>>>>>> d77534b396df5e4a0a6325aa21b9bf526e24710b:yourStay.php
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/VILLA_1.jpeg" class="img-fluid rounded-0 h-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body rounded-0">
                                        <h3 class="card-title" style="color:#1A5F7A"><strong>Villa</strong></h3>
                                        <ul class="navbar-nav">
                                            <li>
                                                <img src="../assets/group_FILL0_wght400_GRAD0_opsz48.png" alt="number of people" style="width:40px">
                                                <span>Good for Group</span>
                                            </li>
                                            <li>
                                                <img src="../assets/king_bed_FILL0_wght400_GRAD0_opsz48.png" alt="bed size" style="width:40px">
                                                <span>3 Double Beds</span>
                                            </li>
                                            <li>
                                                <p>
                                                    Our Villas are for families who enjoy interior comfort, with french doors and windows oriented to admit the sea breeze. 
                                                </p>
                                            </li>
                                        </ul>
                                        <br />
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0 mt-2" style="background-color: #1A5F7A">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-footer d-flex flex-column h-100 border-0 rounded-0" style="background-color: #E38B29; color: #fff">
                                        <br />
                                        <h3>P2,800.00/night</h3>
                                        <p>Availability are subject to changes.</p>
                                        <a type="button" href="#" class="btn btn-primary border-0 rounded-0" style="background-color: #1A5F7A">
                                            BOOK ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD:client/yourStay.php
                        </div>

=======
                        </div> -->
>>>>>>> d77534b396df5e4a0a6325aa21b9bf526e24710b:yourStay.php
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ourGuestSay">
            <div class="container">
                <div class="ourGuestSay_content d-flex flex-column gap-5 justify-content-center align-items-center">
                    <div class="titleGuest">
                        <p class="title" style="letter-spacing:0.15em; font-size:20px mt-5">OUR GUESTS SAY IT BEST</p>
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
                        <div class="statement text-center d-flex flex-column justify-content-center align-items-center">
                            <h2><em>“Indulge in sophistication and unparalleled hospitality with our stylish rooms and service.”</em></h2>
                            <p>“Experience elegance, stunning ocean views, and outstanding service at our hotel. 
                            Our rooms are impeccably designed, the ocean views are breathtaking, and our staff will cater to your every need.”</p>
                            <p>-Mark, on Google Review</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="relative px-4">
            <div class="roomOffers py-4 py-md-5">
                <div class="title_SPA w-100">
                    <h2 style="color:#1A5F7A"><strong>RESORT OFFERINGS</strong></h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 w-100">

                    <div class="col p-1">
                        <div class="card h-100 rounded-0">
                            <img src="../assets/Confortroom.jpg" class="card-img-top rounded-0" alt="...">
                            <div class="card-body rounded-0">
                                <h3 class="card-title title" style="color:#1A5F7A">Camp Out</h3>
                                <p class="card-text" style="color:#1A5F7A">Enjoy the most of our water activities with this offer and get an exclusive service when you hop to Bayanagan Island!</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn_bookNowOffers rounded-0" style="background-color: #1A5F7A">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-1">
                        <div class="card h-100 rounded-0">
                            <img src="../assets/Confortroom.jpg" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h3 class="card-title title rounded-0" style="color:#1A5F7A">Flexible Rate</h3>
                                <p class="card-text" style="color:#1A5F7A">Book with confidence and enjoy flexible cancellation up to 1 day before your stay.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn_bookNowOffers rounded-0" style="background-color: #1A5F7A">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-1">
                        <div class="card h-100 rounded-0">
                            <img src="../assets/Confortroom.jpg" class="card-img-top rounded-0" alt="...">
                            <div class="card-body rounded-0">
                                <h3 class="card-title title rounded-0" style="color:#1A5F7A">Rise and Dine</h3>
                                <p class="card-text" style="color:#1A5F7A">Add a breakfast and dinner to your beach get away with meals from our Patio Bayangan!</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn_bookNowOffers rounded-0" style="background-color: #1A5F7A">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    require('./footer.php')
    ?>
</body>

</html>