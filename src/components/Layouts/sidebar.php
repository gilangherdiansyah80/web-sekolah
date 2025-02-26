<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<aside class="w-64 bg-blue-900 text-white min-h-screen p-5 hidden md:block fixed md:relative">
        <h2 class="text-2xl font-bold mb-6 text-center">Dashboard</h2>
        <img src="/web-sekolah/public/images/logo.png" alt="Ade High School">
        <ul>
            <li class="mb-3">
                <a href="/web-sekolah/src/pages/dashboard.php" class="block bg-blue-700 p-3 rounded hover:bg-blue-600">🏠 Dashboard</a>
            </li>
            <li class="mb-3">
                <a href="/web-sekolah/src/pages/message.php" class="block bg-blue-700 p-3 rounded hover:bg-blue-600">📩 Melihat Pesan</a>
            </li>
            <li class="mb-3">
                <a href="/web-sekolah/src/pages/show-news.php" class="block bg-blue-700 p-3 rounded hover:bg-blue-600">📰 CRUD Berita</a>
            </li>
            <li>
                <a href="/web-sekolah/logout.php" class="block bg-red-600 p-3 rounded hover:bg-red-500 mt-5">🚪 Logout</a>
            </li>
        </ul>
    </aside>
</body>
</html>