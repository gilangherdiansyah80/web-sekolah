<?php
require __DIR__ . '/../../../conection.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: /web-sekolah/src/pages/show-news.php");
exit();
?>
