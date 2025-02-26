<?php
session_start();
require __DIR__ . '/../../conection.php';

// Cek apakah user sudah login
if (!isset($_SESSION["user_id"])) {
    header("Location: /web-sekolah/src/pages/login.php");
    exit();
}

// Query untuk mengambil semua pesan
$query = "SELECT * FROM pesan_kontak ORDER BY id DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesan</title>
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/web-sekolah/src/components/Layouts/sidebar.php'; ?>

    <!-- Konten Utama -->
    <main class="flex-1 p-10 ml-0 md:ml-64 transition-all">
        <h2 class="text-2xl font-bold mb-4">📩 Daftar Pesan</h2>

        <!-- Tabel Pesan -->
        <div class="overflow-x-auto bg-white p-6 rounded-lg shadow-md">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="border p-3">#</th>
                        <th class="border p-3">Nama</th>
                        <th class="border p-3">Email</th>
                        <th class="border p-3">Pesan</th>
                        <th class="border p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="border hover:bg-gray-100">
                                <td class="border p-3"><?= $row['id']; ?></td>
                                <td class="border p-3"><?= htmlspecialchars($row['nama']); ?></td>
                                <td class="border p-3"><?= htmlspecialchars($row['email']); ?></td>
                                <td class="border p-3"><?= htmlspecialchars($row['pesan']); ?></td>
                                <td class="border p-3">
                                    <form action="/web-sekolah/src/components/Element/hapus_pesan.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                        <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="border p-3 text-center">Tidak ada pesan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
