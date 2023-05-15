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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
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
                        <img class="landing__logo" src="./assets/Bayangan Logo 2.png" alt="Bayangan Hotel and Beach Resort Logo 2" width="470px" height="560px">
                    </div>
                    <div class="CheckAvailability d-flex flex-md-row justify-content-center align-items-center gap-5 p-3 py-4">
                        <form action="" method="post">
                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
                                <h2 class="fs-5" style="font-weight:700; color:#1A5F7A">Check Availability</h2>
                                <div class="input-group" style="width:270px">
                                    <span class="input-group-text" id="basic-addon3" style="color:#1A5F7A">Check-In</span>
                                    <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                </div>
                                <div class="input-group" style="width:270px">
                                    <span class="input-group-text" id="basic-addon3" style="color:#1A5F7A">Check-Out</span>
                                    <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                </div>
                                <div>
                                    <select class="row form-select mb-1" style="width:150px; color:#1A5F7A">
                                        <option selected>Adult</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                    <select class="row form-select mt-1" style="width:150px; color:#1A5F7A">
                                        <option selected>Child</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn__book text-white" style="width:150px; font-weight:700">BOOK NOW</button>
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
                    <h2 class="title text-center" style="font-style:italic">Experience the ultimate beach getaway</h2>
                    <p class="text-center">Welcome to our stunning beach resort, where your dream vacation becomes
                        a reality! Situated on the pristine shores of Labason, our resort offers
                        a truly unparalleled experience that combines island feel, comfort, and natural
                        beauty.</p>
                </div>
            </div>
        </section>
        <!--  <section class="visit position-relative">
            <div class="">
                <div class="visit-content d-flex flex-column flex-lg-row">
                    <div class="col left-content d-flex flex-column justify-content-center align-items-center gap-5">
                        <h2 class="title text-start text-white w-50" style="font-style:italic">Your Experience When You Visit</h2>
                        <div class="d-flex flex-column gap-2 w-100 justify-items-center align-items-end">
                            <span class="w-75 text-start ps-5 py-3">Scuba Diving</span>
                            <span class="w-75 text-start ps-5 py-3">Paragliding</span>
                            <span class="w-75 text-start ps-5 py-3">Glass Kayaking</span>
                        </div>
                    </div>
                    <div class="col right-content">
                        <img src="./assets/diving.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </section>-->
        <section class="rooms">
            <div class="container">
                <div class="rooms-content d-flex flex-column justify-content-center gap-4">
                    <div class="title col-lg-3">
                        <h3 style="letter-spacing:0.15em; font-size:20px">ROOMS AND VILLAS</h3>
                        <h2><em>Comfort away from home</em></h2>
                    </div>
                    <div class="col-lg-8">
                        <p class="text-center text-lg-start">
                            Bayangan Hotel and Beach Resort offers a selection of beautifully designed guest rooms, including accessible options.
                            Each guest room and suite is thoughtfully appointed with premium features such as granite countertops, luxurious linens, 
                            a 55" flat-screen TV, complimentary Wi-Fi, upscale bath amenities, and plush bathrobes. 
                            Moreover, the majority of rooms boast stunning views of the marina from private 
                            balconies or outdoor patio areas, providing a picturesque setting to relax and unwind.
                        </p>
                    </div>
                    <button class="btn btn_view rounded-0">BOOK ROOMS</button>
                </div>
            </div>
        </section>

        <section class="featured">
            <div class="container">
                <div class="d-flex flex-column gap-3 flex-md-row featured-content p-0">
                    <div class="col d-flex justify-content-center align-items-center left-content position-relative overflow-hidden d-flex">
                        <img src="./assets/capcake.jpg" alt="" class="w-full h-full object-cover rounded-0">
                    </div>
                    <div class="col right-content d-flex flex-column text-white gap-4">
                        <div class="featured__title">
                            <h3 style="letter-spacing:0.15em; font-size:20px">FEATURED OFFERS</h3>
                            <h2><em>Just For You</em></h2>
                        </div>
                        <h2>Breakfast Pancakes</h2>
                        <p>Get your FREE complimentary breakfast from our Patio Bayangan on your first stay! 
                            You may also ask  room service to have it served for you.</p>
                        <button class="btn btn__offers text-white w-25 rounded-0">SEE OFFERS</button>

                        <div>
                            <p style="font-size:12px">*Website exclusive. Cannot be combined with any other offer. Subject to availability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---carousel-->
        <section class="ourGuest">
            <div class="container swiper swiper-container">
                <div class= "swiper-wrapper ourGuest__content ">
                    <!-- text-center d-flex flex-column justify-content-center align-items-center -->
                    <div class="swiper-slide slide-1 text-center d-flex flex-column justify-content-center align-items-center">
                        <p class="title" style="letter-spacing:0.15em; font-size:20px mt-5">OUR GUESTS SAY IT BEST</p>
                        <h2><em>“Indulge in sophistication and unparalleled hospitality with our stylish rooms and service.”</em></h2>
                        <p>“Experience elegance, stunning ocean views, and outstanding service at our hotel. 
                            Our rooms are impeccably designed, the ocean views are breathtaking, and our staff will cater to your every need.”</p>
                        <p>-Mark, on Google Review</p>
                    </div>
                    <div class="swiper-slide slide-2 text-center d-flex flex-column justify-content-center align-items-center">
                        <p class="title" style="letter-spacing:0.15em; font-size:20px mt-5">OUR GUESTS SAY IT BEST</p>
                        <h2><em>“Subpar customer service!”</em></h2>
                        <p>"Look no more. Our high-quality solution is just what you've been searching for."</p>
                        <p>-Alisha, on TripAdvisor</p>
                    </div>
                    <div class="swiper-slide slide-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <p class="title" style="letter-spacing:0.15em; font-size:20px mt-5">OUR GUESTS SAY IT BEST</p>
                        <h2><em>“A charming beach hotel”</em></h2>
                        <p>“Bayangan Hotel and Beach Resort is a cozy, charming beach hotel. The people are wonderful and couldn't be more helpful.”</p>
                        <p>-Amaya, on Facebook Review</p>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="weddings">
            <div>
                <div class="weddings__content d-flex flex-column flex-lg-row justify-content-center align-items-center">
                    <div class="col p-0 left_content">
                        <div class="overlay d-flex flex-column justify-content-center text-center align-items-center gap-4">
                            <h1 class="text-white">Weddings</h1>
                            <p class="w-75" style="color:white">Plan a sophisticated and memorable weddings both indoors and outdoors, offering spectacular views of the ocean, beaches, and landscapes of Labason, Zamboanga del Norte. Bayanagan Hotel and Beach Resort is a one-of-a-kind destination for your special day.</p>
                            <button class="btn view_details rounded-0">VIEW DETAILS</button>
                        </div>
                    </div>
                    <div class="col right_content">
                        <div class="overlay d-flex flex-column justify-content-center text-center align-items-center gap-4">
                            <h1>Events</h1>
                            <p class="w-75">Ideal for your groups and events, Bayangan Hotel and Beach Resort features a professional function room with ocean views and has a beautiful patio on the beach.</p>
                            <button class="btn view_details rounded-0">VIEW DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="location">
            <div class="container">
                <div class="location_content d-flex flex-column justify-content-center gap-4">
                    <div class="title">
                        <h3 class="text-center text-lg-start" style="letter-spacing:0.15em; font-size:20px">LOCATION</h3>
                        <h1 class="text-center text-lg-start">See Zamboanga del Norte</h1>
                    </div>
                    <div>
                        <p class="text-center text-lg-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est veritatis
                            asperiores, delectus accusamus aut esse consectetur nisi, debitis quibusdam,
                            laborum unde atque excepturi maxime. Laboriosam, illum quia culpa quasi
                            doloremque iusto aperiam placeat omnis, obcaecati quae, fuga labore rem veniam?</p>
                    </div>
                    <button class="btn btn__explore rounded-0">Explore</button>
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
                            <div class="title" style="letter-spacing:0.15em; font-size:20px">GALLERY</div>
                            <h1>Catch a Glimpse</h1>
                            <button class="btn btn__seemore rounded-0">SEE MORE</button>
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