<!DOCTYPE html>

<html>
    <head>

        <title>Needle Creations | Home</title>

        <link rel="icon" href="resources/logo.png"/>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="bootstrap.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    </head>

    <body>

        <div class="container-fluid">
            <div class="row">

                <?php require "header.php"; ?>
        
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="resources/banner/banner1.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                        <img src="resources/banner/banner2.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                        <img src="resources/banner/banner3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5 mb-5">

                <div class="col-8 offset-2 text-center mt-5 mb-3">
                    <p style="font-size: 40px;font-family:PoppinsSemibold">
                    Subscribe to our newsletter to get updates about our New Collections</p>
                </div>

                <div class="col-5 offset-3">
                    <input type="email" class="form-control" placeholder="Enter Your Email" style="background-color: #fbfbfb;"/>
                </div>

                <div class="col-1 text-center">
                    <button class="btn btnred redbtnhover">Subscribe</button>
                </div>

            </div>

            <?php require "footer.php"; ?>



    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
    </body>
</html>