<?php 

$hot = "localhost";
$ka = "root";
$sifre = "";
$veritabanı = "adminpanel";

$baglanti = mysqli_connect($hot,$ka,$sifre,$veritabanı);

if(mysqli_connect_errno()){
	echo "Mysql baglantisi bassarisiz".mysqli_connect_errno();
}

?>
