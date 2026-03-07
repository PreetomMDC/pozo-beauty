<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pozobeauty</title>

    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <!-- Top Bar -->
        <div class="py-3 bg-dark text-white border-bottom border-secondary">
            <div class="container-fluid px-4">
                <div class="row align-items-center">
                    <!-- Left: Account Links -->
                    <div class="col-4 d-flex align-items-center gap-4">
                        <a href="login.php" class="text-white text-decoration-none small d-flex align-items-center">

                        </a>
                        <a href="checkout.php" class="text-white text-decoration-none small d-flex align-items-center">

                        </a>
                        <a href="wishlist.php" class="text-white text-decoration-none small d-flex align-items-center">

                        </a>
                    </div>

                    <!-- Center: Logo -->
                    <div class="col-4 text-center">
                        <a href="index.php" class="navbar-brand d-flex flex-column align-items-center">
                            <img src="main-logo.jpeg" alt="Vani" height="40">
                            <span class="text-secondary small" style="font-size: 0.7rem;"></span>
                        </a>
                    </div>

                    <!-- Right: Utilities -->
                    <div class="col-4 d-flex justify-content-end align-items-center gap-3">
                        <div class="d-flex align-items-center me-3">

                            <span class="small text-white fw-light" style="cursor: pointer;"></span>
                        </div>
                        <div class="me-3">
                            <span class="fw-bold text-white fs-5"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="main-navbar border-bottom border-secondary bg-dark">
            <div class="container-fluid px-0">
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item border-end border-secondary">
                        <a class="nav-link active text-pink" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item border-end border-secondary">
                        <a class="nav-link text-white" href="shop.php">SHOP</a>
                    </li>
                    <li class="nav-item border-end border-secondary">
                        <a class="nav-link text-white" href="blog.php">BLOG</a>
                    </li>
                    <li class="nav-item border-end border-secondary">
                        <a class="nav-link text-white" href="pages.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="portfolio.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Slider Section -->
    <div id="carouselExample" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="slider-image1.jpeg" class="d-block w-100" alt="Slider Image 1">
                <div class="carousel-caption d-none d-md-block text-start" style="bottom: 30%; left: 10%;">
                    <p class="fs-4 fst-italic">Beauty for you!</p>
                    <h1 class="display-3 fw-bold">SALE UP TO 50% OFF</h1>
                    <a href="#" class="btn btn-pink rounded-0 px-4 mt-3">Shop now !</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="slider-image2.jpeg" class="d-block w-100" alt="Slider Image 2">
                <div class="carousel-caption d-none d-md-block text-start" style="bottom: 30%; left: 10%;">
                    <p class="fs-4 fst-italic">Sale off 20% - 50%</p>
                    <h1 class="display-3 fw-bold">3 IN 1 CLEANSER</h1>
                    <a href="#" class="btn btn-pink rounded-0 px-4 mt-3">Shop now !</a>

                </div>
            </div>

        </div>

        <!-- Slider Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="features-section py-5">
        <div class="container">
            <div class="row gx-4 d-flex align-items-stretch">

                <div class="col-md-3 d-flex feature-item">
                    <div class="position-relative">
                        <img src="feature_img1.jpeg" alt="Favorites" class="img-fluid custom-feature-img">
                        <div class="hover-box-design"></div>
                    </div>
                </div>
                <div class="col-md-6 d-flex feature-item">
                    <div class="position-relative">
                        <img src="feature_img.jpeg" alt="Favorites" class="img-fluid custom-feature-img">
                        <div class="hover-box-design"></div>
                    </div>
                </div>
                <div class="col-md-3 d-flex feature-item">
                    <div class="position-relative">
                        <img src="feature_img1.jpeg" alt="Favorites" class="img-fluid custom-feature-img">
                        <div class="hover-box-design"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="featured-products py-5 bg-black text-white">

        <div class="container">
            <div class="text-center">
                <p class="fst-italic text-white mb-2" style="font-family: 'Georgia', serif;">The Best Products Of Beauty Store</p>
                <h2 class="fw-bold mb-4 tracking-widest text-white page-title">FEATURED PRODUCTS</h2>
            </div>


            <div class="d-flex justify-content-center align-items-center gap-4 gap-lg-5 flex-wrap">

                <div class="category-item text-center">
                    <div class="glass-circle active-pink">
                        <i class="bi bi-magic"></i>
                    </div>
                    <p class="mt-3 category-title active-text">LIPSTICK</p>
                </div>

                <div class="category-item text-center">
                    <div class="glass-circle">
                        <i class="bi bi-eyedropper"></i>
                    </div>
                    <p class="mt-3 category-title">GLOSS</p>
                </div>

                <div class="category-item text-center">
                    <div class="glass-circle">
                        <i class="bi bi-pencil"></i>
                    </div>
                    <p class="mt-3 category-title">EYE PENCIL</p>
                </div>

                <div class="category-item text-center">
                    <div class="glass-circle">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <p class="mt-3 category-title">SOAP</p>
                </div>

                <div class="category-item text-center">
                    <div class="glass-circle">
                        <i class="bi bi-paint-bucket"></i>
                    </div>
                    <p class="mt-3 category-title">CONCEALER</p>
                </div>

            </div>


        </div>

    </section>


    <section class="testimonial-section py-5 bg-white text-dark">
        <div class="container text-center">


            <div class="text-center mb-5">
                <p class="fst-italic text-secondary mb-2" style="font-family: 'Georgia', serif;">Our Testimonial</p>
                <h2 class="fw-bold mb-4 tracking-widest text-dark page-title">WHAT CLIENT SAY</h2>
            </div>


            <!-- Slider Wrapper (Bootstrap Row) -->
            <div class="row align-items-center position-relative">
                <!-- Left Arrow -->
                <div class="col-1 d-none d-md-block">
                    <button class="nav-btn-pink"><i class="bi bi-chevron-left"></i></button>
                </div>

                <!-- Clients List -->
                <div class="col-10">
                    <div class="row">
                        <!-- Client 1 -->
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-img-wrapper">
                                    <img src="client1.jpg" alt="MS HALEY">
                                </div>
                                <h5 class="fw-bold mt-3 mb-0">MS HALEY</h5>
                                <p class="fst-italic small text-secondary">CEO Of ThemeFTC</p>
                                <div class="short-divider my-2"></div>
                                <p class="client-text mt-3">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor</p>
                            </div>
                        </div>

                        <!-- Client 2 -->
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-img-wrapper">
                                    <img src="client2.jpg" alt="MS QUIN">
                                </div>
                                <h5 class="fw-bold mt-3 mb-0">MS QUIN</h5>
                                <p class="fst-italic small text-secondary">Customer Care</p>
                                <div class="short-divider my-2"></div>
                                <p class="client-text mt-3">Suspendisse urna nibh, viverra non, semper suscipit, posuere a,</p>
                            </div>
                        </div>

                        <!-- Client 3 -->
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-img-wrapper">
                                    <img src="client3.jpg" alt="MS. DOE">
                                </div>
                                <h5 class="fw-bold mt-3 mb-0">MS. DOE</h5>
                                <p class="fst-italic small text-secondary">Designer</p>
                                <div class="short-divider my-2"></div>
                                <p class="client-text mt-3">Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Arrow -->
                <div class="col-1 d-none d-md-block">
                    <button class="nav-btn-pink"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>



    <section class="blog py-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12">
                    <img src="offer.jpg" class="w-100">
                </div>
            </div>


            <div class="row mb-5">

                <div class="col-12 text-center">
                    <p class="fst-italic text-white mb-2" style="font-family: 'Georgia', serif;">Beauty News</p>
                    <h2 class="fw-bold mb-4 tracking-widest text-white page-title">LATEST FROM BLOG</h2>
                </div>

            </div>


            <div class="row">

                <div class="col-md-4">
                    <div class="card border-0 rounded-0 bg-transparent p-0 rounded-0">
                        <img src="blog-1.jpg" class="card-img-top" alt="Blog Post 1">
                        <div class="card-body px-0">
                            <p class="card-text text-secondary fst-italic mb-3 border-0 border-light border-bottom pb-3 d-flex align-items-center justify-content-start gap-4" style="font-family: 'Georgia', serif;">
                                <span><i class="bi bi-calendar"></i> 20 Aug 2024</span>
                                <span><i class="bi bi-person-fill"></i> Admin</span>
                            </p>
                            <h5 class="card-title text-white fw-bold">5 Tips for Flawless Makeup</h5>
                            <p class="text-white opacity-50 fw-normal">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy
                            </p>
                        </div>
                    </div>

                </div>


            </div>
    </section>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>