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

        <section class="roomCollection">
            <div class="container py-lg-5">
                <div class="roomCollection_content">
                    <div class="title">
                        <h1>Room Collection</h1>
                    </div>

                    <div class="row d-flex flex-column gap-4 room justify-content-center align-items-center">
                        <div class="col rooms p-4 d-flex flex-column justify-content-between flex-lg-row position-relative gap-4 bg-light">
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
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
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
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
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
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </span>
                                    
                                </div>
                                <div class="d-flex flex-column gap-2 w-100">
                                    <button class="btn btn_book btn-sm w-100">Book now</button>
                                    <button class="btn btn_viewDetails btn-sm w-100">details</button>
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
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
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
                                        <img 
                                            src="../assets/capcake.jpg" 
                                            alt="" 
                                            width="40" 
                                            height="40" 
                                            class="rounded-5">
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

        <section class="roomOffers">
            <div class="container">
                <div class="roomOffers_content d-flex flex-column justify-content-center">
                    <div class="title">
                        <h1>Room offers</h1>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col col-md-4">
                                <div class="card">
                                <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Offer 1</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="#" class="btn btn_bookNowOffers">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-md-4">
                                <div class="card">
                                <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Offer 2</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn_bookNowOffers">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-md-4">
                                <div class="card">
                                <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Offer 3</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn_bookNowOffers">Book now</a>
                                        </div>
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
        require('../components/footer.php')
    ?>
</body>
</html>