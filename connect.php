<?php
function connectDB(){
    $servername = "localhost";
$username = "nguyenhuearmy";
$password = "armynguyen1996";
$dbname = "myDBPDO";
try{
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "tao ket noi thanh cong";
}
catch(PDOException $e){
    echo "ERROR ". $e->getMessage();
}
return $conn;
}
?>