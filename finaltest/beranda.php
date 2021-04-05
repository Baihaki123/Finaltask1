<?php
session_start();
$session = $_SESSION['username'];
if (!$session) { // Jika belum login,tetapi maska ke halaman beranda
    header('Location: login.php'); // paksa ke halaman login
}
?>
<!DOCTYPE html>

<head>
    <title>Profil</title>
</head>

<body>
    <!-- Menampilkan isi session email -->
    <h3> Hallo Selamat Datang <?php echo $_SESSION['username']; ?> </h3>
    <a href="logout.php">Keluar</a>
</body>

</html>