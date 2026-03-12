<?php 
include('header.php');

$blog_home = $c->prepare("SELECT * FROM blogs WHERE status = 1 AND project = ? limit 10");
$blog_home->bind_param("s", $project);
$blog_home->execute();
$result = $blog_home->get_result();
$blog_home = $result->fetch_all(MYSQLI_ASSOC);


?>

<section class="pt-0 pb-5">
    <div style="background: url(../images/banner-shop-101013.jpg) no-repeat center center;background-size: cover; height: 225px; margin-top: 50px;" class="d-flex container align-items-center justify-content-center position-relative">
        <h4 style="z-index: 2;position: relative;"><i class="bi bi-house"></i> Home / Blog</h4>
        <div class="overlay" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.65);z-index: 1;"></div>

        </div>
    </div>
</section>

<!-- Blog Header Banner -->

<section class="blog-section pt-0">
    <div class="container">       
        <div class="row gx-lg-4 gx-3">
            <?php
            foreach ($blog_home as $key => $value): ?>


                <div class="col-md-4">
                    <div class="blog-card position-relative">
                        <div class="blog-img">
                            <a href="blog-details.php?id=<?php echo htmlspecialchars($value['id']); ?>">
                                <div class="blog-img">
                                    <img src="../images/blogs/<?php echo htmlspecialchars($value['image']); ?>"
                                        class="img-fluid w-100" alt="Blog Image">
                                </div>
                            </a>
                        </div>


                        <div class="blog-meta d-flex gap-4 align-items-center justify-content-start text-light opacity-50 fst-italic py-3 border-bottom border-white"
                            style="font-size: 14px;">

                            <span class="">
                                <i class="bi bi-calendar3 me-2"></i>
                                <?php echo date("j F, Y", strtotime($value['date'])); ?>
                            </span>
                            <span class="">
                                <i class="bi bi-person me-2"></i>
                                <?php echo htmlspecialchars(ucfirst($value['author'])); ?>
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
<?php include('footer.php'); ?>