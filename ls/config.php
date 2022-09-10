<?php
$con = mysqli_connect("mysql-87820-0.cloudclusters.net","link","link","link","12026"); ////Sunucu Adresi,Veritabanı Kullanıcı Adı,Veritabanı Şifresi,Veritabanı İsmi////
mysqli_set_charset($con, "utf8");
/*
function SqlInsert($username, $no){
try {
     $dbPDO = new PDO("mysql:host=localhost;dbname=sa", "sa", "sa");
} catch ( PDOException $e ){
     print $e->getMessage();
}	
$data = [
    'username' => $username,
    'no' => $no,
    'submit' => "no",
];
$sql = "INSERT INTO numara (username, no, submit) VALUES (:username, :no, :submit)";
$stmt= $dbPDO->prepare($sql);
$stmt->execute($data);
}
*/

?>

