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