<header class="position-fixed top-0 left-0 w-100">
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

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-text-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

                <!-- menu laptop -->

                <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                    <ul class="navbar-nav ms-auto list-unstyled w-100 gap-2 d-flex justify-content-between align-items-center">
                        <a href="/index.php" class="logo">
                            <img src="../assets/Bayangan Hotel Logo.png" alt="" width="40" height="40">
                        </a>
                        <div class="d-flex gap-4">
                            <li class="nav-item"><a href="/index.php" class="nav-link text-decoration-none text-secondary fw-semibold">HOME</a></li>
                            <li class="nav-item"><a href="/client/yourStay.php" class="nav-link text-decoration-none text-secondary fw-semibold">STAY</a></li>
                            <li class="nav-item"><a href="/client/hotelAmeneties.php" class="nav-link text-decoration-none text-secondary fw-semibold">EXPERIENCE</a></li>
                            <li class="nav-item"><a href="/client/zambaongaTravel.php" class="nav-link text-decoration-none text-secondary fw-semibold">VISIT US</a></li>
                            <li class="nav-item"><a href="/client/zambaongaTravel.php" class="nav-link text-decoration-none text-secondary fw-semibold">EVENTS</a></li>
                            </div>
                        
                        <div class="login_buttons d-flex flex-column  flex-lg-row gap-1 justify-content-end">
                            <a class="btn btn__book text-white" href="/client/contact.php">CONTACT</a>
                        </div>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>

    <div class="modal fade" id="sign-up" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                    <form action="" id="contacts_settings_form">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Signup</h5>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid p-0">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="mb-3">
                                  <label class="form-label fw-semibold">First Name</label>
                                  <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label fw-semibold">Last Name</label>
                                  <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label fw-semibold">Phone Numbers</label>
                                  <div class="input-group mb-3">
                                    <span class="input-group-text">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                      </svg>
                                    </span>
                                    <input type="number" name="phone1" id="phone1_inp" class="form-control shadow-none" required>
                                  </div>
                                  <div class="input-group mb-3">
                                    <span class="input-group-text">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                      </svg>
                                    </span>
                                    <input type="number" name="phone2" id="phone2_inp" class="form-control shadow-none" required>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label fw-semibold">Email</label>
                                  <input type="email" name="email" id="email_inp" class="form-control shadow-none" required>
                                </div>
                              </div>
                              <div class="mb-3">
                                  <label class="form-label fw-semibold">Password</label>
                                  <input type="text" name="gmap" id="pass" class="form-control shadow-none" required>
                              </div>
                              <div class="mb-3">
                                  <label class="form-label fw-semibold">Confirm Password</label>
                                  <input type="text" name="gmap" id="cpass" class="form-control shadow-none" required>
                                </div>
                              <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Picture</label>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                      </span>
                                      <input type="file" name="facebook" id="facebook_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                      </span>
                                      <input type="text" name="instagram" id="instagram_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg>
                                      </span>
                                      <input type="text" name="twitter" id="twitter_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label fw-semibold">iFrame Src</label>
                                      <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="contacts_inp(contacts_data)">
                            Cancel
                          </button>
                          <button type="submit" class="btn btn-primary">
                            Submit
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>


<script>
    function setActive() {
        let navbar = document.getElementById('navbar');
        let a_tags = navbar.getElementsByTagName('a');

        for (i = 0; i < a_tags.length; i++) {
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if (document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classList.add('active');
            }
        }
    }
    setActive();
</script>