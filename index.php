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
    <title>Bayangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./client/index.css">
</head>
<body>
   
    <?php
        require('./components/header.php');
    ?>
    <!-- hero section --->

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content w-100 h-100 d-flex gap-5 flex-column justify-content-center align-items-center">
                    <div>
                        <img src="./assets/Bayangan Hotel Logo.png" alt="" width="200" height="220">
                    </div>
                    <h1 class="title text-center text-white">Bayangan Hotel and Beach Resort</h1>
                    <div class="CheckAvailability d-flex flex-md-row justify-content-center align-items-center gap-3 rounded-2 p-3 py-4">
                        <form action="" method="post">
                            <h2 class="fs-5">Check Booking Availability</h2>
                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
                                
                                <div class="d-flex flex-column">
                                    <label class="form-label fw-semibold">check in</label>
                                    <input type="date" name="date" class="rounded-2 px-2 py-1 border-0">
                                </div>
                                <div class="d-flex flex-column fw-semibold">
                                    <label class="form-label">check out</label>
                                    <input type="date" name="date" class="form-control rounded-2 px-2 py-1 border-0">
                                </div>
                                <div>
                                    <label class="form-label fw-semibold">user type</label>
                                    <select class="form-select">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Adults</option>
                                        <option value="2">Child</option>
                                        <option value="3">Pets</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn__book text-white">Book now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="experience">
            <div class="container">
                <div class="experience-content d-flex flex-column justify-content-center align-items-center gap-4">
                    <h1 class="title text-center">Experience the ultimate beach getaway</h1>
                    <p class="text-center">Welcome to our stunning beach resort, where your dream vacation becomes 
                        a reality! Situated on the pristine shores of Labason, our resort offers 
                        a truly unparalleled experience that combines island feel, comfort, and natural 
                        beauty.</p>
                </div>
            </div>    
        </section>

        <section class="visit position-relative">
            <div class="">
                <div class="visit-content d-flex flex-column flex-lg-row">
                    <div class="col left-content d-flex flex-column justify-content-center align-items-center gap-5">
                        <h1 class="title text-center text-white w-50">Your Experience When You Visit</h1>
                        <div class="d-flex flex-column gap-2 w-100 justify-items-center align-items-end">
                            <span class="w-75 text-center py-2">Scuba Diving</span>
                            <span class="w-75 text-center py-2">Paragliding</span>
                            <span class="w-75 text-center py-2">Glass Kayaking</span>
                        </div>
                    </div>
                    <div class="col right-content">
                        <img src="./assets/diving.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </section>

        <section class="featured">
            <div class="container">
                <div class="d-flex flex-column gap-3 flex-md-row featured-content p-0">
                    <div class="col d-flex justify-content-center align-items-center left-content position-relative overflow-hidden d-flex">
                        <img src="./assets/capcake.jpg" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="col right-content d-flex flex-column text-white gap-4">
                        <div class="featured__title">
                            <h3>Featured offers</h3>
                            <h1>Just For You</h1>
                        </div>
                        <h2>Breakfast Pancakes</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis fuga ab 
                            eos reiciendis necessitatibus animi ipsam doloribus commodi aspernatur sint
                             assumenda ducimus possimus temporibus perferendis consequuntur vero, laboriosam
                              illum blanditiis!</p>
                        <button class="btn btn__offers text-white w-25">See offers</button>

                        <div>
                            <p>*Website exclusive. Cannot be combined with any other offer. Subject to availability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---carousel-->
        <section class="ourGuest">
            <div class="container swiper swiper-container">
                <div class="swiper-wrapper ourGuest__content ">
                    <!-- text-center d-flex flex-column justify-content-center align-items-center -->
                    <div class="swiper-slide slide-1 text-center d-flex flex-column justify-content-center align-items-center">
                        <p class="title">Our guests say it best</p>
                        <h1>“Elegant rooms, outstanding services”</h1>
                        <p>“The rooms are elegant, the views are spectacular, and the service was outstanding”</p>
                        <p>-Blessed Bagor, on Facebook Review</p>
                    </div>
                    <div class="swiper-slide slide-2 text-center d-flex flex-column justify-content-center align-items-center">
                        <p class="title">Hi</p>
                        <h1>“Elegant rooms, outstanding services”</h1>
                        <p>“The rooms are elegant, the views are spectacular, and the service was outstanding”</p>
                        <p>-Blessed Bagor, on Facebook Review</p>
                    </div>
                    <div class="swiper-slide slide-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <p class="title">heheh</p>
                        <h1>“Elegant rooms, outstanding services”</h1>
                        <p>“The rooms are elegant, the views are spectacular, and the service was outstanding”</p>
                        <p>-Blessed Bagor, on Facebook Review</p>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="rooms">
            <div class="container">
                <div class="rooms-content d-flex flex-column justify-content-center gap-4">
                    <div class="title">
                        <h3>Rooms and villas</h3>
                        <h1>Comfort away from home</h1>
                    </div>
                    <div class="">
                        <p class="text-center text-lg-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste ea non labore
                             quaerat a quis, veniam repellat! Minima, fugiat consectetur quisquam voluptates
                              molestias placeat molestiae non deserunt sint beatae eos possimus. Doloremque
                               quo maxime perferendis at. Earum libero ducimus voluptatem!</p>
                    </div>
                    <button class="btn btn_view">view our rooms</button>
                </div>
            </div>
        </section>

        <section class="weddings">
            <div>
                <div class="weddings__content d-flex flex-column flex-lg-row justify-content-center align-items-center">
                    <div class="col p-0 left_content">
                        <div class="overlay d-flex justify-content-center align-items-center">
                            <h1 class="text-white">Weddings</h1>
                        </div>
                    </div>
                    <div class="col right_content">
                        <div class="overlay d-flex flex-column justify-content-center text-center align-items-center gap-4">
                            <h1>Events</h1>
                            <p class="w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum iusto totam
                                vitae commodi earum a in pariatur nihil perferendis ullam. Aspernatur asperiores 
                                doloribus iusto sed ut architecto quis totam non minima. Praesentium, nobis?
                                Itaque eum nemo quaerat rerum voluptas reprehenderit!</p>
                            <button class="btn view_details">view details</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="location">
            <div class="container">
                <div class="location_content d-flex flex-column justify-content-center gap-4">
                    <div class="title">
                        <h3 class="text-center text-lg-start">Location</h3>
                        <h1 class="text-center text-lg-start">See Zamboanga del Norte</h1>
                    </div>
                    <div>
                        <p class="text-center text-lg-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est veritatis
                             asperiores, delectus accusamus aut esse consectetur nisi, debitis quibusdam,
                              laborum unde atque excepturi maxime. Laboriosam, illum quia culpa quasi 
                              doloremque iusto aperiam placeat omnis, obcaecati quae, fuga labore rem veniam?</p>
                    </div>
                    <button class="btn btn__explore">Explore</button>
                </div>
            </div>
        </section>

        <section class="gallery overflow-hidden">
            <div>
                <div class="row d-flex flex-wrap gallery__content">
                    <div class="col-6 col-md overflow-hidden p-0 ">
                        <img src="./assets/hero_sec.jpg" alt="" class="w-100 h-100">
                    </div>
                    <div class="col-6 col-md overflow-hidden d-flex justify-content-center align-items-center p-0 2nd_col">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="title">Gallery</div>
                            <h1>Catch a Glimpse</h1>
                            <button class="btn btn__seemore">see more</button>
                        </div>
                    </div>
                    <div class="col-6 col-md overflow-hidden p-0 ">
                        <img src="./assets/diving.jpg" alt="" class="w-100 h-100">
                    </div>
                    <div class="col-6 col-md overflow-hidden p-0 ">
                        <img src="./assets/dishImg.jpg" alt="" class="w-100 h-100">
                    </div>
                </div>
            </div>
        </section>
    </main>


   <?php
        require('./components/footer.php')
   ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>
</html>