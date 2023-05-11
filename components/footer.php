

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
                <div class="row d-flex flex-wrap">
                    <div class="col-12 col-lg-4 left_content">
                        <div class="p-5 d-flex flex-column gap-3 text-center justify-content-center align-items-center">
                            <div class="logo">bayangan</div>
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
                                        <p>$contact_r[address]<p>
                                    data;
                                }
                            ?>

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