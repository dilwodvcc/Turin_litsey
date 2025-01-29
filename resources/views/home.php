<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turin Lyceum</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="/css/output.css">
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            rel="stylesheet"
    />
    <style>
        .slides2 {
            display: flex;
            gap: 24px;
            width: max-content; /* Har bir element joylashadi */
        }
        .slider2 {
            overflow: hidden; /* Faqat ko'rinadigan slaydlarni qoldiradi */
        }
        .slider2 .slides2 > div {
            flex-shrink: 0; /* Elementlar kichraymasligini ta'minlaydi */
            min-width: auto; /* Har bir slaydning minimal kengligi */
            max-width: 240px; /* Har bir slaydning maksimal kengligi */
        }
        .footer {
            background-color: #003366; /* Deep blue */
            color: white;
        }

        .footer i {
            margin-right: 8px; /* Icon va text o'rtasidagi joy */
        }

        .footer a:hover {
            color: #cfcfcf; /* Hover rang */
        }
    </style>

</head>
<body class="bg-gray-100">
<!-- Header -->
<header class="bg-gray-900 shadow mb-2 rounded  ">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <nav class="flex space-x-10 text-2xl">
        <a href="/" class="text-4xl font-bold text-gray-800"><img src="http://al-turin.uz/static/img/logo-white.png" width="230" alt="University Logo"></a>
            <a href="/home" class="text-white hover:text-green-600">Home</a>
            <a href="/about" class="text-white hover:text-green-600">About</a>
            <a href="/programs" class="text-white hover:text-green-600">Programs</a>
            <a href="/admissions" class="text-white hover:text-green-600">Admissions</a>
            <a href="/contact" class="text-white hover:text-green-600">Contact</a>
        </nav>
        <a href="/register" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Register</a>
    </div>
</header>

<div class="container mx-auto px-6 py-4 flex items-center justify-center mb-2 mt-4">
    <section class="relative  h-[30%] w-[100%]  bg-gray-100 flex items-center justify-center">
        <!-- Slayder Konteyneri -->
        <div class="relative slider2 h-96 w-full flex items-center justify-center">
            <!-- Slayder Rasmlar Kartalari -->
            <div class="slides flex h-screen transition-transform duration-500 ease-in-out">
                <!-- Slayd 1 -->
                <div class="flex flex-shrink-0 w-full justify-around">
                    <div class="relative w-[80%] h-[100%] bg-white rounded-lg shadow-lg flex items-center justify-center overflow-hidden">
                        <img src="http://al-turin.uz/media/images/title_Y2ga2pM.jpg" class="w-full h-full object-cover" alt="Cambridge Travel">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-3xl font-bold">Cambridge Travel</h2>
                                <p class="text-sm mt-2">Discover a beautiful city filled with history and culture.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slayd 2 -->
                <div class="flex flex-shrink-0 w-full justify-around">
                    <div class="relative w-[80%] h-[100%] bg-white rounded-lg shadow-lg flex items-center justify-center overflow-hidden">
                        <img src="http://al-turin.uz/media/images/view.jpg" class="w-full h-full object-cover" alt="Cambridge Travel">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-3xl font-bold">Cambridge Travel</h2>
                                <p class="text-sm mt-2">Discover a beautiful city filled with history and culture.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slayd 3 -->
                <div class="flex flex-shrink-0 w-full justify-around">
                    <div class="relative w-[80%] h-[100%] bg-white rounded-lg shadow-lg flex items-center justify-center overflow-hidden">
                        <img src="http://al-turin.uz/media/images/view_2_Z99Opzz.jpg" class="w-full h-full object-cover" alt="Cambridge Travel">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-3xl font-bold">Cambridge Travel</h2>
                                <p class="text-sm mt-2">Discover a beautiful city filled with history and culture.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slayd 4 -->
                <div class="flex flex-shrink-0 w-full justify-around">
                    <div class="relative w-[80%] h-[100%] bg-white rounded-lg shadow-lg flex items-center justify-center overflow-hidden">
                        <img src="https://avatars.mds.yandex.net/i?id=2d40286dc42abdc556a7ae3b8edc4117_l-10927571-images-thumbs&n=13" class="w-full h-full object-cover" alt="Cambridge Travel">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-3xl font-bold">Cambridge Travel</h2>
                                <p class="text-sm mt-2">Discover a beautiful city filled with history and culture.</p>
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

