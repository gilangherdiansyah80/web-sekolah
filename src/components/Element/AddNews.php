<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: /web-sekolah/src/pages/login.php");
    exit();
}

require __DIR__ . '/../../../conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $summary = $_POST["summary"];
    $content = $_POST["content"];

    $sql = "INSERT INTO news (title, summary, content) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $summary, $content);

    if ($stmt->execute()) {
        header("Location: /web-sekolah/src/pages/show-news.php");
        exit();
    } else {
        $error = "Gagal menambahkan berita.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4">Tambah Berita</h1>
        <?php if (isset($error)) echo "<div class='text-red-500 mb-4'>$error</div>"; ?>
        <form method="POST">
            <div class="mb-4">
                <label class="block font-semibold">Judul</label>
                <input type="text" name="title" class="w-full border border-gray-300 p-2 rounded-md" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold">Ringkasan</label>
                <textarea name="summary" class="w-full border border-gray-300 p-2 rounded-md" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block font-semibold">Isi Berita</label>
                <textarea name="content" class="w-full border border-gray-300 p-2 rounded-md" rows="5" required></textarea>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Simpan</button>
                <a href="dashboard-news.php" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>