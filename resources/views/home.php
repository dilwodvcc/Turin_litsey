<?php //require "../resources/views/components/home/header.php";?>
<?php //require "../resources/views/components/home/navbar.php";?>
<?php //require "../resources/views/components/home/footer.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<!-- Header -->
<header class="bg-gray-900 shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-4xl font-bold text-gray-800"><img src="http://al-turin.uz/static/img/logo-white.png" width="230" alt=""></a>
        <nav class="flex space-x-10 text-2xl">
            <a href="/home" class="text-white hover:text-green-600">Home</a>
            <a href="/about" class="text-white hover:text-green-600">About</a>
            <a href="/programs" class="text-white hover:text-green-600">Programs</a>
            <a href="/admissions" class="text-white hover:text-green-600">Admissions</a>
            <a href="/contact" class="text-white hover:text-green-600">Contact</a>
        </nav>
        <a href="/apply" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 ">Apply Now</a>
    </div>
</header>
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://travelshelper.com/wp-content/uploads/2021/11/Cambridge-Travel-Guide-Travel-S-Helper.jpg');"></div>
    <!-- Green Overlay -->
    <div class="absolute inset-0 bg-gray-700 opacity-80"></div>
    <!-- Content -->
    <div class="text-center text-white px-4 relative z-10"></div>
</section>

<!-- Programs Section -->
<section id="programs" class="py-12 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Our Programs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-semibold mb-4">Engineering</h3>
                <p>Explore cutting-edge technology and innovative solutions in engineering fields.</p>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-semibold mb-4">Business</h3>
                <p>Prepare for leadership roles with our world-class business programs.</p>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-semibold mb-4">Arts & Humanities</h3>
                <p>Foster creativity and critical thinking through diverse disciplines.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section id="admissions" class="bg-blue-500 py-12 text-white text-center">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-4">Admissions Open for 2025</h2>
        <p class="mb-6">Don't miss your chance to be a part of our vibrant community.</p>
        <a href="#apply" class="px-6 py-3 bg-white text-blue-500 rounded font-semibold hover:bg-gray-200">Apply Now</a>
    </div>
</section>

<!-- Footer -->
<footer id="contact" class="bg-gray-800 py-8 text-white">
    <div class="container mx-auto text-center">
        <p class="mb-4">Contact Us</p>
        <p>123 University Street, City, Country</p>
        <p>Email: info@university.com | Phone: +123-456-7890</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="#" class="hover:text-blue-500">Facebook</a>
            <a href="#" class="hover:text-blue-500">Twitter</a>
            <a href="#" class="hover:text-blue-500">Instagram</a>
        </div>
    </div>
</footer>
</body>
</html>

