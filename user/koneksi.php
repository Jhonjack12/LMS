<?php

$server     ="localhost";
$user       ="root";
$pass       ="";
$dbname     ="lms";

$db = mysqli_connect($server,$user,$pass,$dbname);

if(!$db){
    die('gagal melakukan koneksi ke database' . mysqli_connect_error());
}