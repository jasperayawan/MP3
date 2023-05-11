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
    <?php
        require('../components/header.php')
    ?>


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


    <?php
        require('../components/footer.php')
    ?>

</body>
</html>