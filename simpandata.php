<?php
//init
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$jurusan1 = $_POST['jurusan1'];
$jurusan2 = $_POST['jurusan2'];

//write to nama data
$txtnama = fopen("../tugas/data/nama.txt","a");
fwrite($txtnama, $nama);
fwrite($txtnama,"\n");
fclose($txtnama);

//write to jenis kelamin data
$txtkelamin = fopen("../tugas/data/kelamin.txt","a");
fwrite($txtkelamin, $kelamin);
fwrite($txtkelamin,"\n");
fclose($txtkelamin);

//write to agama data
$txtagama = fopen("../tugas/data/agama.txt","a");
fwrite($txtagama, $agama);
fwrite($txtagama,"\n");
fclose($txtagama);

//write to alamat data
$txtalamat = fopen("../tugas/data/alamat.txt","a");
fwrite($txtalamat, $alamat);
fwrite($txtalamat,"\n");
fclose($txtalamat);

//write to jurusan 1 data
$txtjurusan1 = fopen("../tugas/data/jurusan1.txt","a");
fwrite($txtjurusan1, $jurusan1);
fwrite($txtjurusan1,"\n");
fclose($txtjurusan1);

//write to jurusan 2 data
$txtjurusan2 = fopen("../tugas/data/jurusan2.txt","a");
fwrite($txtjurusan2, $jurusan2);
fwrite($txtjurusan2,"\n");
fclose($txtjurusan2);

$message = "Berhasil di simpan";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script>location.href='/tugas/index.php';</script>";

?>


