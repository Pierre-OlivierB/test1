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
// $dbhost = 'localhost';
// $dbname = 'hr';
// $dbuser = 'root';
// $dbpass = '';
// $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT => true));

// $sql =  'SELECT name, color, calories FROM fruit ORDER BY name';
// foreach  ($conn->query($sql) as $row) {
//     print $row['name'] . "\t";
//     print  $row['color'] . "\t";
//     print $row['calories'] . "\n";
// }

try {
    $dbhost = 'localhost';
    $dbname='dragon';
    $dbuser = 'root';
    $dbpass = '';
    $connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    }catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "
    ";
    die();
    }
    /* Execute a prepared statement by passing an array of values */
    $sql = 'SELECT Dragon, Sexe FROM dragons2
            WHERE Sexe = :sex';
    $sth = $connec->prepare($sql);
    $sth->execute(array(':sex' => 'F'));
    $c = $sth->fetchAll();
    print_r($c);
?>