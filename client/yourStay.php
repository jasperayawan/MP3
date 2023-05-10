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
    <header class="position-relative">
        <nav class="navbar navbar-expand-lg shadow-sm position-fixed w-100 top-0 left-0 py-3">
            <div class="container">
                <a href="../index.php" class="logo">
                    <img src="../assets/Bayangan Hotel Logo.png" alt="" width="40" height="40">
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-text-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                </button>

                    <!-- menu laptop -->

                <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                    <ul class="navbar-nav ms-auto list-unstyled w-100 gap-2 d-flex justify-content-end align-items-center">
                        <li class="nav-item"><a href="../index.php" class="nav-link text-decoration-none text-secondary fw-semibold">Home</a></li>
                        <li class="nav-item"><a href="./yourStay.php" class="nav-link text-decoration-none text-secondary fw-semibold">Your Stay</a></li>
                        <li class="nav-item"><a href="./hotelAmeneties.php" class="nav-link text-decoration-none text-secondary fw-semibold">Hotel Ameneties</a></li>
                        <li class="nav-item"><a href="./zambaongaTravel.php" class="nav-link text-decoration-none text-secondary fw-semibold">Visit</a></li>
                        <li class="nav-item"><a href="./contact.php" class="nav-link text-decoration-none text-secondary fw-semibold">Contact us</a></li>
                        <div class="login_buttons d-flex flex-column flex-lg-row gap-1 justify-content-end">
                            <button class="btn btn__book text-white">Login</button>
                            <button class="btn btn__book_signup">Sign up</button>
                       </div>
                    </ul>
                       
                </div>
            </div>
        </nav>
    </header>

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
                        <div class="d-flex flex-row gap-2">
                            <div class="offersCard col-12 col-md-6 col-lg-4 p-0 rounded-2">
                                <div class="image">
                                    <img src="../assets/Confortroom.jpg" alt="" class="w-100 h-100 rounded-top-2">
                                </div>
                                <div class="d-flex flex-column description gap-3 py-3 px-2">
                                    <div class="title">
                                        <h2 class="text-center">Offer 1</h2>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                             harum esse tempora sunt corporis perferendis molestiae excepturi
                                              sint nemo impedit!</p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn_bookNowOffers">Book now</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="offersCard col-12 col-md-6 col-lg-4 p-0 rounded-2">
                                <div class="image">
                                    <img src="../assets/Confortroom.jpg" alt="" class="w-100 h-100 rounded-top-2">
                                </div>
                                <div class="d-flex flex-column description gap-3 py-3 px-2">
                                    <div class="title">
                                        <h2 class="text-center">Offer 2</h2>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                             harum esse tempora sunt corporis perferendis molestiae excepturi
                                              sint nemo impedit!</p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn_bookNowOffers">Book now</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="offersCard col-12 col-md-6 col-lg-4 p-0 rounded-2">
                                <div class="image">
                                    <img src="../assets/Confortroom.jpg" alt="" class="w-100 h-100 rounded-top-2">
                                </div>
                                <div class="d-flex flex-column description gap-3 py-3 px-2">
                                    <div class="title">
                                        <h2 class="text-center">Offer 3</h2>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                             harum esse tempora sunt corporis perferendis molestiae excepturi
                                              sint nemo impedit!</p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn_bookNowOffers">Book now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <section class="footer relative overflow-hidden">
            <div class="footer_content">
                <div class="row d-flex flex-wrap">
                    <div class="col-12 col-lg-4 left_content">
                        <div class="p-5 d-flex flex-column gap-3 text-center justify-content-center align-items-center">
                            <div class="logo">bayangan</div>
                            <h1>Bayangan Hotel and Beach Resort</h1>
                            <!-- <div class="social_links">

                            </div> -->
                            <p>Lawagan Rd, Labason, Zamboanga del Norte</p>

                            <div class="foot">
                                <p>C 2023 Bayangan Hotel and Beach Resort. All rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 p-0">
                        <div class="row d-flex flex-column flex-md-row container h-100 gap-4 gap-lg-0 right_content py-5">
                            <div class="col d-flex justify-content-start px-5 h-100">
                                <ul class="list-unstyled plan d-flex justify-content-center flex-column gap-2">
                                    <h2 class="plan_footer text-white">Plan your visit</h2>
                                    <li class="nav-item"><a href="#" class="nav-link">Getting here</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Visitor services</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Contact us</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Careers</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">FAQ</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Terms of use</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Privacy notice</a></li>
                                </ul>
                            </div>
                            <div class="col hotelReserve d-flex flex-column gap-3 px-5">
                                <div>
                                    <ul class="list-unstyled">
                                        <h2 class="hotel_footer">Plan your visit</h2>
                                        <li class="nav-item"><a href="#" class="nav-link">1111-222-333</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">bayangan@example.com</a></li>
                                    </ul>
                                    <div class="subscribe input-group">
                                        <input type="email" placeholder="email" id="email" name="email-footer" class="border-0 px-2">
                                        <button class="btn btn_subscribe">Subscribe</button>
                                    </div>
                                </div>

                                <p class="subscribing-info">*By subscribing, you agree to receive marketing email messages from Bayangan Hotel 
                                    and Beach Resort at the email address provided. Unsubscribe at any time. View our 
                                    Privacy Policy and Terms of Services</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>