<section id="about" class="bg-gray-100 py-5">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-6">Biz haqimizda</h2>
            <p class="text-gray-600 text-lg mb-6">
                Turin Politexnika Universitetining Toshkent Akademik Litseyi – ta'lim, innovatsiya va rivojlanish markazi sifatida tanilgan o‘quv maskan. Bizning asosiy maqsadimiz o‘quvchilarga nafaqat bilim berish, balki ularni kelajakdagi muvaffaqiyatli hayotga tayyorlashdir.
            </p>
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Bizning Afzalliklarimiz</h3>
            <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                <li><strong>Professional o‘qituvchilar:</strong> Bizning litseyimizda o‘z sohasida yuqori malakaga ega bo‘lgan tajribali pedagoglar dars beradi.</li>
                <li><strong>Innovatsion metodikalar:</strong> Zamonaviy texnologiyalar va interaktiv ta'lim usullari yordamida o‘qitish amalga oshiriladi.</li>
                <li><strong>Amaliy o‘quv jarayoni:</strong> Nazariy bilimlarni real loyihalar va amaliy mashg‘ulotlar orqali mustahkamlash imkoniyati.</li>
                <li><strong>Global yondashuv:</strong> Talabalar xalqaro standartlarga mos bilim va ko‘nikmalar bilan ta'minlanadi.</li>
            </ul>
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Bizning Tariximiz</h3>
            <p class="text-gray-600 text-lg mb-6">
                2000-yilda tashkil etilganimizdan buyon litseyimiz yuzlab yetakchi mutaxassislarni tayyorlab berdi. Bugungi kunda biz global talablarga moslashgan holda ta'lim dasturlarimizni yangilashni davom ettirmoqdamiz.
            </p>
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Bizning Maqsadimiz</h3>
            <p class="text-gray-600 text-lg mb-6">
                Kelajak avlodni yetakchilikka tayyorlash va ularga ijodiy fikrlash, mas'uliyatli qaror qabul qilish, va ijtimoiy faollikni shakllantirish. Biz o‘quvchilarni har tomonlama rivojlantirish uchun qulay va xavfsiz muhit yaratamiz.
            </p>
        </div>
    </div>
</section>


<div class="container mx-auto px-6 py-10">
    <h2 class="text-4xl font-bold text-center text-green-600 mb-6">Jamoa</h2>
    <div class="relative slider2 h-96 w-full flex items-center justify-center">
        <div class="slider2 relative h-80 w-3/4 flex items-center ">
            <div class="slides2 flex gap-6 w-full h-full transition-transform duration-300">
                <!-- Har bir slayd -->
                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-green-200 rounded-lg shadow-md p-4 flex flex-col items-center justify-between w-60">
                    <div class="text-center">
                        <img src="https://avatars.mds.yandex.net/get-ydo/472106/2a00000174a0bab24e919b669269cf3e4838/diploma"
                             alt="Profil rasm"
                             class="w-24 h-24 rounded-full object-cover">
                    </div>
                    <div class="mt-4 bg-green-300 w-full text-center py-2 rounded">
                        <h1 class="text-lg font-semibold">Malumot</h1>
                        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2 text-sm">
                            <li><strong>Ismi :</strong> Abdulloh</li>
                            <li><strong>Familiya :</strong> Fazliddinov</li>
                            <li><strong>Yoshi :</strong> 17 yosh</li>
                            <li><strong>Jinsi :</strong> Erkak</li>
                            <li><strong>Dars beradigan fan :</strong> Algebra</li>
                        </ul>
                    </div>
                </div>


                <!-- Qo'shimcha slaydlarni shu yerga qo'shing -->

            </div>

            <!-- Tugmalar -->
            <button id="prev2" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-green-600 text-white p-2 rounded-full shadow-md">&#8249;</button>
            <button id="next2" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-green-600 text-white p-2 rounded-full shadow-md">&#8250;</button>
        </div>
    </div>
    <script>
        const slides2 = document.querySelector('.slides2');
        const slideWidth = slides2.children[0].offsetWidth + 50; // Har bir slayd kengligi + gap
        const prevButton2 = document.getElementById('prev2');
        const nextButton2 = document.getElementById('next2');
        let index2 = 0;

        // Slayder kengligini va ko'rinadigan slaydlar sonini hisoblash
        const updateSliderWidth = () => {
            const visibleSlides = Math.floor(document.querySelector('.slider2').clientWidth / slideWidth);
            const maxIndex = Math.max(0, slides2.children.length - visibleSlides);
            return { visibleSlides, maxIndex };
        };

        const showSlide2 = () => {
            const { maxIndex } = updateSliderWidth();
            index2 = Math.max(0, Math.min(index2, maxIndex)); // Indexni chegarada ushlab turish
            slides2.style.transform = `translateX(-${index2 * slideWidth}px)`;
        };

        // Keyingi slayd
        nextButton2.addEventListener('click', () => {
            const { maxIndex } = updateSliderWidth();
            if (index2 < maxIndex) {
                index2++;
                showSlide2();
            }
        });

        // Oldingi slayd
        prevButton2.addEventListener('click', () => {
            if (index2 > 0) {
                index2--;
                showSlide2();
            }
        });

        // Oyna hajmi o'zgarganda qayta hisoblash
        window.addEventListener('resize', () => {
            showSlide2();
        });

        // Slayderni yuklaganda boshlang'ich holatni to'g'rilash
        document.addEventListener('DOMContentLoaded', () => {
            showSlide2();
        });

    </script>
