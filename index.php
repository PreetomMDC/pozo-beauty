<?php

include_once("header.php");

//slider
$slider_stmt = $c->prepare("SELECT * FROM slider WHERE status = 1 AND project = ? ORDER BY id ASC");
$slider_stmt->bind_param("s", $project);
$slider_stmt->execute();
$slides = $slider_stmt->get_result()->fetch_all(MYSQLI_ASSOC);

//testimonial
$testimonial = $c->prepare("SELECT * FROM testimonials WHERE status = 1 AND project = ? limit 7");
$testimonial->bind_param("s", $project);
$testimonial->execute();
$result = $testimonial->get_result();
$testimonial = $result->fetch_all(MYSQLI_ASSOC);

//home blog
$blog_home = $c->prepare("SELECT * FROM blogs WHERE status = 1 AND project = ? limit 3");
$blog_home->bind_param("s", $project);
$blog_home->execute();
$result = $blog_home->get_result();
$blog_home = $result->fetch_all(MYSQLI_ASSOC);

?>

<!-- Hero Slider Section -->
<section class="hero-slider-section py-5">
    <div class="container">

        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">



            <div class="carousel-inner">
                <?php foreach ($slides as $index => $slide): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <img src="../images/slides/<?= htmlspecialchars($slide['image']) ?>" class="d-block w-100" alt="Slider Image 1">
                        <div class="carousel-caption d-none d-md-block text-start" style="bottom: 30%; left: 10%;">
                            <p class="fs-4 fst-italic"><?= htmlspecialchars($slide['subtitle']) ?></p>
                            <h1 class="display-3 fw-bold"><?= htmlspecialchars($slide['title']) ?></h1>
                            <a href="<?= htmlspecialchars($slide['url']) ?>" class="btn btn-pink rounded-0 px-4 mt-3"><?= htmlspecialchars($slide['button_text']) ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <!-- Slider Controls -->
            <button class="carousel-control-prev start-0 top-50 " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next end-0 top-50" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
</section>

