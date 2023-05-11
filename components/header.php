<header class="position-relative">
        <nav class="navbar navbar-expand-lg shadow-sm position-fixed w-100 top-0 left-0 py-3" id="navbar">
            <div class="container">
                <a href="/index.php" class="logo">
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
                        <li class="nav-item"><a href="/index.php" class="nav-link text-decoration-none text-secondary fw-semibold">Home</a></li>
                        <li class="nav-item"><a href="/client/yourStay.php" class="nav-link text-decoration-none text-secondary fw-semibold">Your Stay</a></li>
                        <li class="nav-item"><a href="/client/hotelAmeneties.php" class="nav-link text-decoration-none text-secondary fw-semibold">Hotel Ameneties</a></li>
                        <li class="nav-item"><a href="/client/zambaongaTravel.php" class="nav-link text-decoration-none text-secondary fw-semibold">Visit</a></li>
                        <li class="nav-item"><a href="/client/contact.php" class="nav-link text-decoration-none text-secondary fw-semibold">Contact us</a></li>
                        <div class="login_buttons d-flex flex-column  flex-lg-row gap-1 justify-content-end">
                            <button class="btn btn__book text-white">Login</button>
                            <button class="btn btn__book_signup">Sign up</button>
                       </div>
                    </ul>
                       
                </div>
            </div>
        </nav>
    </header>


    <script>
        function setActive()
        {
            let navbar = document.getElementById('navbar');
            let a_tags = navbar.getElementsByTagName('a');

            for(i = 0; i < a_tags.length; i++){
                let file = a_tags[i].href.split('/').pop();
                let file_name = file.split('.')[0];

                if(document.location.href.indexOf(file_name) >= 0){
                    a_tags[i].classList.add('active');
                }
            }
        }
        setActive();
    </script>

