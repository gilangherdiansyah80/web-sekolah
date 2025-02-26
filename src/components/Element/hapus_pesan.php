<?php
require __DIR__ . '/../../../conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = intval($_POST["id"]);

    $stmt = $conn->prepare("DELETE FROM pesan_kontak WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: /web-sekolah/src/pages/message.php?deleted=true");
    } else {
        header("Location: /web-sekolah/src/pages/message.php?error=true");
    }

    $stmt->close();
    $conn->close();
}
?>
