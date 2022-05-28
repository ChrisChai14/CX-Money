<?php
// $host='localhost';
// $dbuser='root';
// $dbpassword = '';
// $dbname='m';
// $con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
// if($con){
//     mysqli_query($con,'SET NAMES utf8');
// }
// else {
//     echo "不正確連接資料庫</br>" . mysqli_connect_error();
// }
$options = [
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
];

//資料庫連線
try {
    $PDO = new PDO('mysql:host=localhost;port=3306;dbname=m', 'root', '', $options);
    $PDO->exec('SET CHARACTER SET utf8mb4');
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

?>