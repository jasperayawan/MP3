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
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contact.css">
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


    <main style="padding: 13rem 0;">
        <section class="contact pt-md-5 px-4">
            <div class="contact-content" style="max-width: 1000px; margin: 0 auto; width: 100%; padding: 5rem 0">
                <h3 class="py-4 py-lg-5 text-center">Contact us</h3>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="POST">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="col">
                                            <input type="text" name="first_name" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                        </div>
                                        <div class="col">
                                            <input type="email" name="email" class="form-control" placeholder="email">
                                        </div>
                                        <div class="col">
                                            <input type="number" name="phone_number" class="form-control" placeholder="Phone number">
                                        </div>
                                        <div class="col form-floating">
                                            <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px"></textarea>
                                            <label for="floatingTextarea">Message</label>
                                        </div>
                                        <button name="send" type="submit" class="btn" style="background-color:#E38B29; color:#fff">submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="">
                                            <table>
                                                <tbody style="line-height: 3rem;">
                                                    <tr>
                                                        <td class="pe-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                            </svg>
                                                            <span>Address</span>
                                                        </td>
                                                        <td>
                                                            labangan
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                            </svg>
                                                            <span>Phone</span>
                                                        </td>
                                                        <td>
                                                            09509810158
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                            </svg>
                                                            <span>Email</span>
                                                        </td>
                                                        <td>
                                                            <span>test@gmail.com</span>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="map">
                                            <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3620381893234!2d122.50535239999999!3d8.0645048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3253c98221b67083%3A0xb2ef693fa07a146e!2sBAYANGAN%20HOTEL%20AND%20BEACH%20RESORT!5e0!3m2!1sen!2sae!4v1683559283368!5m2!1sen!2sae" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

    if (isset($_POST['send'])) {
        $form_data = filteration($_POST);

        $query = "INSERT INTO `user_queries`(`first_name`, `last_name`, `email`, `phone_number`, `message`) VALUES (?,?,?,?,?)";
        $values = [$form_data['first_name'], $form_data['last_name'], $form_data['email'], $form_data['phone_number'], $form_data['message']];

        $res = insert($query, $values, 'sssss',);

        if ($res == 1) {
            alert('success', 'Mail sent!');
        } else {
            alert('error', 'try again later.');
        }
    }
    ?>

    <?php
    require('../client/footer.php')
    ?>

</body>

</html>