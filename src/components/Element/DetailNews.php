<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
</head>
<body>
    <main class="lg:self-center lg:w-3/5 p-3 rounded-lg shadow-md mt-10 mb-10">
        <button onclick="window.location.href = '/web-sekolah/src/pages/news.php';" class="text-[#00879E] mb-4 inline-block md:text-2xl cursor-pointer">← Kembali</button>
        <h1 id="news-title" class="text-3xl font-bold text-gray-800 md:text-6xl"></h1>
        <p id="news-content" class="text-gray-700 mt-4 md:text-xl"></p>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const news = JSON.parse(localStorage.getItem("selectedNews"));

            if (news) {
                document.getElementById("news-title").innerText = news.title;
                document.getElementById("news-content").innerText = news.content;
            } else {
                document.body.innerHTML = "<p class='text-red-600'>Berita tidak ditemukan.</p>";
            }
        });
    </script>
</body>
</html>
