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

    <?php
    if (!isset($_GET['id'])) {
        redirect('rooms.php');
    }

    $data = filteration($_GET);

    $room_res = select("SELECT * FROM `rooms` WHERE `id`=? AND `status`=? AND `removed`=?", [$data['id'], 1, 0], 'iii');

    if (mysqli_num_rows($room_res) == 0) {
        redirect('rooms.php');
    }

    $room_data = mysqli_fetch_assoc($room_res);

    ?>

    <main>
        <!-- <section class="heroStay">
            <div class="container">
                <div class="heroStay_content d-flex justify-content-center align-items-center">
                    <h1 class="text-white">Your Stay</h1>
                </div>
            </div>
        </section> -->

        <section class="roomCollection py-md-5 container-fluid py-5">
            <div class=" py-md-5">
                <div class="roomCollection_content">
                    <div class="title" style="margin-top: 7rem;">
                        <h1><?php echo $room_data['name'] ?></h1>
                        <div class="mb-4">
                            <a href="../client/yourStay.php">Home</a>
                            <span> > </span>
                            <a href="rooms.php">Rooms</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12 position-relative" style="height: 400px;">
                            <div id="carouselExample" class="carousel slide h-100">
                                <div class="carousel-inner h-100">
                                    <?php
                                    $room_img = ROOMS_PATH . "thumbnail.jpg";
                                    $img_query = mysqli_query($conn, "SELECT * FROM `room_images` 
                                        WHERE `room_id`='$room_data[id]'");

                                    if (mysqli_num_rows($img_query) > 0) {
                                        $active_class = 'active';
                                        while ($img_res = mysqli_fetch_assoc($img_query)) {
                                            echo "
                                                    <div class='carousel-item $active_class'>
                                                        <img src='" . ROOMS_PATH . $img_res['image'] . "' class='h-100 d-block w-100 rounded' alt='..'>
                                                    </div>
                                                ";
                                            $active_class = '';
                                        }
                                    } else {
                                        echo "<div class='carousel-item active'>
                                                    <img src='$room_img' class='d-block w-100' alt='>
                                                 </div>";
                                    }
                                    ?>

                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="card mb-4 border-0 shadow_sm rounded-3">
                                <div class="card-body">
                                    <?php
                                    echo <<<price
                                        <h4>₱$room_data[price] per night</h4>
                                    price;

                                    echo <<<rating
                                        <div class="star_ratings mb-3">

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
                                    rating;

                                    $features_query = mysqli_query($conn, "SELECT f.name FROM `features` f 
                                        INNER JOIN `room_features` rfea ON f.id = rfea.features_id 
                                        WHERE rfea.room_id = '$room_data[id]'");

                                    $features_data = "";
                                    while ($fea_row = mysqli_fetch_assoc($features_query)) {
                                        $features_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap'>$fea_row[name]</span>";
                                    }
                                    echo <<<features
                                            <div class="features mb-3">
                                                <h6>Features</h6>
                                                $features_data
                                            </div>
                                        features;

                                    $facility_query = mysqli_query($conn, "SELECT f.name FROM `facilities` f 
                                            INNER JOIN `room_facilities` rfac ON f.id = rfac.facilities_id 
                                            WHERE rfac.room_id = '$room_data[id]'");

                                    $facilities_data = "";
                                    while ($fac_row = mysqli_fetch_assoc($facility_query)) {
                                        $facilities_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap'>$fac_row[name]</span>";
                                    }
                                    echo <<<facilities
                                            <div class="facilities mb-3">
                                                <h6>Facilities</h6>
                                                $facilities_data
                                            </div>
                                        facilities;

                                    echo <<<guests
                                            <div class="guests mb-3">
                                                <h6 class='mb-1'>Guests</h6>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    $room_data[adult] Adults
                                                </span>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    $room_data[children] Children
                                                </span>
                                            </div>
                                        guests;

                                    echo <<<area
                                            <div class='mb-3'>
                                                <h6 class='mb-1'>Area</h6>
                                                <span class='badge rounded-pill bg-light text-dark text-wrap'>
                                                $room_data[area] sg. ft.
                                                </span>
                                            </div>
                                        area;

                                    echo <<<book
                                            <a type="button" href="#" class="btn btn-primary w-100 border-0 rounded-0" style="background-color: #1A5F7A">
                                                               BOOK NOW
                                            </a>
                                        book;
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="mb-4">
                                <h5>Description</h5>
                                <p>
                                    <?php echo $room_data['description'] ?>
                                </p>
                            </div>

                            <div>
                                <h5 class="mb-4 fw-bold">Reviews & ratings</h5>

                                <div class="d-flex flex-column  gap-4">
                                    <div class="statement d-flex flex-column gap-3">
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
                                        </div class='w-100'>
                                        <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, commodi
                                            aperiam quisquam, veritatis aut quasi, doloribus unde veniam maxime iste
                                            qui. Quasi, maiores. Amet deleniti laboriosam harum consequatur recusandae
                                            dicta cum nobis consectetur culpa. Laudantium aut ea magni quod. Atque?</p>
                                    </div>
                                    <div class="star_ratings d-flex gap-2">
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
                                </div>
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