<section class="features-section pt-0">
    <div class="container">
        <div class="row gx-4 d-flex align-items-stretch">

            <div class="col-md-3 d-flex feature-item">
                <div class="position-relative">
                    <img src="../images/feature_img1_101013.jpeg" alt="Favorites" class="img-fluid custom-feature-img">
                    <div class="hover-box-design"></div>
                </div>
            </div>
            <div class="col-md-6 d-flex feature-item">
                <div class="position-relative">
                    <img src="../images/feature_img_101013.jpeg" alt="Favorites" class="img-fluid custom-feature-img">
                    <div class="hover-box-design"></div>
                </div>
            </div>
            <div class="col-md-3 d-flex feature-item">
                <div class="position-relative">
                    <img src="../images/feature_img1_101013.jpeg" alt="Favorites" class="img-fluid custom-feature-img">
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
    <!-- Product Grid Section -->
    <div class="container mt-5">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <!-- Product Card 1 -->
            <div class="col">
                <div class="product-card text-center">
                    <div class="product-img-wrapper position-relative bg-white p-4">
                        <span class="product-badge bg-dark text-white px-2 py-1 small">New</span>
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Product Name">
                    </div>
                    <div class="product-info mt-3">
                        <div class="rating-stars mb-1" style="font-size: 10px; color: #555;">
                            <i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
                        </div>
                        <h6 class="text-white product-title mb-1">Sem qwase eiusmod</h6>
                        <p class="price-tag mb-0" style="color: #f08291; font-weight: 500;">$75.00</p>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 (Active Rating Sample) -->
            <div class="col">
                <div class="product-card text-center">
                    <div class="product-img-wrapper position-relative bg-white p-4">
                        <span class="product-badge bg-dark text-white px-2 py-1 small">New</span>
                        <img src="https://images.unsplash.com/photo-1515688594390-b649af70d282?q=80&w=1706&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Product Name">
                    </div>
                    <div class="product-info mt-3">
                        <div class="rating-stars mb-1" style="font-size: 10px; color: #f08291;">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <h6 class="text-white product-title mb-1">Framed-Sleeve Tops Group</h6>
                        <p class="price-tag mb-0" style="color: #f08291; font-weight: 500;">$22.00</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card text-center">
                    <div class="product-img-wrapper position-relative bg-white p-4">

                        <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=2087&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Product Name">
                    </div>
                    <div class="product-info mt-3">
                        <div class="rating-stars mb-1" style="font-size: 10px; color: #f08291;">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <h6 class="text-white product-title mb-1">Sleeve odio external</h6>
                        <p class="price-tag mb-0" style="color: #f08291; font-weight: 500;">$22.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-card text-center">
                    <div class="product-img-wrapper position-relative bg-white p-4">

                        <img src="https://images.unsplash.com/photo-1551392505-f4056032826e?q=80&w=1593&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Product Name">
                    </div>
                    <div class="product-info mt-3">
                        <div class="rating-stars mb-1" style="font-size: 10px; color: #f08291;">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <h6 class="text-white product-title mb-1">Lorem ipsum dolor sit</h6>
                        <p class="price-tag mb-0" style="color: #f08291; font-weight: 500;">$22.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-card text-center">
                    <div class="product-img-wrapper position-relative bg-white p-4">

                        <img src="https://images.unsplash.com/photo-1625093742435-6fa192b6fb10?q=80&w=2089&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Product Name">
                    </div>
                    <div class="product-info mt-3">
                        <div class="rating-stars mb-1" style="font-size: 10px; color: #f08291;">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <h6 class="text-white product-title mb-1">Zrouel dress variable</h6>
                        <p class="price-tag mb-0" style="color: #f08291; font-weight: 500;">$26.00-$30.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="blog-section">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center mb-lg-5">
                <div class="position-relative advertise mb-lg-5 mb-4">
                    <img src="../images/offer_101013.jpg" alt="Blog Section Image" class="w-100">
                    <div class="hover-box-design"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12 text-center">

                <p class="fst-italic text-white mb-1" style="font-family: 'Georgia', serif; letter-spacing: 1px;">
                    Beauty News
                </p>
                <h2 class="page-title fw-bold mb-5">LATEST FROM BLOG</h2>

            </div>

        </div>


        <div class="row gx-lg-5 gx-3">


            <?php
            foreach ($blog_home as $key => $value): ?>


                <div class="col-md-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.php?id=<?php echo htmlspecialchars($value['id']); ?>">
                                <div class="blog-img">
                                    <img src="../images/blogs/<?php echo htmlspecialchars($value['image']); ?>" class="img-fluid w-100" alt="Blog Image">
                                </div>
                            </a>
                        </div>

                        <div class="blog-meta d-flex gap-4 align-items-center justify-content-start text-light opacity-50 fst-italic py-3 border-bottom border-white" style="font-size: 14px;">

                            <span class="">
                                <i class="bi bi-calendar3 me-2"></i><?php echo date("j F, Y", strtotime($value['date'])); ?>
                            </span>
                            <span class="">
                                <i class="bi bi-person me-2"></i> <?php echo htmlspecialchars(ucfirst($value['author'])); ?>
                            </span>

                        </div>

                        <div class="blog-data py-2">
                            <h4 class="text-uppercase mb-2 blog-title">
                                <a href="blog-details.php?id=<?php echo htmlspecialchars($value['id']); ?>">
                                    <?php echo htmlspecialchars($value['title']); ?>
                                </a>
                            </h4>
                            <p class="text-light opacity-50 lh-base">
                                <?php echo htmlspecialchars(substr(strip_tags(htmlspecialchars($value['description'])), 0, 200)); ?>
                            </p>
                        </div>

                    </div>
                </div>


            <?php endforeach; ?>

        </div>

    </div>
</section>

<?php
include_once("footer.php");
?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper(".testimonialSwiper", {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        const productSwiper = new Swiper('.productSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 2
                },
                1400: {
                    slidesPerView: 3
                }
            }
        });
    });
</script>