<?php 
include('config.php');

$url = $_GET['u'];
$rastgele_id = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY_Z123456789"), 0, 56);
$rastgele_id1 = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY_Z123456789"), 0, 56);
$rastgele_id2 = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY_Z123456789"), 0, 56);
$rastgele_id3 = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY_Z123456789"), 0, 56);
$upn = ''.$rastgele_id.'-'.$rastgele_id1.'-'.$rastgele_id2.'-'.$rastgele_id3.'';

$full_url = 'https://sh-cdn-fram.herokuapp.com/ls/click?upn='.$upn.'';
$short_img = 'https://sh-cdn-fram.herokuapp.com/ls/clic?upn='.$upn.'';
mysqli_query($con,"INSERT INTO link (upn,location,full_url,click) VALUES ('$upn','$url','$full_url','0')");

$data = stripslashes(json_encode(array('url' => $full_url, 'upn' => $upn,'short_img' => $short_img, 'shortten_url' => $url)));
echo $data;
 ?>