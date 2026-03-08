<?php include('header.php'); ?>

<!-- Bootstrap CSS (যদি header.php তে না থাকে) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome for Home Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="./styles.css">

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
                        <a class="nav-link" href="blog.php">BLOG</a>
                    </li>
                    <li class="nav-item border-end border-secondary">
                        <a href="about.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="portfolio.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


<!-- Banner Section -->
<section class="about-banner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
    <div class="container text-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">About us</li>
            </ol>
        </nav>
    </div>
</section>

<!-- About Content Section -->

<!-- Leave a Message Section Start -->
<section class="contact-info-section py-5 my-5">
    <div class="container">
        <div class="row g-5">
            
            
            <div class="col-md-7">
                <h2 class="section-title mb-4" style="color: #ffffff;">LEAVE A MESSAGE</h2>
                <form action="#" class="contact-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control custom-input" placeholder="Name*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control custom-input" placeholder="Subject">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control custom-input" placeholder="Email*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control custom-input" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control custom-input" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-send-message">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- ডান পাশে: Information (col-md-5) -->
            <div class="col-md-5">
                <h2 class="section-title mb-4" style="color: #ffffff;">INFORMATION</h2>
                <div class="info-content">
                    <p class="text-light-grey mb-4" style="line-height: 1.8; font-size: 15px;">
                        For any feedbacks or improvements on our online store, please fill in this contact form. 
                        We will take a look and reply you within 24 hours. We always need your feedbacks 
                        to continuously leverage your shopping experience.
                    </p>
                    
                    <ul class="list-unstyled contact-details">
                        <li class="d-flex align-items-start mb-3">
                            <i class="fa fa-home mt-1 me-3 text-white"></i>
                            <span class="text-white">YOUR NAME ROAD, LONDON, UNITED OF KINGDOM</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa fa-envelope me-3 text-white"></i>
                            <span class="text-white">SALES@YOURSITE.COM</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa fa-mobile-alt me-3 text-white"></i>
                            <span class="text-white">025 1234 5678 — 025 1234 5779</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Leave a Message Section End -->
<?php include('footer.php'); ?>