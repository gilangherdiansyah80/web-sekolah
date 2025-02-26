<?php
header("Content-Type: application/json");

// Koneksi ke database
require __DIR__ . '/../../conection.php';

// Ambil data berita dari tabel `news`
$sql = "SELECT id, title, summary, content FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);

$news = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
}

// Tutup koneksi
$conn->close();

// Kembalikan data dalam format JSON
echo json_encode($news);
?>
