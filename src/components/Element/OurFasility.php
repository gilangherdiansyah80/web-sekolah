<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facility Slider</title>
    <link rel="stylesheet" href="/web-sekolah/src/assets/css/output.css">
</head>
<body class="bg-gray-100">

    <div class="relative w-full flex justify-center md:mt-10">
        <section class="overflow-hidden w-full max-w-5xl flex flex-col gap-y-5">
            <!-- Title Section -->
            <section class="flex flex-col gap-y-2 p-3 text-center">
                <p class="text-gray-400 text-lg md:text-xl uppercase">Facilities</p>
                <h1 class="text-3xl md:text-6xl font-bold text-[#003092]">Our Facilities</h1>
            </section>

            <!-- Slider Container -->
            <div class="relative w-full overflow-hidden">
                <div id="slider" class="flex transition-transform duration-1000 ease-in-out">
                    <div class="min-w-full relative" data-index="0">
                        <img class="w-full h-[300px] md:h-[500px] object-cover brightness-75" src="/web-sekolah/public/images/perpus.jpg" alt="Library">
                        <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10 text-white">
                            <h2 class="text-lg md:text-4xl font-bold">Modern Library with Extensive Collections</h2>
                            <p class="text-sm md:text-xl mt-1">Library Ade High School</p>
                        </div>
                    </div>
                    <div class="min-w-full relative" data-index="1">
                        <img class="w-full h-[300px] md:h-[500px] object-cover brightness-75" src="/web-sekolah/public/images/teater.jpg" alt="Theater">
                        <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10 text-white">
                            <h2 class="text-lg md:text-4xl font-bold">Spacious Auditorium & Theater Hall</h2>
                            <p class="text-sm md:text-xl mt-1">Theater Ade High School</p>
                        </div>
                    </div>
                    <div class="min-w-full relative" data-index="2">
                        <img class="w-full h-[300px] md:h-[500px] object-cover brightness-75" src="/web-sekolah/public/images/swimming.jpg" alt="Swimming Pool">
                        <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10 text-white">
                            <h2 class="text-lg md:text-4xl font-bold">Olympic-Standard Swimming Pool</h2>
                            <p class="text-sm md:text-xl mt-1">Swimming Pool Ade High School</p>
                        </div>
                    </div>
                    <div class="min-w-full relative" data-index="3">
                        <img class="w-full h-[300px] md:h-[500px] object-cover brightness-75" src="/web-sekolah/public/images/basketball.jpg" alt="Basketball Court">
                        <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10 text-white">
                            <h2 class="text-lg md:text-4xl font-bold">Indoor Basketball Court</h2>
                            <p class="text-sm md:text-xl mt-1">Basketball Court Ade High School</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="prev" class="absolute left-3 md:left-5 top-1/2 transform -translate-y-1/2 bg-black text-white sm:p-2 md:p-3 lg:p-4 rounded-full text-xl">
                    &#10094;
                </button>
                <button id="next" class="absolute right-3 md:right-5 top-1/2 transform -translate-y-1/2 bg-black text-white sm:p-2 md:p-3 lg:p-4 rounded-full text-xl">
                    &#10095;
                </button>
            </div>

            <!-- Dots Indicator -->
            <div class="flex gap-x-2 justify-center mt-5">
                <span class="dot w-2 h-1 md:w-4 bg-gray-400 transition-all duration-300"></span>
                <span class="dot w-2 h-1 md:w-4 bg-gray-400 transition-all duration-300"></span>
                <span class="dot w-2 h-1 md:w-4 bg-gray-400 transition-all duration-300"></span>
                <span class="dot w-2 h-1 md:w-4 bg-gray-400 transition-all duration-300"></span>
            </div>

            <!-- Project Details -->
            <section class="flex flex-col gap-y-3 p-2 text-center md:text-left">
                <h2 id="facility-title" class="text-lg md:text-4xl font-bold text-[#003092]">Modern Library with Extensive Collections</h2>
                <p id="facility-desc" class="text-gray-600 text-sm md:text-xl">A state-of-the-art library with a vast collection of books, digital resources, and comfortable reading spaces</p>
            </section>
        </section>
    </div>

    <script src="/web-sekolah/src/assets/javascript/index.js"></script>

</body>
</html>
