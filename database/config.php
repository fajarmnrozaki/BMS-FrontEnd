<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $database = 'monitoring';

$host = '192.168.18.19';
$user = 'itbdelabo';
$pass = 'delabo0220';
$database = 'monitoring';

$connect = mysqli_connect($host, $user, $pass, $database);

if (!$connect) {
    echo "connection to MySQL is failed....";
}

?>