<?php

$host= 'localhost';
$userName = 'root';
$password = '';
$dbName = 'simpleRegister';

$conn = mysqli_connect($host,$userName,$password,$dbName);
if(!$conn){
    echo "error in connection";
}