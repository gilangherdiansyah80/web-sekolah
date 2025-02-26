<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
</head>
<body>
    <main class="p-3 rounded-lg shadow-lg lg:self-center lg:w-3/5">
        <h2 class="text-2xl font-bold text-[#003092] mb-4 md:text-6xl">Hubungi Kami</h2>
        <?php if (isset($_GET['success'])): ?>
            <p class="text-green-600 md:text-2xl">Pesan berhasil dikirim!</p>
        <?php elseif (isset($_GET['error'])): ?>
            <p class="text-red-600 md:text-2xl">Gagal mengirim pesan. Coba lagi!</p>
        <?php endif; ?>
        
        <form action="/web-sekolah/src/components/Element/send_email.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700 md:text-2xl">Nama</label>
                <input type="text" name="name" required class="w-full p-3 border border-gray-300 rounded-xl md:text-2xl">
            </div>
            <div>
                <label class="block text-gray-700 md:text-2xl">Email</label>
                <input type="email" name="email" required class="w-full p-3 border border-gray-300 rounded-xl md:text-2xl">
            </div>
            <div>
                <label class="block text-gray-700 md:text-2xl">Pesan</label>
                <textarea name="pesan" required class="w-full p-3 border border-gray-300 rounded-xl md:text-2xl"></textarea>
            </div>
            <button type="submit" class="w-full bg-[#00879E] text-white py-3 rounded-xl md:text-2xl hover:bg-[#FFAB5B]">Kirim</button>
        </form>
    </main>
</body>
</html>
