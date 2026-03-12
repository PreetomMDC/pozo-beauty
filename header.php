<?php
include_once(__DIR__ . '/../app/config.php');
$project = '101013';
$site_info = $c->prepare("SELECT * FROM projects WHERE site_id = ?");
$site_info->bind_param("s", $project);
$site_info->execute();
$result = $site_info->get_result();
$site_info = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($site_info['name']); ?></title>

    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

<header>
    <div class="py-4">
        <div class="container text-center">
            <a href="index.php" class="text-decoration-none">
                <img src="../images/logo/<?php echo htmlspecialchars($site_info['logo']); ?>" alt="Vani Beauty Store"
                    height="70">
            </a>
        </div>
    </div>

    <div class="container ">
        <div class="border-top border-bottom border-white">
            <nav class="navbar navbar-expand-lg p-0">
                <ul class="navbar-nav w-100 d-flex justify-content-center align-items-center">

                    <li class="nav-item border-2 border-end border-white px-4 py-2">
                        <a class="nav-link fw-bold px-4" href="index.php" style="color: #ff6b81;">HOME</a>
                    </li>

                    <li class="nav-item border-end border-2 border-white px-4 py-2">
                        <a class="nav-link text-white fw-bold px-4" href="shop.php">SHOP</a>
                    </li>

                    <li class="nav-item border-end border-2 border-white px-4 py-2">
                        <a class="nav-link text-white fw-bold px-4" href="blog.php">BLOG</a>
                    </li>

                    <li class="nav-item border-end border-2 border-white px-4 py-2">
                        <a class="nav-link text-white fw-bold px-4" href="pages.php">ABOUT US</a>
                    </li>

                    <li class="nav-item border-2 border-white px-4 py-2">
                        <a class="nav-link text-white fw-bold px-4" href="elements.php">CONTACT US</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</header>