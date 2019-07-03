<?php
//init
$nama = $_POST['nama'];
$email = $_POST['email'];

//write to nama data
$txtnama = fopen("nama.txt","a");
fwrite($txtnama, $nama);
fwrite($txtnama,"\n");
fclose($txtnama);


//write to email data
$txtemail = fopen("email.txt","a");
fwrite($txtemail, $email);
fwrite($txtemail,"\n");
fclose($txtemail);

//read nama data
$shownama = file('nama.txt');
echo json_encode($shownama);

foreach($shownama as $readNama){
    $arraynama = explode("",$readNama);
}
// echo json_encode($arraynama);
for($i = 0; $i < count($arraynama); $i++){
    echo ($i);
}


?>