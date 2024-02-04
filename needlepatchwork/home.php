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
    
<div class="container">

    <?php
    include "header.php";
    ?>
    
    <!-- Carousel -->
    <div class="row pb-5">
        <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 20px;">
                <div class="carousel-item active">
                <img src="resources/banner/banner3.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="resources/banner/banner2.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="resources/banner/banner1.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    

    <!-- Landing Products -->
    <nav>
        <div class="nav nav-tabs fw-bold justify-content-center" id="nav-tab" role="tablist">
            <button class="nav-link fs-5 px-4 mx-2 active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">POPULAR</button>
            <button class="nav-link fs-5 px-4 mx-2" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">NEW ARRIVALS</button>
            <button class="nav-link fs-5 px-4 mx-2" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">SPECIALS</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

        <div class="mt-3">

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3 g-lg-5">
                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>
                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>
                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>
                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>
                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>
                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>
                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>
            </div>

        </div>

    </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
    </div>

    <!-- Middle Carousel -->
    <div class="row py-5">
        <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 20px;">
                <div class="carousel-item active">
                <img src="resources/banner/banner3.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="resources/banner/banner2.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="resources/banner/banner1.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- Discounted Product -->
    <div class="row pt-4 pb-5">
        <div class="col-12 text-center pb-5">
            <h3>Discounted Products</h3>
        </div>

        <div class="col-12">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3 g-lg-5">
                
                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                        <span class="position-absolute start-50 fs-5 translate-middle badge rounded-pill bg-success">
                        20% OFF
                        </span>
                        
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>

                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                        <span class="position-absolute start-50 fs-5 translate-middle badge rounded-pill bg-success">
                        20% OFF
                        </span>
                        
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>

                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                        <span class="position-absolute start-50 fs-5 translate-middle badge rounded-pill bg-success">
                        20% OFF
                        </span>
                        
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>

                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                        <span class="position-absolute start-50 fs-5 translate-middle badge rounded-pill bg-success">
                        20% OFF
                        </span>
                        
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>

                <div class="col">
                <div class="card" style="width: 100%;border: none;">
                    <div class="border" style="border-radius: 20px;border-color: #121212;">
                        <img src="resources/product_images/bag1.png" class="card-img-top imgbg" alt="...">
                        <span class="position-absolute start-50 fs-5 translate-middle badge rounded-pill bg-success">
                        20% OFF
                        </span>
                        
                    </div>
                    <div class="card-body">
                        <h5 class="card-text mb-1">Flower Design Bag #001</h5>
                        <span class="mb-2" style="color: rgb(255, 149, 0);">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <h5 class="card-text fw-bold">Rs. 1200.00</h5>
                    </div>
                </div> 
                </div>
            </div>
        </div>
    </div>

</div>


    <?php
    include "footer.php";
    ?>


    

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>