</div>

<!-- Student opinion -->
<div class="bg-gray-100 flex items-center justify-center  mt-5 mb-5">
<div class="container mx-auto p-4">
    <h1 class="text-center text-2xl font-bold text-green-700 mb-3">Talabalar fikrlar</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center justify-center">
        <!-- Fikr 1 -->
        <div class="flex items-center bg-white shadow-lg p-4 rounded-lg">
            <img
                    src="https://via.placeholder.com/50"
                    alt="Talaba rasmi"
                    class="w-12 h-12 rounded-full mr-4 border border-gray-300">
            <div>
                <p class="text-gray-800 font-semibold">Talaba Ismi</p>
                <p class="text-gray-600 text-sm">Bu yerga talabalar fikrini yozing...</p>
            </div>
        </div>

        <!-- Fikr 2 -->
        <div class="flex items-center bg-white shadow-lg p-4 rounded-lg">
            <img
                    src="https://via.placeholder.com/50"
                    alt="Talaba rasmi"
                    class="w-12 h-12 rounded-full mr-4 border border-gray-300">
            <div>
                <p class="text-gray-800 font-semibold">Talaba Ismi</p>
                <p class="text-gray-600 text-sm">Bu yerga talabalar fikrini yozing...</p>
            </div>
        </div>

        <!-- Fikr 3 -->
        <div class="flex items-center bg-white shadow-lg p-4 rounded-lg">
            <img
                    src="https://via.placeholder.com/50"
                    alt="Talaba rasmi"
                    class="w-12 h-12 rounded-full mr-4 border border-gray-300">
            <div>
                <p class="text-gray-800 font-semibold">Talaba Ismi</p>
                <p class="text-gray-600 text-sm">Bu yerga talabalar fikrini yozing...</p>
            </div>
        </div>

        <!-- Fikr 4 -->
        <div class="flex items-center bg-white shadow-lg p-4 rounded-lg">
            <img
                    src="https://via.placeholder.com/50"
                    alt="Talaba rasmi"
                    class="w-12 h-12 rounded-full mr-4 border border-gray-300">
            <div>
                <p class="text-gray-800 font-semibold">Talaba Ismi</p>
                <p class="text-gray-600 text-sm">Bu yerga talabalar fikrini yozing...</p>
            </div>
        </div>

        <!-- Fikr 1 -->
        <div class="flex items-center bg-white shadow-lg p-4 rounded-lg">
            <img
                    src="https://via.placeholder.com/50"
                    alt="Talaba rasmi"
                    class="w-12 h-12 rounded-full mr-4 border border-gray-300">
            <div>
                <p class="text-gray-800 font-semibold">Talaba Ismi</p>
                <p class="text-gray-600 text-sm">Bu yerga talabalar fikrini yozing...</p>
            </div>
        </div>

        <!-- Fikr 2 -->
        <div class="flex items-center bg-white shadow-lg p-4 rounded-lg">
            <img
                    src="https://via.placeholder.com/50"
                    alt="Talaba rasmi"
                    class="w-12 h-12 rounded-full mr-4 border border-gray-300">
            <div>
                <p class="text-gray-800 font-semibold">Talaba Ismi</p>
                <p class="text-gray-600 text-sm">Bu yerga talabalar fikrini yozing...</p>
            </div>
        </div>

        <!-- Fikr 3 -->
        <div class="flex items-center bg-white shadow-lg p-4 rounded-lg">
            <img
                    src="https://via.placeholder.com/50"
                    alt="Talaba rasmi"
                    class="w-12 h-12 rounded-full mr-4 border border-gray-300">
            <div>
                <p class="text-gray-800 font-semibold">Talaba Ismi</p>
                <p class="text-gray-600 text-sm">Bu yerga talabalar fikrini yozing...</p>
            </div>
        </div>

        <!-- Fikr 4 -->
        <div class="flex items-center bg-white shadow-lg p-4 rounded-lg">
            <img
                    src="https://via.placeholder.com/50"
                    alt="Talaba rasmi"
                    class="w-12 h-12 rounded-full mr-4 border border-gray-300">
            <div>
                <p class="text-gray-800 font-semibold">Talaba Ismi</p>
                <p class="text-gray-600 text-sm">Bu yerga talabalar fikrini yozing...</p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Connect -->
