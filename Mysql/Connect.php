
<?php

require 'Config.php';

// $username = "root";
// $password = "1997";
// $servername = "localhost";
// $dbname = "projectbc";

$dbcon = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($dbcon,"utf8");


?>