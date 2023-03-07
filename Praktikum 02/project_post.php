<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "arbitio" && $password == "bagas123"|| $username == "admin" && $password == "admin"){
    echo "Login berhasil";

} else {
    echo "Login gagal";
}