<div class="max-w-3xl w-full bg-white border border-gray-200 rounded-xl shadow-xl p-2 mx-auto mb-8">
    <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Savollar va Takliflar uchun Bog'lanish</h2>

    <form action="mailto:example@mail.com" method="POST" enctype="multipart/form-data">
        <div class="space-y-4">
            <!-- Ism va Familiya -->
            <div>
                <label for="name" class="block text-gray-700 font-semibold">Ism va Familiya</label>
                <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ismingiz va familiyangizni kiriting">
            </div>

            <!-- Telefon raqami -->
            <div>
                <label for="phone" class="block text-gray-700 font-semibold">Telefon Raqami</label>
                <input type="tel" id="phone" name="phone" required class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Telefon raqamingizni kiriting">
            </div>

            <!-- Savollar/Takliflar -->
            <div>
                <label for="message" class="block text-gray-700 font-semibold">Savol yoki Taklif</label>
                <textarea id="message" name="message" rows="4" required class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Savol yoki taklifingizni kiriting"></textarea>
            </div>

            <!-- Tugmalar -->
            <div class="flex justify-between items-center">
                <!-- Telefon qilish tugmasi -->
                <a href="tel:+1234567890" class="px-6 py-3 text-white bg-green-600 rounded-md hover:bg-green-700 w-1/3 text-center">Telefon</a>

                <!-- Yuborish tugmasi -->
                <button type="submit" class="px-6 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-700 w-1/3">Jonatish</button>
            </div>
        </div>
    </form>
</div>

<!-- Footer -->
<footer class="footer bg-gray-900 text-white py-6 mt-3">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
        <!-- Birinchi ustun -->
        <div>
            <h4 class="font-bold uppercase">Turin Polytechnic University in Tashkent</h4>
            <p class="mt-2">
                Sayt materiallaridan foydalanganda Akademicheskiy litseyning ruxsati bo'lishi kerak.
            </p>
            <p class="mt-2">&copy;2025 Barcha huquqlar himoyalangan.</p>
        </div>

        <!-- Ikkinchi ustun -->
        <div>
            <h4 class="font-bold uppercase">Aloqa ma'lumotlari</h4>
            <ul class="mt-2 space-y-1">
                <li><i class="fas fa-map-marker-alt"></i> Toshkent sh., ko'ch. Umid 1a</li>
                <li><i class="fas fa-phone"></i> +998 71 246 23 31</li>
                <li><i class="fas fa-fax"></i> +998 71 246 55 82</li>
                <li><i class="fas fa-envelope"></i><a href="/https://turin.uz/">turlitsey@polito.uz</a></li>
            </ul>
        </div>

        <!-- Uchinchi ustun -->
        <div>
            <h4 class="font-bold uppercase">Ijtimoiy tarmoqlar</h4>
            <div class="mt-2 flex space-x-3">
                <a href="https://t.me/s/alturinofficial" class="hover:text-gray-300 text-3xl"><i class="fab fa-telegram"></i></a>
                <a href="https://www.instagram.com/turin_lyceum_uz/" class="hover:text-gray-300 text-3xl"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/TurinLyceum/" class="hover:text-gray-300 text-3xl"><i class="fab fa-facebook"></i></a>
                <a href="#" class="hover:text-gray-300 text-3xl"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCOdkDztQ4WS045TUgagfkVw" class="hover:text-gray-300 text-3xl"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>