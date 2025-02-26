<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: /web-sekolah/src/pages/login.php");
    exit();
}

require __DIR__ . '/../../../conection.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $news = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $summary = $_POST["summary"];
    $content = $_POST["content"];
    $id = $_POST["id"];

    $stmt = $conn->prepare("UPDATE news SET title = ?, summary = ?, content = ? WHERE id = ?");
    $stmt->bind_param("sssi", $title, $summary, $content, $id);

    if ($stmt->execute()) {
        header("Location: /web-sekolah/src/pages/show-news.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-lg">
        <h1 class="text-2xl font-semibold mb-4">Edit Berita</h1>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $news["id"] ?>">
            <div class="mb-4">
                <label class="block text-gray-700">Judul</label>
                <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= htmlspecialchars($news["title"]) ?>" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Ringkasan</label>
                <textarea name="summary" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required><?= htmlspecialchars($news["summary"]) ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Isi Berita</label>
                <textarea name="content" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="5" required><?= htmlspecialchars($news["content"]) ?></textarea>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Update</button>
                <a href="dashboard-news.php" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>