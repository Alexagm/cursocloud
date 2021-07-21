<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'cloudcomp';

$conn = mysqli_connect(
    $host,
    $user,
    $pass,
    $bd,
);



?>