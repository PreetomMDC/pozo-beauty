<footer class=" bg-black text-secondary pt-5">

    <div class="container mb-lg-5 mb-4">

        <div class="row gx-5">

            <!-- Contact Us Section -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-white fw-bold mb-4 text-uppercase">CONTACT US</h5>

                <p class="d-flex align-items-top justify-content-top gap-3 mb-2">
                    <i class="bi bi-geo-alt-fill text-white mt-1"></i> Address: <?php echo htmlspecialchars($site_info['address']); ?>
                </p>
                <p class="d-flex align-items-center justify-content-start gap-3 mb-2">
                    <i class="bi bi-envelope text-white mt-1"></i> Email: <?php echo htmlspecialchars($site_info['email']); ?>
                </p>
                <p class="d-flex align-items-center justify-content-start gap-3 mb-2">
                    <i class="bi bi-phone text-white mt-1"></i> Phone: <?php echo htmlspecialchars($site_info['phone']); ?>
                </p>



            </div>

            <!-- Social Connect Section -->
            <div class="col-md-4">
                <h5 class="text-white fw-bold mb-4 text-uppercase">SOCIAL CONNECT</h5>
                <p class="mb-4 pe-lg-5" style="line-height: 1.8;">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                </p>

                <!-- Social Icons -->
                <div class="d-flex gap-4 social-icons">
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-instagram"></i></a>                    
                </div>
            </div>

            <!-- Instagram -->
            <div class="col-md-4">
                <h5 class="text-white fw-bold mb-4 text-uppercase">INSTAGRAM</h5>
                <div class="instagram-feed">
                        
                        <div class="row g-2">  
                            <?php
                            $instagram = $site_info['instagram'];
                            $instagram = explode(",", $instagram);

                            for ($i = 0; $i < 6; $i++) { ?>
                                <div class="col-4 position-relative insta">
                                    <div class="insta-box">
                                        <img src="https://vani.themeftc.com/wp-content/uploads/2019/09/501-150x150.jpg"
                                            alt="Instagram">
                                    </div>
                                </div>
                            <?php } ?>
                         </div>


                </div>                    
            </div>


        </div>

    </div>

    <!-- Copyright Bar -->
    <div class="footer-bottom py-4" style="background-color: #1a1a1a;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0 copyright-text text-lg-start text-center">
                        Copyright © 2026 All Rights Reserved by <span class="text-white fw-bold"><?= htmlspecialchars($site_info['name']); ?></span>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="mb-0 copyright-text text-lg-end text-center">
                        Powered by <a href="https://thebigdogdigital.com" target="_blank" class="text-white fw-bold text-decoration-none">TheBigDogDigital</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>


<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top" title="Go to top">
    <i class="bi bi-chevron-up"></i>
</button>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>





<script>

    const backToTopBtn = document.getElementById("backToTop");


    window.onscroll = function () {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            backToTopBtn.style.display = "flex";
            backToTopBtn.style.opacity = "1";
        } else {
            backToTopBtn.style.display = "none";
            backToTopBtn.style.opacity = "0";
        }
    };


    backToTopBtn.onclick = function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    };
</script>
</body>

</html>