<?php include('header.php'); ?>

<!-- Bootstrap CSS (যদি header.php তে না থাকে) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome for Home Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="./styles.css">




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
<!--  Map Section -->
 <section class="map-section pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map-container shadow-sm" style="border: 1px solid #333; overflow: hidden; height: 400px; width: 100%;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.443105085443!2d-122.4764826241315!3d37.80313137197825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586ea4b301763%3A0x67396a804e38c53a!2sStorey%20Ave%2C%20San%20Francisco%2C%20CA%2094129%2C%20USA!5e0!3m2!1sen!2sbd!4v1709890000000!5m2!1sen!2sbd" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>