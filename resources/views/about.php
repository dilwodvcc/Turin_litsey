<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body>
<div>

    <section class="relative h-screen bg-gray-100 flex items-center justify-center">
        <!-- Slayder Konteyneri -->
        <div class="slider relative h-[60%] w-[90%] overflow-hidden">
            <!-- Slayder Rasmlar Kartalari -->
            <div class="slides flex h-full transition-transform duration-500 ease-in-out">
                <!-- Slayd 1 -->
                <div class="flex flex-shrink-0 w-full justify-around">
                    <div class="relative w-[70%] h-[100%] bg-white rounded-lg shadow-lg flex items-center justify-center overflow-hidden">
                        <img src="https://travelshelper.com/wp-content/uploads/2021/11/Cambridge-Travel-Guide-Travel-S-Helper.jpg" class="w-full h-full object-cover" alt="Cambridge Travel">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-2xl font-bold">Cambridge Travel</h2>
                                <p class="text-sm mt-2">Discover a beautiful city filled with history and culture.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slayd 2 -->
                <div class="flex flex-shrink-0 w-full justify-around">
                    <div class="relative w-[70%] h-[100%] bg-white rounded-lg shadow-lg flex items-center justify-center overflow-hidden">
                        <img src="https://i.pinimg.com/736x/79/6a/80/796a80a9cce81fcc618b2405e050b54c.jpg" class="w-full h-full object-cover" alt="Beautiful Nature">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-2xl font-bold">Beautiful Nature</h2>
                                <p class="text-sm mt-2">Connect with nature in serene and picturesque surroundings.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slayd 3 -->
                <div class="flex flex-shrink-0 w-full justify-around">
                    <div class="relative w-[70%] h-[100%] bg-white rounded-lg shadow-lg flex items-center justify-center overflow-hidden">
                        <img src="https://wallpaperaccess.com/full/317501.jpg" class="w-full h-full object-cover" alt="Mountain Retreat">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-2xl font-bold">Mountain Retreat</h2>
                                <p class="text-sm mt-2">Escape to the tranquility of the mountains.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slayd 4 -->
                <div class="flex flex-shrink-0 w-full justify-around">
                    <div class="relative w-[70%] h-[100%] bg-white rounded-lg shadow-lg flex items-center justify-center overflow-hidden">
                        <img src="https://cdn1.ozone.ru/s3/multimedia-6/6325084110.jpg" class="w-full h-full object-cover" alt="Modern Cityscape">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-2xl font-bold">Modern Cityscape</h2>
                                <p class="text-sm mt-2">Experience the vibrant energy of a modern city.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tugmalar -->
            <div class="absolute inset-0 flex items-center justify-between px-4 z-20">
                <button id="prev" class="text-white bg-black rounded-full p-3 shadow-lg hover:bg-gray-800 text-2xl">
                    &#8249;
                </button>
                <button id="next" class="text-white bg-black rounded-full p-3 shadow-lg hover:bg-gray-800 text-2xl">
                    &#8250;
                </button>
            </div>
        </div>
    </section>

    <style>
        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .slides > div {
            flex: 0 0 100%; /* Har bir slayd butun kenglikni egallaydi */
        }
    </style>

    <script>
        const slides = document.querySelector('.slides');
        const images = document.querySelectorAll('.slides > div');
        let index = 0;

        function showNextSlide() {
            index++;
            if (index >= images.length) index = 0;
            slides.style.transform = `translateX(-${index * 100}%)`;
        }

        function showPrevSlide() {
            index--;
            if (index < 0) index = images.length - 1;
            slides.style.transform = `translateX(-${index * 100}%)`;
        }

        // Avtomatik slayder
        const interval = setInterval(showNextSlide, 4000);

        // Tugmalar
        document.getElementById('next').addEventListener('click', () => {
            clearInterval(interval);
            showNextSlide();
        });

        document.getElementById('prev').addEventListener('click', () => {
            clearInterval(interval);
            showPrevSlide();
        });
    </script>

</div>


</body>
</html>
