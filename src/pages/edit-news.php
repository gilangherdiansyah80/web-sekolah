<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: /web-sekolah/src/pages/login.php");
    exit();
}

// Pastikan nilai default jika session tidak ditemukan
$name = isset($_SESSION["name"]) ? $_SESSION["name"] : "Pengguna";
$role = isset($_SESSION["role"]) ? $_SESSION["role"] : "Tidak Diketahui";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/web-sekolah/src/components/Layouts/sidebar.php'; ?>

    <!-- Konten Utama -->
    <main class="flex-1 p-10 ml-0 md:ml-64 transition-all">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/web-sekolah/src/components/Element/EditNews.php'; ?>
    </main>

    <!-- Script untuk Sidebar -->
    <script>
        document.getElementById("menuBtn").addEventListener("click", function() {
            let sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("hidden");
        });
    </script>

</body>
</html>
