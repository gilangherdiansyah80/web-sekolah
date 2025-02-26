<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".src/assets/css/output.css">
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <header class="bg-[#FFAB5B] p-3 fixed top-0 left-0 w-full z-50">
        <section class="flex justify-between items-center">
            <img src="./public/images/logo.png" alt="ade high school" class="w-20">

            <!-- Hamburger Menu -->
            <section class="block lg:hidden">
                <button id="hamburger-menu" class="cursor-pointer">
                    <i class="fa-solid fa-bars text-4xl text-[#003092]"></i>
                </button>

                <button id="close-menu" class="hidden cursor-pointer">
                    <i class="fa-solid fa-times text-4xl text-[#003092]"></i>
                </button>
            </section>
        </section>

        <!-- Navigation -->
        <nav id="menu" class="hidden ">
            <ul class="text-white p-4 flex flex-col gap-y-3 text-xl bg-[#00879E] rounded-xl">
                <li><a href="#" class="hover:text-[#FFAB5B]">Home</a></li>
                <li><a href="#" class="hover:text-[#FFAB5B]">About Us</a></li>
                <li><a href="#" class="hover:text-[#FFAB5B]">Activities</a></li>
                <li><a href="#" class="hover:text-[#FFAB5B]">News</a></li>
                <li><a href="#" class="hover:text-[#FFAB5B]">Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>