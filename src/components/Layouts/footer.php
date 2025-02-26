<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
    <title>Footer</title>
</head>
<body>
    <footer class="bg-[#FFAB5B] flex flex-col gap-y-3">
        <div class="flex flex-col gap-y-3">
            <section class="flex gap-x-3 items-center">
                <img src="/web-sekolah/public/images/logo.png" alt="ade high school" class="w-20">
                <h1 class="text-2xl text-[#003092] font-bold">Ade High School</h1>
            </section>

            <hr class="w-96 self-center md:w-full" />

            <section class="p-3 flex flex-col gap-y-3">
                <h2 class="text-2xl font-semibold text-[#003092]">Our Menu</h2>
                <ul class="text-[#003092] flex flex-col gap-y-3 text-xl">
                    <li><a href="#" class="hover:text-[#00879E]">Home</a></li>
                    <li><a href="#" class="hover:text-[#00879E]">About Us</a></li>
                    <li><a href="#" class="hover:text-[#00879E]">Activities</a></li>
                    <li><a href="#" class="hover:text-[#00879E]">News</a></li>
                    <li><a href="#" class="hover:text-[#00879E]">Contact</a></li>
                </ul>
            </section>

            <hr class="w-96 self-center md:w-full" />

            <section class="p-3 flex flex-col gap-y-3">
                <h2 class="text-2xl font-semibold text-[#003092]">Our Contacts</h2>
                <ul class="text-[#003092] flex flex-col gap-y-3 text-xl">
                    <li>
                        <a href="#" class="hover:text-[#00879E] flex gap-x-2 items-center">
                            <i class="fa-brands fa-facebook text-2xl"></i>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-[#00879E] flex gap-x-2 items-center">
                            <i class="fa-brands fa-instagram text-2xl"></i>
                            <span>Instagram</span>
                        </a>
                    </li>
                </ul>
            </section>

            <section class="p-3">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.029660652436!2d107.61289967587561!3d-6.887050667393898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f8aa08188b%3A0x632d24e6061e8903!2sUniversitas%20Komputer%20Indonesia!5e0!3m2!1sen!2sid!4v1740588310875!5m2!1sen!2sid"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full rounded-xl h-52">
                </iframe>
            </section>
        </div>

        <section class="bg-[#003092] flex justify-center items-center p-3">
            <p class="text-center text-xl text-[#FFAB5B]">Copyright &copy; 2025 Ade High School</p>
        </section>
    </footer>
</body>
</html>