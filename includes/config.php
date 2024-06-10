<?php
// Konfigurasi Database
$host = 'localhost';
$dbname = 'tiketin';
$username = 'root';
$password = '';

// Membuat koneksi ke database
$mysqli = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($mysqli->connect_error) {
    die('Koneksi gagal: ' . $mysqli->connect_error);
}

// Contoh fungsi untuk mengeksekusi query dengan penanganan error
function executeQuery($mysqli, $query) {
    $result = $mysqli->query($query);
    if ($result === false) {
        die('Error: ' . $mysqli->error);
    }
    return $result;
}
?>
