<!DOCTYPE html>

<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="bootstrap.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    </head>

    <body>

        <div class="col-12 sticky-top" style="background-color: white;">
            <div class="row mt-2">

                <div class="col-2 mt-3 ms-5 col-md-1">
                    <img src="resources/logo.png" style="width: 150px;"/>
                </div>

                <div class="d-none d-lg-block offset-1 col-lg-6 mt-2">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link navcolor active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link navcolor" href="#">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link navcolor" href="#">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link navcolor" href="#">Contact Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navcolor" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">My Profile</a></li>
                                <li><a class="dropdown-item" href="#">My Cart</a></li>
                                <li><a class="dropdown-item" href="#">My Wishlist</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-block col-lg-1 mt-2">

                    <i class="bi bi-heart-fill me-4 redcolor fontsizeicon"></i>
                    <i class="bi bi-cart-fill me-4 blackcolor fontsizeicon"></i>
                          
                </div>

                <div class="d-none d-lg-block col-1 mt-2">
                    <button type="button" class="btn btnred redbtnhover" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register</button>
                </div>

                <div class="d-none d-lg-block col-1 mt-2">
                    <button type="button" class="btn redbtnhover" data-bs-toggle="modal" data-bs-target="#logInModal">
                        Log In</button>
                </div>

            </div>
            
            <hr/>

            <div class="row justify-content-center">
                <div class="col-12 col-md-9">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ex: handloom bag">
                        <span>
                            <i class="bi bi-search input-group-text blackcolor fontsizeicon"></i>
                        </span>
                    </div>
                </div>
            </div>

            <hr/>

        </div>

        <!--register modal-->
        <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"><img src="resources/logo.png" style="width: 150px;"/></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        
                        <div class="ms-3 me-3 mt-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter a your first name">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter a your last name">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter a valid email">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <label class="form-label">Mobile Number</label>
                            <input type="number" class="form-control" placeholder="Enter a your mobile number">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter a strong password">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <label class="form-label">Address Line 1</label>
                            <input type="text" class="form-control" placeholder="Enter a your address line 1">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <label class="form-label">Address Line 2</label>
                            <input type="text" class="form-control" placeholder="Enter a your address line 2">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <label class="form-label">Postal Code</label>
                            <input type="text" class="form-control" placeholder="Ex: 10240">
                        </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btnblack blackbtnhover" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btnred redbtnhover">Register</button>
                    </div>

                </div>
            </div>
        </div>
        <!--register modal-->

        <!--login modal-->
        <div class="modal fade" id="logInModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"><img src="resources/logo.png" style="width: 150px;"/></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        
                        <div class="ms-3 me-3 mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter a valid email">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter a strong password">
                        </div>

                        <div class="ms-3 me-3 mt-3">
                            <input class="form-check-input" type="checbox">
                            <label for="rememberme" class="form-label">Password</label>
                        </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btnblack blackbtnhover" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btnred redbtnhover">Log In</button>
                    </div>

                </div>
            </div>
        </div>
        <!--login modal-->


        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
    </body>
</html>
