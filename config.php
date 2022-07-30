<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pesbuk";

try {
    //create PDO conn
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOExpception $e) {
    //show error
    die("Terjadi Masalah: ". $e->getMessage());
}

?>