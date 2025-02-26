<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
</head>
<body>
    <main class="p-3 lg:self-center lg:w-3/5">
        <h1 class="text-3xl font-bold text-[#003092] md:text-6xl mb-5">Berita Terbaru</h1>
        <div id="news-list" class="grid gap-4"></div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", async function () {
            const newsList = document.getElementById("news-list");

            try {
                // Fetch data dari API PHP
                const response = await fetch("/web-sekolah/src/api/get-news.php");
                const newsData = await response.json();

                // Jika data ada
                if (newsData.length > 0) {
                    newsData.forEach(news => {
                        const newsItem = document.createElement("div");
                        newsItem.className = "bg-white p-4 rounded-lg shadow-md cursor-pointer hover:bg-blue-50";
                        newsItem.innerHTML = `
                            <h2 class="text-xl md:text-2xl font-semibold text-gray-800">${news.title}</h2>
                            <p class="text-gray-600 md:text-xl">${news.summary}</p>
                        `;
                        newsItem.addEventListener("click", () => {
                            localStorage.setItem("selectedNews", JSON.stringify(news));
                            window.location.href = "/web-sekolah/src/pages/detail-news.php";
                        });
                        newsList.appendChild(newsItem);
                    });
                } else {
                    newsList.innerHTML = "<p class='text-gray-600'>Belum ada berita.</p>";
                }
            } catch (error) {
                console.error("Gagal mengambil berita:", error);
                newsList.innerHTML = "<p class='text-red-600'>Gagal mengambil data berita.</p>";
            }
        });
    </script>
</body>
</html>
