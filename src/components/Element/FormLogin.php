<?php
session_start();
require __DIR__ . '/../../../conection.php';

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk mencari user berdasarkan username
    $sql = "SELECT id, name, role, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Perbandingan langsung tanpa hashing
        if ($password === $user["password"]) {
            $_SESSION["user_id"] = $user["id"];  // ✅ Pastikan sesuai dengan yang dicek di dashboard.php
            $_SESSION["name"] = $user["name"];
            $_SESSION["role"] = $user["role"];

            echo "<script>
                    alert('Login berhasil!');
                    window.location.href = '/web-sekolah/src/pages/dashboard.php';
                  </script>";
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Web Sekolah</title>
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
</head>
<body>

<div class="bg-[#003092] p-8 rounded-xl text-xl md:text-2xl shadow-lg w-full">
    <h2 class="text-2xl font-bold text-center mb-4 text-[#FFF2DB] md:text-6xl">Login</h2>
    <?php if ($error): ?>
        <p class="text-red-500 text-sm mb-4"><?= $error ?></p>
    <?php endif; ?>
    
    <form action="/web-sekolah/src/pages/login.php" method="POST">
        <div class="mb-4 flex flex-col gap-y-3">
            <label class="block text-[#FFF2DB]">Username</label>
            <input type="text" name="username" class="w-full p-3 border rounded-xl text-xl md:text-2xl border-white" required>
        </div>
        <div class="mb-4 flex flex-col gap-y-3">
            <label class="block text-[#FFF2DB]">Password</label>
            <input type="password" name="password" class="w-full p-3 border border-white rounded-xl text-xl md:text-2xl" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-xl text-xl md:text-2xl hover:bg-blue-600">
            Login
        </button>
    </form>
</div>

</body>
</html>
