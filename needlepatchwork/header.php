<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Needle Patchwork</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    
    <!-- Nav Bar -->
    <div class="row">
        <div class="col-12 py-3">
            <nav class="navbar navbar-expand-lg row">
                <div class="col-4">
                    <a class="navbar-brand" href="#">
                        <img src="resources/logo dark.png" style="width: 200px;">
                    </a>
                    <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>-->
                </div>

                <div class="col-8">
                    <div class="collapse navbar-collapse d-none d-lg-flex justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item pe-5">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        
                        <li class="nav-item pe-5">
                            <a class="nav-link" href="#">Products</a>
                        </li>

                        <li class="nav-item pe-5 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu shadow" style="border: none;">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>

                        <li class="nav-item pe-5">
                            <a class="nav-link" href="#">About Us</a>
                        </li>

                        
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="row pb-4">
        <div class="col-10">
            <div class="input-group">
                <input type="text" class="form-control" placeholder=" Ex: Handloom lunch bag .....">
                <span class="input-group-text bg-danger-subtle"><i class="bi bi-search fs-4 px-2"></i></span>
            </div>
        </div>
        <div class="col-2">
            <div class="d-lg-flex justify-content-end">
                <div class="me-4 position-relative">
                    <a href="cart.php" style="color:#121212;">
                        <i class="bi bi-bag fs-2"></i>
                        <span class="position-absolute bottom-0 translate-middle badge rounded-pill bg-danger">
                            6
                        </span>
                    </a>
                </div>
                <a href="myAccount.php" style="color:#121212;"><i class="bi bi-person fs-2"></i></a>
            </div>
        </div>
    </div>

    
        

    

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>



        
        