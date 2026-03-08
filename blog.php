<?php include('header.php'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link text-white" href="pages.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="portfolio.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="blog-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="custom-breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li class="separator">/</li>
                    <li><a href="#">Blog</a></li>
                    <li class="separator">/</li>
                    <li class="active-page">Masonry 3 columns</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Blog Header Banner -->
 
<section class="blog-section py-5">
    <div class="container">
        
        <div class="row">
            
            
            <div class="col-md-4 mb-5">
                <div class="blog-item">
                    <div class="blog-img-box">
                        <img src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100" alt="">
                        <div class="blog-text-box shadow">
                            
                            
                        </div>
                    </div>
                    <div class="blog-content mt-4">
                        <p class="text-muted small">Lorem yasuo ipsum dolor ashe sit amet, consectetuer adipiscing.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                </div>
            </div>

           
            <div class="col-md-4 mb-5">
                <div class="blog-item">
                    <div class="blog-img-box">
                        <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?q=80&w=1653&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100" alt="">
                        <div class="blog-text-box shadow">
                             
                        </div>
                    </div>
                    <div class="blog-content mt-4">
                        <p class="text-muted small">Lorem yasuo ipsum dolor ashe sit amet, consectetuer adipiscing.</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4 mb-5">
                <div class="blog-item">
                    <div class="blog-img-box">
                        <img src="https://images.unsplash.com/photo-1564594326930-17381130fd2e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100" alt="">
                        <div class="blog-text-box shadow">
                            
                        </div>
                    </div>
                    <div class="blog-content mt-4">
                        <p class="text-muted small">Lorem Ipsum is simply dummy text of the printing</p>
                        <a href="#" class="read-more">READ MORE</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include('footer.php'); ?>