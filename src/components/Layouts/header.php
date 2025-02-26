<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <title>Header</title>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-[#FFAB5B] p-3 fixed top-0 left-0 w-full z-50 flex justify-between lg:justify-between items-center">
        <!-- Logo -->
        <section class="flex items-center w-full">
            <img src="/web-sekolah/public/images/logo.png" alt="Ade High School" class="w-20">
            <h1 class="hidden lg:block text-4xl font-bold text-[#003092] w-full">Ade High School</h1>
        </section>

        <!-- Navigation Desktop -->
        <nav class="hidden lg:flex w-full justify-center space-x-6 text-xl text-white lg:items-center">
            <a href="/web-sekolah/index.php" class="hover:text-[#003092]">Home</a>
            <a href="/web-sekolah/src/pages/about.php" class="hover:text-[#003092]">About Us</a>
            <a href="/web-sekolah/src/pages/activities.php" class="hover:text-[#003092]">Activities</a>
            <a href="/web-sekolah/src/pages/news.php" class="hover:text-[#003092]">News</a>
            <a href="/web-sekolah/src/pages/contact.php" class="hover:text-[#003092]">Contact</a>
        </nav>
        
        <a href="/web-sekolah/src/pages/login.php" class="bg-[#003092] text-white px-5 py-2 rounded-lg hover:bg-[#FFAB5B] hidden xl:block">Login</a>
        <!-- Hamburger Menu (Mobile & Tablet) -->
        <button id="hamburger-menu" class="lg:hidden cursor-pointer">
            <i class="fa-solid fa-bars text-4xl text-[#003092]"></i>
        </button>

        <!-- Close Menu Button -->
        <button id="close-menu" class="lg:hidden hidden cursor-pointer">
            <i class="fa-solid fa-times text-4xl text-[#003092]"></i>
        </button>
    </header>

    <!-- Mobile Menu -->
    <nav id="menu" class="hidden absolute top-[96px] left-0 w-full bg-[#00879E] p-5 text-white">
        <ul class="flex flex-col gap-3 text-lg">
            <li><a href="/web-sekolah/index.php" class="hover:text-[#FFAB5B]">Home</a></li>
            <li><a href="/web-sekolah/src/pages/about.php" class="hover:text-[#FFAB5B]">About Us</a></li>
            <li><a href="/web-sekolah/src/pages/activities.php" class="hover:text-[#FFAB5B]">Activities</a></li>
            <li><a href="/web-sekolah/src/pages/news.php" class="hover:text-[#FFAB5B]">News</a></li>
            <li><a href="/web-sekolah/src/pages/contact.php" class="hover:text-[#FFAB5B]">Contact</a></li>
            <li><a href="/web-sekolah/src/pages/login.php" class="bg-[#FFAB5B] text-[#003092] py-2 text-center block rounded-lg">Login</a></li>
        </ul>
    </nav>
</body>
</html>