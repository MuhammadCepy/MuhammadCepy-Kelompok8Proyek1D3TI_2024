<?php
// Aktifkan pelaporan kesalahan
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Konfigurasi database
$servername = "localhost";
$username = "username"; // Ganti dengan username database Anda
$password = "password"; // Ganti dengan password database Anda
$dbname = "siswa"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil nilai dari formulir HTML
$nip = $_POST['NIP'];
$nama = $_POST['Nama'];
$tanggal_lahir = $_POST['birthDate'];
$jenis_kelamin = $_POST['gender'];
$password = $_POST['password'];

// Menyimpan data ke database
$sql = "INSERT INTO profil_guru (nip, nama, tanggal_lahir, jenis_kelamin, password)
VALUES ('$nip', '$nama', '$tanggal_lahir', '$jenis_kelamin', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke login_pengajar.html
    header("Location: login_pengajar.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>
