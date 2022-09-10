<?php

$con = mysqli_connect("mysql-87820-0.cloudclusters.net","link","link","link","12026");

$upn = $_GET['upn'];
$sorgu = mysqli_query($con,"SELECT * FROM link WHERE upn='".$upn."'");
$sonuc = mysqli_fetch_assoc($sorgu);
$sonucupn = $sonuc['upn'];
$url = $sonuc['location'];
$click = $sonuc['click'];
if (empty($sonucupn)) {
	echo 'Oops, Something Went Wrong.';
}else{
$newclick = 0 + 1;
mysqli_query($con,"UPDATE link SET click='imgclick".$newclick."' WHERE upn='".$upn."'");
header("Location: $url");

}

?>
