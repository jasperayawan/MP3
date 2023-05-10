<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contact.css">
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
    <content>
        <section class="contactcontent relative overflow-hidden">
        <div class="contactUs">
            <div class="title">
                <h2>Get in Touch</h2>
            </div>
            <div class="box">
                <!--Form-->
                <div class="contact form">
                    <h3>Send a Message</h3>
                    <form>
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <label>First Name</label>
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="inputBox">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row50">
                                <div class="inputBox">
                                    <label>Email Address</label>
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="inputBox">
                                    <label>Phone Number</label>
                                    <input type="number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <label>Message</label>
                                    <textarea placeholder="Write your message here..."></textarea>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn_contact text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--info Box-->
                <div class="contact info">
                    <h3>Contact Info</h3>
                    <div class="infoBox">
                        <div>
                            <span></span>
                            <p>Type Address Here</p>
                        </div>
                        <div>
                            <span></span>
                            <a href="mailto:info@email.com">info@email.com</a>
                        </div>
                        <div>
                            <span></span>
                            <a href="tel:+9876543210">+9876543210</a>
                        </div>
                        <!--Social Media-->
                        <ul class="list-unstyled">
                            <li class=""><a href="#" class="text-decoration-none">facebook</a></li>
                            <li class=""><a href="#" class="text-decoration-none">Instagram</a></li>
                            <li class=""><a href="#" class="text-decoration-none">Twitter</a></li>
                        </ul>
                    </div>
                </div>
                <!--Map-->
                <div class="contact map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3620381893234!2d122.50535239999999!3d8.0645048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3253c98221b67083%3A0xb2ef693fa07a146e!2sBAYANGAN%20HOTEL%20AND%20BEACH%20RESORT!5e0!3m2!1sen!2sae!4v1683559283368!5m2!1sen!2sae"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                </div>
            </div>
        </div>
        </section>
    </content>

    

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