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
    <?php
    require('../components/header.php')
    ?>

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

    <section class="Resort px-4">
        <div class="container-md py-4 py-md-5 px-lg-5">
                <div class="title_SPA">
                    <h1>Resort SPA</h1>
                </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                
                <div class="col p-1">
                    <div class="card h-100">
                        <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title">Resort SPA</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer border-0 py-4">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn_bookNowOffers">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-1">
                    <div class="card h-100">
                        <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title">Resort SPA</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer border-0 py-4">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn_bookNowOffers">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-1">
                    <div class="card h-100">
                        <img src="../assets/Confortroom.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title">Resort SPA</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer border-0 py-4">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn_bookNowOffers">View more</a>
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