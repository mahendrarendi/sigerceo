<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "n1573022_user_sigercep";
$password = "DB@Password";
$database = "n1573022_sigercep";

// koneksi database
$mysqli = new mysqli($server, $username, $password, $database);

// cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}
?>