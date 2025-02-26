<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: /web-sekolah/src/pages/login.php");
    exit();
}

require __DIR__ . '/../../../conection.php';

// Ambil data berita
$sql = "SELECT id, title, summary, created_at FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Dashboard Berita</h1>
        <a href="/web-sekolah/src/pages/add-news.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Tambah Berita</a>
        
        <div class="overflow-x-auto mt-4">
            <table class="w-full border-collapse border border-gray-300 bg-white shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Judul</th>
                        <th class="border border-gray-300 px-4 py-2">Ringkasan</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) : 
                        $no = 1;
                        while ($row = $result->fetch_assoc()) : ?>
                        <tr class="border border-gray-300">
                            <td class="px-4 py-2 text-center"><?= $no++; ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($row["title"]); ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($row["summary"]); ?></td>
                            <td class="px-4 py-2 text-center"><?= date("d M Y", strtotime($row["created_at"])); ?></td>
                            <td class="px-4 py-2 text-center">
                                <a href="/web-sekolah/src/pages/edit-news.php?id=<?= $row["id"]; ?>" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md">Edit</a>
                                <a href="/web-sekolah/src/components/Element/DeleteNews.php?id=<?= $row["id"]; ?>" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; else : ?>
                        <tr><td colspan="5" class="text-center px-4 py-2">Belum ada berita</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
