<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Home-stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script defer src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />
    <title>NTI Times</title>
</head>


<header>
    <h1>The NTI Times</h1>
    <hr>
    <?php if (isset($user)) : ?>
        <p> Hello <?= htmlspecialchars($user["name"]) ?> </p>
        <p> <a href="logout.php">Log Out</a></p>
    <?php endif; ?>
    <nav>
        <a href="#">ABOUT</a>
        <a href="#">INQUIRY</a>
        <a href="#">CONTENT</a>
        <a href="#">NEWS</a>

        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-google"></a>
    </nav>
</header>

<div class="title">
    <h1 id="typewriter"></h1>
    <nav class="fade">
        <a href="#Sports">SPORTS</a>
        <a href="#Economy">ECONOMY</a>
        <a href="#">RELATIONS</a>
    </nav>
</div>

<button style="position: fixed; z-index:99; margin-top:35vh; margin-left:2vw; border-radius:50%;" class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <span class="material-symbols-outlined" style="font-size:5vh;">
        menu
    </span>
</button>

<div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 m-4">
    <div class="col">
        <div class="card h-100" id="main">
            <img src="https://www.shawnachor.com/wp-content/uploads/2016/03/1398201472.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Woman With Notebook</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor pariatur quaerat voluptas debitis ipsa consectetur obcaecati. Aut voluptas ea nostrum!</p>
            </div>
            <div class="card-footer" style="background-color:red">
                <small style="color:white;">Last updated 59 mins ago</small>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card h-100" id="main">
            <img src="https://www.newsoresund.se/wp-content/uploads/2014/12/God-jul-20141224-webb1.jpg  " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Christmas Is Cancelled</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, necessitatibus! Labore cupiditate molestias nobis nulla!</p>
            </div>
            <div class="card-footer" style="background-color:red">
                <small style="color:white;">Last updated 59 mins ago</small>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100" id="main">
            <img src="https://live.staticflickr.com/65535/49501261396_ca1606f168_b.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Papers and Phones</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia id officiis ipsam cumque modi et, delectus rerum harum esse cupiditate magnam?</p>
            </div>
            <div class="card-footer" style="background-color:red">
                <small style="color:white;">Last updated 59 mins ago</small>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3" style="margin-top:15vh; max-width:95%; margin-left:2.5vw;" id="long-card">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://www.ctrl.blog/media/hero/apple-news-typesetting.jpeg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title" style="font-size:2rem">Random Words Are Increasing</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ex error temporibus recusandae non exercitationem?</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                <a style="color:blue">Learn More</a>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3" style="margin-top:15vh; max-width:95%; margin-left:2.5vw;" id="long-card">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://svenskarnaochinternet.se/app/uploads/2023/09/kpa-5679-1024x576.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title" style="font-size:2rem">A Guy Is Watching His Laptop</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore modi nam nostrum facilis eligendi nesciunt id deleniti, dolorem harum inventore.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                <a style="color:blue">Learn More</a>
            </div>
        </div>
    </div>
</div>

<footer class="bg-white">
    <div class="container py-5">
        <div class="row py-3">

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">About</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-muted">Contact Us</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">About Us</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Stories</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Press</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Help</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-muted">Payments</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Shipping</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Cancellation</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Returns</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Policy</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-muted">Return Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Terms Of Use</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Security</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Privacy</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-muted">Login</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Register</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Sitemap</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Our Products</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Registered Office Address</h6>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nemo et quisquam ut aspernatur molestiae voluptatem impedit! Sapiente, eos suscipit!</p>
            </div>
        </div>
    </div>
    <hr class="p-0 m-0 b-0">


    <div class="bg-light py-2">
        <div class="container text-center">
            <p class="text-muted mb-0 py-2">&copy; NTI Times All Rights Reserved</p>
        </div>
    </div>
</footer>




<div class="cursor"></div>
<div class="cursor2"></div>
</body>

</html>