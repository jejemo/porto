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
                        <a class="nav-item nav-link" href="/tugas/index.php">Profile <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Kampus</a>
                        <a class="nav-item nav-link" href="#">Daftar</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Akhir Menu Nav -->
    <!-- Intro -->
    <div class="kampus-intro">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-sm-12 col-md-6  ">
                    <h3>Universitas Amikom Yogyakarta</h3>
                    <p>Creative Economy Park </p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="../tugas/asset/img/kampus1.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Intro -->

    <!-- Visi Misi -->
    <div class="visi-misi">
        <div class="container">
            <dl class="row">
                <!-- Visi -->
                <dt class="col-sm-12 col-md-3">
                    Visi
                </dt>
                <dd class="col-sm-12 col-md-9 text-justify">
                    Menjadi salah satu universitas unggulan dunia dalam bidang teknologi informasi, komunikasi dan
                    bisnis berbasis moral dan entrepreneurship.
                </dd>
                <!-- Misi -->
                <dt class="col-sm-12 col-md-3">
                    Misi
                </dt>
                <dd class="col-sm-12 col-md-9 text-justify">
                    Universitas Amikom Yogyakarta memiliki misi :
                    <br><br>
                    Menyelenggarakan pendidikan tinggi kelas dunia di bidang teknologi informasi, komunikasi dan bisnis
                    berbasis moral dan entrepreneurship.
                    <br>
                    Melaksanakan penelitian penelitian dalam bidang teknologi informasi, komunikasi dan bisnis
                    berkualitas dunia yang dapat berperan meningkatkan daya saing nasional.
                    <br>
                    Menyelenggarakan layanan pengabdian kepada masyarakat secara profesional dalam rangka ikut
                    memecahkan persoalan dunia maupun nasional, terutama dalam bidang teknologi informasi, komunikasi
                    dan bisnis.
                    <br>
                    Menyelenggarakan pendidikan berstandar global melalui kemitraan dan jejaring nasional, regional
                    maupun global.
                </dd>
                <!-- Tujuan -->
                <dt class="col-sm-12 col-md-3">
                    Tujuan
                </dt>
                <dd class="col-sm-12 col-md-9 text-justify">
                    Universitas AmikomYogyakarta memiliki tujuan :
                    <br><br>
                    Menghasilkan lulusan yang berkualitas global, bermoral tinggi, berjiwa entrepreneur dan profesional
                    dalam disiplin ilmu teknologi informasi, komunikasi dan bisnis.
                    <br>
                    Menghasilkan penelitian dan produk teknologi informasi, komunikasi dan bisnis berkualitas global
                    yang dapat berperan meningkatkan daya saing nasional.
                    <br>
                    Menyelenggarakan layanan pengabdian kepada masyarakat secara profesional dalam rangka ikut
                    memecahkan persoalan global maupun nasional, terutama dalam bidang teknologi informasi, komunikasi
                    dan bisnis.
                    <br>
                    Menyelenggarakan pendidikan berstandar global melalui kemitraan dan jejaring nasional, regional
                    maupun global.
                </dd>
            </dl>
        </div>
    </div>
    <!-- Akhir Visi Misi -->

    <?php
        include ('../tugas/view/footer.php');
    ?>

</body>

</html