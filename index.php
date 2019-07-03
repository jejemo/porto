<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.min.css">
    <!-- MyStyle CSS -->
    <link rel="stylesheet" href="asset/css/mystyle.css">
    <!-- Font Awesome icon CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Jquery JS -->
    <script src="asset/js/jquery.js"></script>
    <!-- Ajax JS -->
    <script src="asset/js/ajax.js"></script>
    <!-- Bootstrap JS -->
    <script src="asset/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>

<body>
    <!-- Menu Nav -->
    <div class="menu-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="">Profile <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="/tugas/kampus.php">Kampus</a>
                        <a class="nav-item nav-link" href="#">Daftar</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Akhir Menu Nav -->
    <!-- Header -->
    <div class="header">
        <div class="jumbotron">
            <div class="container">
                <h1>
                    JP<br />
                    Istomo
                </h1>
            </div>
            <div class="container">
                <p>Full Stack Developer | Mobile Programmer | UI<small>&</small>UX Designer</p>
                <hr align="left" />
            </div>

        </div>
    </div>
    <!-- Akhir Header -->

    <!-- Porto -->
    <div class="porto">
        <div class="jumbotron">
            <div class="container">
                <div class="row ">
                    <!-- Image -->
                    <div class="col-sm-12 col-md-4 col-lg-4 center">
                        <img src="asset/img/profile.jpg" class="rounded-circle" alt="Responsive image">
                    </div>
                    <!-- Akhir Image -->
                    <!-- Content -->
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <!-- Introducing -->
                        <div class="row">
                            <div class="col-12">
                                <h2>/INTRODUCING </h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim inventore veritatis,
                                    voluptatum vero impedit excepturi temporibus consectetur optio magni similique
                                    labore obcaecati suscipit minima itaque! Incidunt sequi ab ex rerum ,-</p>
                            </div>
                        </div>
                        <!-- Skill -->
                        <div class="row">
                            <div class="col-12">
                                <h2>/SKILL</h2>
                                <p>Html, CSS, Javascript, PHP, Node JS, Mobile Programming, UI&UX Design ,-</p>
                            </div>
                        </div>
                        <!-- Software -->
                        <div class="row">
                            <div class="col-12">
                                <h2>/SOFTWARE</h2>
                                <p>Visual Code Studio, XAMPP, Node JS, Android Studio, XCode 10, Adobe XD ,-</p>
                            </div>
                        </div>
                        <!-- Language -->
                        <div class="row">
                            <div class="col-12">
                                <h2>/LANGUAGE</h2>
                                <p>Indonesia, English, Japan, Chinese ,-</p>
                            </div>
                        </div>
                        <!-- Gallery -->
                        <div class="row">
                            <div class="col-12">
                                <h2>/GALLERY</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Content -->
                </div>
                <!-- Image Gallery -->
                <div class="row marbot">
                    <!-- Image 1 -->
                    <div class="col-sm-12 col-md-3 ">
                        <img src="asset/img/img1.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <!-- Image 2 -->
                    <div class="col-sm-12 col-md-3">
                        <img src="asset/img/img2.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <!-- Image 3 -->
                    <div class="col-sm-12 col-md-3">
                        <img src="asset/img/img3.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <!-- Image 4 -->
                    <div class="col-sm-12 col-md-3">
                        <img src="asset/img/img4.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Porto -->

    <!-- Footer -->
    <?php
    include ('../tugas/view/footer.php');
  ?>
    <!-- Akhir Footer -->
</body>

</html>