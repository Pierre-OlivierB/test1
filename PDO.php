<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname, $username, $password);
// // set the PDO error mode to exception
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// try {
//     $dbhost = 'localhost';
//     $dbuser = 'root'; // Erreur dans le nom de l'utilisateur
//     $dbpass = '';
//     $dbname = 'myDataBase';
//     $conn = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
// }catch (PDOException $e){
//     echo "Error!: " . $e->getMessage() . "";
//     die();
//  }
// 
$dbhost = 'localhost';
$dbname = 'hr';
$dbuser = 'root';
$dbpass = '';
$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT => true));


?>