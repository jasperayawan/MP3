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
    <title>Hotel Ameneties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="hotelAmeneties.css">
</head>

<body>
<header class="position-fixed top-0 left-0 w-100" style="z-index: 999">
    <div class="d-flex flex-column">
        <div class="w-100 d-flex align-items-center justify-content-between px-5" style="height:50px; background-color:#E38B29">
            <div>
                <p class="m-0" style="color:#1A5F7A">SIGN UP FOR EXCLUSIVE HOTEL PROMOS!</p>
            </div>
        
            <div>
                <a class="text-decoration-none" type="button" href="#" style="color:#FEFAE0; padding-right:30px; border-right:2px solid #FEFAE0">
                    SIGN UP
                </a>

                <a class="text-decoration-none" type="button" href="#" style="color:#FEFAE0; padding-left:30px">
                    LOG IN
                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg shadow-sm py-3" id="navbar">
            <div class="container">

                <a href="/index.php" class="logo">
                    <img src="../assets/Bayangan Hotel Logo.png" alt="" width="40" height="45">
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-text-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

                <!-- menu laptop -->

                <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                    <ul class="navbar-nav list-unstyled w-100 gap-2 d-flex justify-content-between align-items-center">
                        
                        <div class="d-flex gap-4 mx-auto">
                            <li class="nav-item"><a href="/index.php" class="nav-link text-decoration-none text-secondary fw-semibold">HOME</a></li>
                            <li class="nav-item"><a href="/client/yourStay.php" class="nav-link text-decoration-none text-secondary fw-semibold">STAY</a></li>
                            <li class="nav-item"><a href="/client/hotelAmeneties.php" class="nav-link text-decoration-none text-secondary fw-semibold">EXPERIENCE</a></li>
                            <li class="nav-item"><a href="/client/zambaongaTravel.php" class="nav-link text-decoration-none text-secondary fw-semibold">VISIT US</a></li>
                            <li class="nav-item"><a href="/client/zambaongaTravel.php" class="nav-link text-decoration-none text-secondary fw-semibold">EVENTS</a></li>
                          </div>
                        
                        <div class="login_buttons d-flex flex-column  flex-lg-row gap-1 justify-content-end">
                            <a class="btn btn__book text-white" href="/client/contact.php" style="background-color: #1A5F7A;">CONTACT</a>
                        </div>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>

    <main>
        <section class="hotelAmeneties">
            <div class="container">
                <div class="hotelAmeneties_content d-flex justify-content-center align-items-center">
                    <h1 class="text-white">Hotel Ameneties</h1>
                </div>
            </div>
        </section>

        <div class="shortStatement">
            <div class="container">
                <div class="shortStatement_content d-flex justify-content-center align-items-center">
                    <div class="w-75">
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis ab voluptate
                            illum provident facere minus quas atque tempore incidunt architecto culpa beatae
                            quis sint cum odit esse dolorum porro aperiam, praesentium velit exercitationem
                            eveniet! Exercitationem aut ratione magnam commodi quaerat necessitatibus laborum
                            quod aliquam beatae, esse ut nulla velit aliquid.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="takeADip">
            <div class="container">
                <div class="takeADip_content d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-row gap-4">
                        <div class="col">
                            <img src="../assets/Confortroom.jpg" alt="" class="w-100 h-100">
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column">
                                <div class="title">
                                    <h1>Take a Dip in the pool</h1>
                                </div>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                                        amet at nostrum voluptas quis quas tempore optio, voluptate laborum
                                        maxime ipsum quasi illo? Doloremque dolorem qui, rem aut natus impedit
                                        est quod odio ad provident aspernatur eius nemo, ex veritatis.</p>
                                </div>
                                <div>
                                    <button class="btn btn__booknow">Book now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <section class="relative px-4" style="max-width: 1000px; margin: 0 auto; ">
            <div class="roomOffers py-4 py-md-5" style="display: flex; justify-content: center; align-items:center; flex-direction: column">
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
    require('../client/footer.php')
    ?>

</body>

</html>