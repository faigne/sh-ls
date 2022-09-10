<?php
error_reporting(0);
include('antibot.php');
include('config.php');

$upn = $_GET['upn'];
$sorgu = mysqli_query($con,"SELECT * FROM link WHERE upn='".$upn."'");
$sonuc = mysqli_fetch_assoc($sorgu);
$sonucupn = $sonuc['upn'];
$url = $sonuc['location'];
$click = $sonuc['click'];
if (empty($sonucupn)) {
	echo 'Oops, Something Went Wrong.';
}else{
$newclick = $click + 1;
mysqli_query($con,"UPDATE link SET click='".$newclick."' WHERE upn='".$upn."'");


echo('<script>window.location="'.$url.'";</script>');
}
?>