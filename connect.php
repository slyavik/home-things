<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'bdthings';

$conn = mysqli_connect($servername, $username, $password,$database);

if (!$conn) {
    die ("Connection failed: ". mysqli_connect_error()  );
}

//echo "Connected successful";


/**
 * Created by PhpStorm.
 * User: Yaroslaw
 * Date: 26.08.2019
 * Time: 20:24
 */