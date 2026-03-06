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
    
    <style>
        body {
            background-color: #212121;
            color: white;
            margin: 0;
            padding: 0;
        }

        /* Top Header Styles */
        .custom-box {
            border: 1px solid #555;
            color: #fff;
            padding: 2px 12px;
            font-size: 0.8rem;
            font-weight: 300;
            text-transform: uppercase;
            cursor: pointer;
        }

        /* Navbar Styles */
        .main-navbar .nav-link {
            padding: 15px 40px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Georgia', serif;
            transition: 0.3s ease;
        }
        .text-pink {
            color: #e91e63 !important;
        }
        .main-navbar .nav-link:hover {
            color: #e91e63 !important;
        }

        /* Slider Styles */
        .carousel-item img {
            height: 600px;
            object-fit: cover;
        }
        
        .feature-item {
            position: relative;
            height: auto;
            max-height: 400px; 
            overflow: hidden;
        }

        .feature-item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .feature-item:hover img {
            transform: scale(1.05);
        }

        .feature-caption {
            position: absolute;
            bottom: 20%;
            left: 10%;
            z-index: 10;
            color: white;
            text-align: left;
        }

        .center-caption {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            bottom: auto;
        }

        .feature-item p {
            font-family: 'Georgia', serif;
            font-size: 0.9rem !important;
        }

        .feature-item h2 {
            font-size: 2.2rem;
            margin-bottom: 0;
            line-height: 1;
        }

        .feature-item .btn {
            font-size: 0.8rem;
            text-transform: capitalize;
        }

        
        @media (min-width: 768px) {
            .feature-item.col-md-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }
            .feature-item.col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        /* Featured Products Section Custom Styles */
.tracking-widest {
    letter-spacing: 3px;
    font-family: 'Georgia', serif;
}

.icon-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #222;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: #888;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid #333;
}


.active-pink {
    background-color: #f08090 !important; 
    color: white !important;
    box-shadow: 0 0 15px rgba(240, 128, 144, 0.4);
    border: none;
}

.category-item:hover .icon-circle {
    transform: translateY(-5px);
    border-color: #e91e63;
}

.category-item p {
    letter-spacing: 1px;
    font-size: 0.75rem;
}


.text-pink {
    color: #e91e63 !important;
}

.featured-products-wrapper {
    background-color: #050505; 
    width: 100%;
}

.tracking-widest {
    letter-spacing: 4px;
    font-family: 'Georgia', serif;
}


.divider-line {
    width: 60px;
    height: 1px;
    background-color: #e91e63;
    position: relative;
}


.icon-circle {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background-color: #1a1a1a; 
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.4s ease;
    border: 1px solid #222;
}


.active-pink {
    background-color: #f08090 !important; 
    color: white !important;
    border: none;
    box-shadow: 0 0 20px rgba(240, 128, 144, 0.3);
}

.active-pink img {
    filter: none !important; 
}


.category-item:hover .icon-circle {
    border-color: #e91e63;
    transform: translateY(-5px);
}

.text-pink {
    color: #e91e63 !important;
}

.small {
    font-size: 0.75rem;
    letter-spacing: 1.5px;
}

.featured-products-wrapper {
    background-color: #000000;
    width: 100%;
}


.glass-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: radial-gradient(circle, #222 0%, #111 100%); 
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #222; 
    box-shadow: inset 0 0 15px rgba(255,255,255,0.05); 
    color: #ffffff;
    font-size: 2rem;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}


.active-pink {
    background: #f08291 !important; 
    border: none;
    box-shadow: 0 0 25px rgba(240, 130, 145, 0.5); 
    color: white !important;
}


.category-item:hover .glass-circle {
    transform: scale(1.1);
    border-color: #f08291;
}


.category-title {
    color: #ffffff;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1.5px;
    font-family: 'Georgia', serif;
    text-transform: uppercase;
}

.active-text {
    color: #f08291 !important;
}


.divider-line {
    width: 50px;
    height: 1px;
    background-color: #f08291;
}
/* Testimonial Section Styles */
.testimonial-section {
    border-top: 1px solid #eee;
}

.divider-line-pink {
    width: 60px;
    height: 1px;
    background-color: #f08291;
}

/* গোল ইমেজ স্টাইল */
.client-img-wrapper {
    width: 120px;
    height: 120px;
    margin: 0 auto;
    border-radius: 50%;
    overflow: hidden;
    border: 5px solid #f1f1f1; /* ইমেজের চারপাশের গ্রে বর্ডার */
}

.client-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* ক্লায়েন্টের নাম ও টেক্সট */
.client-card h5 {
    font-size: 14px;
    letter-spacing: 1px;
}

.client-text {
    font-size: 13px;
    color: #666;
    line-height: 1.6;
    max-width: 250px;
    margin: 0 auto;
}

.short-divider {
    width: 30px;
    height: 1px;
    background-color: #f08291;
    margin: 0 auto;
}

/* নেভিগেশন বাটন (Arrows) */
.nav-btn-pink {
    background-color: #f08291;
    color: white;
    border: none;
    width: 35px;
    height: 35px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}

.nav-btn-pink:hover {
    background-color: #e91e63;
    transform: scale(1.1);
}
    </style>
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
                <a href="#" class="btn btn-danger rounded-0 px-4 mt-3" style="background-color: #e91e63;">Shop now !</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="slider-image2.jpeg" class="d-block w-100" alt="Slider Image 2">
            <div class="carousel-caption d-none d-md-block text-start" style="bottom: 30%; left: 10%;">
                <p class="fs-4 fst-italic">Sale off 20% - 50%</p>
                <h1 class="display-3 fw-bold">3 IN 1 CLEANSER</h1>
                <a href="#" class="btn btn-danger rounded-0 px-4 mt-3" style="background-color: #e91e63;">Shop now !</a>
                
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
            
<div class="container-fluid px-0 mt-5">
        
            </div>

            <div class="col-md-6 feature-item">
                <img src="feature_img.jpeg" alt="Nail Polish" class="img-fluid w-100">
                <div class="feature-caption center-caption">
                    <p class="fs-6 fst-italic"></p>
                    <h2 class="display-6 fw-bold"></h2>
                    <a href="#" class="btn btn-pink rounded-0 mt-2 px-3"></a>
                </div>
            </div>

            
            </div>

        </div>
    </div>
    <div class="container text-center my-5 pt-5">
    
    
    <div class="d-flex justify-content-center mb-5">
       
    </div>

    <div class="featured-products-wrapper py-5">
    <div class="container text-center py-4">
        <p class="fst-italic text-secondary mb-1" style="font-family: 'Georgia', serif;">The Best Products Of Beauty Store</p>
        <h2 class="fw-bold mb-4 tracking-widest text-white">FEATURED PRODUCTS</h2>
        
        <div class="d-flex justify-content-center mb-5">
            <div class="divider-line"></div>
        </div>

        <div class="d-flex justify-content-center align-items-center gap-4 gap-md-5 flex-wrap">
            
            <div class="category-item text-center">
                <div class="glass-circle active-pink">
                    <i class="bi bi-magic"></i> </div>
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
                <section class="testimonial-section py-5 bg-white text-dark">
    <div class="container text-center">
        <!-- Section Title -->
        <p class="fst-italic text-secondary mb-1">Our Testimonial</p>
        <h2 class="fw-bold mb-4 tracking-widest text-dark" style="font-family: 'Georgia', serif;">WHAT CLIENT SAY</h2>
        <div class="d-flex justify-content-center mb-5">
            <div class="divider-line-pink"></div>
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
        </div>
    </div>
</div>
        </div>
    </div>
</div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>