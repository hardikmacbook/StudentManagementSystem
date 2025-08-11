<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  <style>
    .menu-hidden {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      transform: translateY(-10px);
      transition: all 0.3s ease-in-out;
    }
    .menu-visible {
      max-height: 500px;
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="min-h-screen bg-gray-50 flex flex-col">

  <!-- Clean Fixed Header -->
  <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
      
      <!-- Logo -->
      <a href="/StudentManagementSystem/index.php" class="text-xl font-bold text-gray-800 tracking-tight">
        Open<span class="text-blue-600">2</span>Learn
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex space-x-8">
        <a href="/StudentManagementSystem/index.php" class="text-gray-700 hover:text-blue-600 transition">Home</a>
        <a href="/StudentManagementSystem/about.php" class="text-gray-700 hover:text-blue-600 transition">About</a>
        <a href="/StudentManagementSystem/courses.php" class="text-gray-700 hover:text-blue-600 transition">Courses</a>
        <a href="/StudentManagementSystem/faculty.php" class="text-gray-700 hover:text-blue-600 transition">Faculty</a>
        <a href="/StudentManagementSystem/contact.php" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
      </nav>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-btn" class="md:hidden text-gray-700 text-2xl focus:outline-none">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="bg-white shadow-md md:hidden px-6 py-4 flex flex-col space-y-4 menu-hidden">
      <a href="/StudentManagementSystem/index.php" class="block text-gray-700 hover:text-blue-600">Home</a>
      <a href="/StudentManagementSystem/about.php" class="block text-gray-700 hover:text-blue-600">About</a>
      <a href="/StudentManagementSystem/courses.php" class="block text-gray-700 hover:text-blue-600">Courses</a>
      <a href="/StudentManagementSystem/faculty.php" class="block text-gray-700 hover:text-blue-600">Faculty</a>
      <a href="/StudentManagementSystem/contact.php" class="block text-gray-700 hover:text-blue-600">Contact</a>
    </div>
  </header>

  <script>
    const menuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const icon = menuBtn.querySelector("i");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("menu-visible");
      mobileMenu.classList.toggle("menu-hidden");

      // Toggle menu icon
      icon.classList.toggle("fa-bars");
      icon.classList.toggle("fa-times");
    });
  </script>

</body>
</html>