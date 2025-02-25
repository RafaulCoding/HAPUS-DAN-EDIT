<?php

//variable
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'db_iventory_rafa_xi_pplg1';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if(!$conn){
    die('koneksi gagal' . mysqli_connect_error());
}