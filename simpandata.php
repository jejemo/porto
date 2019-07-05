<?php
//init
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$jurusan1 = $_POST['jurusan1'];
$jurusan2 = $_POST['jurusan2'];

//write to nama data
$txtdata = fopen("../tugas/data/nama.txt","a");
fwrite($txtdata, $nama,);
fwrite($txtdata,"\t");
fclose($txtdata);

$txtdata = fopen("../tugas/data/nama.txt","a");
fwrite($txtdata, $kelamin,);
fwrite($txtdata,"\t");
fclose($txtdata);

$txtdata = fopen("../tugas/data/nama.txt","a");
fwrite($txtdata, $alamat,);
fwrite($txtdata,"\t");
fclose($txtdata);

$txtdata = fopen("../tugas/data/nama.txt","a");
fwrite($txtdata, $agama);
fwrite($txtdata,"\n");
fclose($txtdata);

$message = "Berhasil di simpan";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script>location.href='/tugas/index.php';</script>";

?>


