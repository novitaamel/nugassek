<?php
// Simulasi daftar email yang sudah terdaftar (seharusnya dari database)
$registeredEmails = ['test@example.com', 'user@gmail.com'];

// Ambil data POST dari form
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$konfirmasi = $_POST['konfirmasi'] ?? '';

// Fungsi redirect dengan pesan error/sukses
function redirectWithMessage($msg, $type = 'error') {
    header("Location: daftar.html?msg=" . urlencode($msg) . "&type=$type");
    exit;
}

// Validasi password dan konfirmasi
if ($password !== $konfirmasi) {
    redirectWithMessage('Password tidak sesuai');
}

// Cek email sudah terdaftar
if (in_array(strtolower($email), $registeredEmails)) {
    redirectWithMessage('Email sudah terdaftar');
}

// Simulasi simpan data ke database atau file
// (Tambahkan kode simpan database di sini jika ada)

// Kalau berhasil
redirectWithMessage('Anda berhasil daftar, silahkan login', 'success');
