<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudentManagementSystem</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
  <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="./index.php" class="text-lg font-semibold text-gray-900 transition-colors duration-200">
            <img class="w-[100px] sm:w-[150px] lg:w-[150px]" src="./assest/images/z.s patel.png" alt="">
          </a>
        </div>


        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="#" class="nav-link text-gray-700 hover:text-gray-900 text-sm font-medium transition-colors duration-200">
            Home
          </a>
          <a href="#" class="nav-link text-gray-700 hover:text-gray-900 text-sm font-medium transition-colors duration-200">
            About
          </a>
          <a href="#" class="nav-link text-gray-700 hover:text-gray-900 text-sm font-medium transition-colors duration-200">
            Course
          </a>
          <a href="#" class="nav-link text-gray-700 hover:text-gray-900 text-sm font-medium transition-colors duration-200">
            Contact
          </a>
        </div>

        <!-- CTA Button -->
        <div class="hidden md:block">
          <div class="flex gap-4">
            <a href="#" class="bg-gray-900 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors duration-200">
              Get Started
            </a>
            <a href="#" class="bg-gray-900 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors duration-200">
              Login
            </a>
          </div>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button id="mobile-menu-button" class="text-gray-700 hover:text-gray-900 focus:outline-none transition-colors duration-200">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <div id="mobile-menu" class="md:hidden hidden border-t border-gray-100">
        <div class="px-2 pt-2 pb-3 space-y-1">
          <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md">
            Home
          </a>
          <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md">
            About
          </a>
          <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md">
            Course
          </a>
          <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md">
            Contact
          </a>
          <a href="#" class="bg-gray-900 text-white hover:bg-gray-800 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md mt-3">
            Get Started
          </a>
          <a href="#" class="bg-gray-900 text-white hover:bg-gray-800 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md mt-3">
            Login
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!----------------------- JS ----------------------->
  <script src="./MobileMenuToggle.js"></script>
</body>

</html>