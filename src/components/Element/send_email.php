<?php
require __DIR__ . '/../../../conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["pesan"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /web-sekolah/src/pages/contact.php?error=invalid_email");
        exit();
    }

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO pesan_kontak (nama, email, pesan) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $name, $email, $message);
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            header("Location: /web-sekolah/src/pages/contact.php?success=true");
            exit();
        } else {
            header("Location: /web-sekolah/src/pages/contact.php?error=insert_failed");
            exit();
        }
    } else {
        header("Location: /web-sekolah/src/pages/contact.php?error=db_error");
        exit();
    }
}
