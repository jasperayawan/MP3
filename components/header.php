<header class="position-fixed top-0 left-0 w-100" style="z-index: 999">
    <div class="d-flex flex-column">
        <div class="w-100 d-flex align-items-center justify-content-between px-5" style="height:50px; background-color:#E38B29">
            <div>
                <p class="m-0" style="color:#1A5F7A">SIGN UP FOR EXCLUSIVE HOTEL PROMOS!</p>
            </div>
        
            <div>
                <a class="text-decoration-none" type="button" href="#" style="color:#FEFAE0; padding-right:30px; border-right:2px solid #FEFAE0"
                data-bs-toggle="modal" data-bs-target="#registration_modal">
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
                    <img src="./assets/Bayangan Hotel Logo.png" alt="" width="40" height="45">
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
                            <li class="nav-item"><a href="/yourStay.php" class="nav-link text-decoration-none text-secondary fw-semibold">STAY</a></li>
                            <li class="nav-item"><a href="/zambaongaTravel.php" class="nav-link text-decoration-none text-secondary fw-semibold">VISIT US</a></li>
                            <li class="nav-item"><a href="/zambaongaTravel.php" class="nav-link text-decoration-none text-secondary fw-semibold">EVENTS</a></li>
                            <li class="nav-item"><a href="/hotelAmeneties.php" class="nav-link text-decoration-none text-secondary fw-semibold">EXPERIENCE</a></li>
                          </div>
                        
                        <div class="login_buttons d-flex flex-column  flex-lg-row gap-1 justify-content-end">
                            <a class="btn btn__book text-white" href="/contact.php" style="background-color: #1A5F7A;">CONTACT</a>
                        </div>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>

    <div class="modal fade" id="registration_modal" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <form action="" id="register-form">
                        <div class="modal-header">
                          <h5 class="modal-title">Signup</h5>
                          <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-md-6">
                                  <label class="form-label fw-semibold">First Name</label>
                                  <input type="text" name="first_name" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6">
                                  <label class="form-label fw-semibold">Last Name</label>
                                  <input type="text" name="last_name" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6">
                                  <label class="form-label fw-semibold">Email</label>
                                  <input type="email" name="email"  class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6">
                                  <label class="form-label fw-semibold">Phone Numbers</label>
                                  <div class="col-md-6 input-group mb-3">
                                    <span class="input-group-text">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                      </svg>
                                    </span>
                                    <input type="number" name="phone_number" class="form-control shadow-none" required>
                                  </div>
                                </div>  
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Picture</label>
                                    <input type="file" accept=".jpg, .jpeg, .png, .webp" id="profile" name="profile" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Address</label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                                 <div class="col-md-6">
                                    <label class="form-label fw-semibold">Date of birth</label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Password</label>
                                    <input type="password" name="password"  class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Confirm Password</label>
                                    <input type="password" name="cpassword"  class="form-control shadow-none" required>
                                  </div>

                                <div class="d-flex justify-content-center align-items-center py-4">
                                  <button type="submit" name="register" class="btn rounded-0" style="background-color: #1A5F7A; color:#fff">
                                      Submit
                                    </button>
            
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>
                  </div>
                </div>


                <script>

 function alert(type,msg,position='body')
    {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');

        element.innerHTML = `
                    <div class="alert ${bs_class} alert-dismissable fade show d-flex justify-content-between align-items-center" role="alert">
                        <strong class="me-3">${msg}</strong> 
                        <button 
                            type="button" 
                            class="btn-close" 
                            data-bs-dismiss="alert"
                            aria-label="close">
                        </button>
                    </div>
        `;

        if(position == 'body'){
            document.body.append(element);
            element.classList.add('custom-alert');
        }
        else{
            document.getElementById(position).appendChild(element)
        }

        
    }


    let register_form = document.getElementById('register-form');

    register_form.addEventListener('submit', function(e){
        e.preventDefault();

        let data = new FormData();

        data.append('first_name',register_form.elements['first_name'].value);
        data.append('last_name',register_form.elements['last_name'].value);
        data.append('email',register_form.elements['email'].value);
        data.append('phone_number',register_form.elements['phone_number'].value);
        data.append('address',register_form.elements['address'].value);
        data.append('dob',register_form.elements['dob'].value);
        data.append('password',register_form.elements['password'].value);
        data.append('cpassword',register_form.elements['cpassword'].value);
        data.append('profile',register_form.elements['profile'].files[0]);
        data.append('register','');

        var myModal = document.getElementById('registration_modal')
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/login_register.php", true);

            xhr.onload = function() {
              if(this.responseText == 'not_matching'){
                alert('error','Password not Matching!')
              }
              else if(this.responseText == 'email_already'){
                alert('error','Email is already registered!')
              }
              else if(this.responseText == 'phone_already'){
                alert('error','Phone number is already registered!')
              }
              else if(this.responseText == 'inv_img'){
                alert('error','Only JPG, WEBP & PNG images are allowed!')
              }
              else if(this.responseText == 'upd_failed'){
                alert('error','Image upload failed!')
              }
              else if(this.responseText == 'mail_failed'){
                alert('error','Cannot send confirmation email! Server down')
              }
              else if(this.responseText == 'ins_failed'){
                alert('error','Registration failed! Server down')
              }
              else{
                alert('success', 'Registration success. Confirmation link sent to email!');
                register_form.reset();
              }
            }

            xhr.send(data);
    })
</script>

