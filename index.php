<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="position-relative">
        <nav class="navbar navbar-expand-lg shadow-sm position-fixed w-100 top-0 left-0">
            <div class="container">
                <div class="logo">Bayangan</div>

                    <!-- menu laptop -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto list-unstyled gap-4 d-flex justify-content-center align-items-center">
                        <li class="nav-item"><a href="nav-link" class="text-decoration-none text-warning">Your Stay</a></li>
                        <li class="nav-item"><a href="nav-link" class="text-decoration-none text-warning">Hotel Ameneties</a></li>
                        <li class="nav-item"><a href="nav-link" class="text-decoration-none text-warning">Visit us</a></li>
                        <li class="nav-item"><a href="nav-link" class="text-decoration-none btn btn-primary btn__book">Book now</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- hero section --->

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1 class="title text-center text-white">Bayangan Hotel and Beach Resort</h1>
                    
                </div>
            </div>
        </section>

        <section class="experience">
            <div class="container">
                <div class="experience-content d-flex flex-column justify-content-center align-items-center gap-4">
                    <h1 class="title">Experience the ultimate beach getaway</h1>
                    <p class="text-center">Welcome to our stunning beach resort, where your dream vacation becomes 
                        a reality! Situated on the pristine shores of Labason, our resort offers 
                        a truly unparalleled experience that combines island feel, comfort, and natural 
                        beauty.</p>
                </div>
            </div>    
        </section>

        <section class="visit position-relative">
            <div class="">
                <div class="visit-content d-flex flex-row">
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
                <div class="d-flex flex-row featured-content p-0">
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

        <section class="ourGuest">
            <div class="container">
                <div class="ourGuest__content text-center d-flex flex-column justify-content-center align-items-center">
                    <p class="title">Our guests say it best</p>
                    <h1>“Elegant rooms, outstanding services”</h1>
                    <p>“The rooms are elegant, the views are spectacular, and the service was outstanding”</p>
                    <p>-Blessed Bagor, on Facebook Review</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>