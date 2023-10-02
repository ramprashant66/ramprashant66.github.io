<?php

$email = $_POST["email"];

$host = "localhost";
$dbname = "Users";
$username = "root";
$password = "9023610Hades!";

$conn = mysqli_connect(hostname: $host,
                        username: $username,
                        password: $password,
                        database: $dbname);

if(mysqli_connect_err())
{
    die("Connection error: " .mysqli_connect_err());
}



