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

    <title>Tampil Data</title>
</head>
<body>
    <h1>Daftar data pendaftaran</h1>
    <table class="table">
        <tr>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Alamat</td>
            <td>Jurusan 1</td>
            <td>Jurusan 2</td>
        </tr>
        <tr>
            
            <?php
                $shownama = file('../tugas/data/nama.txt');
                foreach($shownama as $nama){
            ?>
            <td><?php echo $nama?></td>
            <?php } ?>

            
            <?php
                $showkelamin = file('../tugas/data/kelamin.txt');
                foreach($showkelamin as $kelamin){
            ?>
            <td><?php echo $kelamin?></td>
            <?php } ?>

            
            <?php
                $showagama = file('../tugas/data/agama.txt');
                foreach($showagama as $agama){
            ?>
            <td><?php echo $agama?></td>
            <?php } ?>

            
            <?php
                $showalamat = file('../tugas/data/alamat.txt');
                foreach($showalamat as $alamat){
            ?>
            <td><?php echo $alamat?></td>
            <?php } ?>

            
            <?php
                $showjurusan1 = file('../tugas/data/jurusan1.txt');
                foreach($showjurusan1 as $jurusan1){
            ?>
            <td><?php echo $jurusan1?></td>
            <?php } ?>

            
            <?php
                $showjurusan2 = file('../tugas/data/jurusan2.txt');
                foreach($showjurusan2 as $jurusan2){
            ?>
            <td><?php echo $jurusan2?></td>
            <?php } ?>

            
        </tr>
    </table>
</body>
</html>