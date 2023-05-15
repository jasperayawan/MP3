

<?php
            $contact_query = "SELECT * FROM `contact_details` WHERE `id`=?";
            $values = [1];
            $contact_r = mysqli_fetch_assoc(select($contact_query,$values,'i'));

            $settings_query = "SELECT * FROM `settings` WHERE `id`=?";
            $values_s = [1];
            $settings_r = mysqli_fetch_assoc(select($settings_query,$values_s,'i'));
    ?>
    
    <footer>

        <section class="footer relative overflow-hidden">
            <div class="footer_content">
                <div class="row">
                    <div class="col-lg-4 left_content" style="padding: 5rem 0">
                        <div class="p-5 d-flex flex-column gap-3 text-center justify-content-center align-items-center">
                            <div class="logo">
                                <a href="/index.php" class="logo">
                                    <img src="../assets/Bayangan Hotel Logo.png" alt="" width="140" height="150">
                                </a>
                            </div>
                            <?php
                                if($settings_r['site_about'] != ''){
                                    echo <<<data
                                        <h1>$settings_r[site_about]</h1>
                                    data;
                                }
                            ?>
                            <!-- <div class="social_links">

                            </div> -->
                        
                            <?php
                                if($contact_r['address'] != ''){
                                    echo <<<data
                                        <p style="font-size:20px">$contact_r[address]<p>
                                    data;
                                }
                            ?>

                            <div class="foot">
                                <p>© 2023 Bayangan Hotel and Beach Resort. All rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 p-0 right_content" style="padding: 5rem 0">
                        <div class="row d-flex flex-column flex-md-row container gap-4 gap-lg-0 py-5 h-100">
                            <div class="col d-flex justify-content-start px-5 h-100">
                                <ul class="list-unstyled plan d-flex justify-content-center flex-column gap-2">
                                    <h4 class="plan_footer">PLAN YOUR VISIT</h4>
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
                            <div class="col hotelReserve d-flex justify-content-center align-items-start gap-4 flex-column px-5 h-100 ">
                                <div class="d-flex flex-column gap-4">
                                    <ul class="list-unstyled">
                                        <h4 class="hotel_footer">HOTEL RESERVATIONS</h4>
                                        <li class="nav-item d-flex gap-2">
                                            <img src="../assets/telephone-fill.svg" alt="telephone_graphic">
                                            <a href="#" class="nav-link ps-4">1111-222-333</a>
                                        </li>
                                        <li class="nav-item d-flex gap-2">
                                            <img src="../assets/envelope-fill.svg" alt="envelope_graphic">
                                            <a href="#" class="nav-link ps-4">bayangan@example.com</a>
                                        </li>
                                    </ul>
                                    <div class="subscribe input-group">
                                        <input type="email" placeholder="Email Address" id="email" name="email-footer" class="form-control border-0 px-2 rounded-0">
                                        <button class="btn btn_subscribe rounded-0">SUBSCRIBE</button>
                                    </div>
                                </div>
                                <div>
                                    <p class="subscribing-info col-lg-8" style="font-size:10px; letter-spacing:0.15em">*By subscribing, you agree to receive marketing email messages from Bayangan Hotel 
                                    and Beach Resort at the email address provided. Unsubscribe at any time. View our 
                                    Privacy Policy and Terms of Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>