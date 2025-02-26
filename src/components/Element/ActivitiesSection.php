<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Section</title>
</head>
<body>
    <main class="p-3 flex flex-col gap-y-3 lg:w-3/5 lg:self-center">
        <h1 class="text-4xl font-bold text-[#003092]">Activities</h1>

        <!-- Ekstrakurikuler -->
        <section class="flex flex-col gap-y-3">
            <section class="flex flex-col gap-y-1">
                <div class="flex justify-between items-center" id="show-card">
                    <h2 class="text-xl font-semibold md:text-2xl">Ekstrakurikuler</h2>

                    <section>
                        <i class="fa-solid fa-chevron-up text-xl" id="arrow-up"></i>
                        <i class="fa-solid fa-chevron-down text-xl" id="arrow-down" hidden></i>
                    </section>
                </div>
                <hr class="w-96 self-center md:w-full">
            </section>
            <ul hidden id="list-card" class="flex flex-col gap-y-3 md:grid md:grid-cols-2 md:gap-5 lg:grid-cols-3">
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Klub Sains dan Teknologi" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Klub Sains dan Teknologi</h3>
                        <p class="text-xl text-gray-300">Mengembangkan keterampilan penelitian, eksperimen, dan inovasi teknologi.</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Klub Seni dan Musik" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Klub Seni dan Musik</h3>
                        <p class="text-xl text-gray-300">Wadah bagi siswa yang tertarik dalam seni lukis, teater, tari, dan musik.</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Klub Olahraga (Futsal, Basket, Badminton)" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Klub Olahraga (Futsal, Basket, Badminton)</h3>
                        <p class="text-xl text-gray-300">Meningkatkan keterampilan olahraga dan membangun kerja sama tim.</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Klub Jurnalistik dan Fotografi" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Klub Jurnalistik dan Fotografi</h3>
                        <p class="text-xl text-gray-300">Melatih kemampuan menulis berita, wawancara, serta dokumentasi visual.</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Klub Koding dan Robotika" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Klub Koding dan Robotika</h3>
                        <p class="text-xl text-gray-300">Mengasah keterampilan pemrograman, pengembangan aplikasi, dan robotika.</p>
                    </article>
                </li>
            </ul>
        </section>

        <!-- Olimpiade -->
        <section class="flex flex-col gap-y-3">
            <section class="flex flex-col gap-y-1">
                <div class="flex justify-between items-center" id="show-card">
                    <h2 class="text-xl font-semibold md:text-2xl">Olimpiade</h2>

                    <section>
                        <i class="fa-solid fa-chevron-up text-xl" id="arrow-up"></i>
                        <i class="fa-solid fa-chevron-down text-xl" id="arrow-down" hidden></i>
                    </section>
                </div>
                <hr class="w-96 self-center md:w-full">
            </section>
            
            <!-- list Card -->
            <ul hidden id="list-card" class="flex flex-col gap-y-3 md:grid md:grid-cols-2 md:gap-5 lg:grid-cols-3">
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Olimpiade Sains dan Matematika" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Olimpiade Sains dan Matematika</h3>
                        <p class="text-xl text-gray-300">Ajang kompetisi untuk menguji kemampuan siswa dalam bidang sains dan matematika.</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Kompetisi Debat Bahasa Inggris" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Kompetisi Debat Bahasa Inggris</h3>
                        <p class="text-xl text-gray-300">Mengasah keterampilan berargumentasi dan berbicara dalam bahasa Inggris.</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Program Bimbingan Belajar dan Konseling" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Program Bimbingan Belajar dan Konseling</h3>
                        <p class="text-xl text-gray-300">Membantu siswa memahami pelajaran dan mengatasi masalah akademik.</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Kegiatan Sosial dan Lingkungan" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Kegiatan Sosial dan Lingkungan</h3>
                        <p class="text-xl text-gray-300">Mengajak siswa berpartisipasi dalam aksi sosial dan peduli lingkungan.</p>
                    </article>
                </li>
            </ul>
        </section>

        <!-- Pentas Seni -->
        <section class="flex flex-col gap-y-3">
            <section class="flex flex-col gap-y-1">
                <div class="flex justify-between items-center" id="show-card">
                    <h2 class="text-xl font-semibold md:text-2xl">Pentas Seni</h2>

                    <section>
                        <i class="fa-solid fa-chevron-up text-xl" id="arrow-up"></i>
                        <i class="fa-solid fa-chevron-down text-xl" id="arrow-down" hidden></i>
                    </section>
                </div>
                <hr class="w-96 self-center md:w-full">
            </section>

            <!-- List Card -->
            <ul hidden id="list-card" class="flex flex-col gap-y-3 md:grid md:grid-cols-2 md:gap-5 lg:grid-cols-3">
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Pentas Seni dan Budaya" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Pentas Seni dan Budaya</h3>
                        <p class="text-xl text-gray-300">Menampilkan kreativitas siswa dalam seni, tari, dan pertunjukan budaya.</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Hari Ulang Tahun Sekolah" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Hari Ulang Tahun Sekolah</h3>
                        <p class="text-xl text-gray-300">Perayaan tahunan dengan berbagai acara untuk memperingati hari berdirinya sekolah..</p>
                    </article>
                </li>
                <li class="flex flex-col bg-[#00879E] rounded-xl">
                    <img src="/web-sekolah/public/images/sains.jpg" alt="Wisuda dan Perpisahan" class="rounded-t-xl">
                    <article class="p-3">
                        <h3 class="text-2xl font-semibold text-[#FFAB5B]">Wisuda dan Perpisahan</h3>
                        <p class="text-xl text-gray-300">Acara seremonial bagi siswa yang telah menyelesaikan jenjang pendidikan mereka.</p>
                    </article>
                </li>
            </ul>
        </section>
    </main>

    <script src="/web-sekolah/src/assets/javascript/index.js"></script>
</body>
</html>