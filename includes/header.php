<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="min-h-screen bg-gray-50">
  
<header class="fixed top-0 left-0 w-full z-50 bg-white border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
    
    <!-- Logo -->
    <a href="index.php" class="text-xl font-semibold text-gray-800 flex items-center">
      <i class="fas fa-book-open text-[#1E3A8A] pr-1"></i>
      <p class="text-[#1E3A8A]">Open<span class="text-[#BFA14A]">2</span>Learn</p>
    </a>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-6 text-gray-700">
      <a href="index.php" class="text-[#1E3A8A] hover:text-[#BFA14A]">Home</a>
      <a href="about.php" class="text-[#1E3A8A] hover:text-[#BFA14A]">About</a>
      <a href="courses.php" class="text-[#1E3A8A] hover:text-[#BFA14A]">Courses</a>
      <a href="faculty.php" class="text-[#1E3A8A] hover:text-[#BFA14A]">Faculty</a>
      <a href="contact.php" class="text-[#1E3A8A] hover:text-[#BFA14A]">Contact</a>
    </nav>

    <!-- Mobile Button -->
    <button id="mobile-menu-btn" class="md:hidden text-gray-700 text-2xl focus:outline-none">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</header>

<!-- SIDE MOBILE MENU -->
<div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-40">
  <div class="p-5 border-b border-gray-200 flex justify-between items-center">
    <h2 class="text-lg font-semibold text-gray-800">Menu</h2>
    <button id="close-menu" class="text-gray-600 text-2xl">
      <i class="fas fa-times"></i>
    </button>
  </div>

  <nav class="flex flex-col p-5 space-y-4">
    <a href="index.php" class="py-2 border-b border-gray-200 text-[#1E3A8A] hover:text-[#BFA14A]">Home</a>
    <a href="about.php" class="py-2 border-b border-gray-200 text-[#1E3A8A] hover:text-[#BFA14A]">About</a>
    <a href="courses.php" class="py-2 border-b border-gray-200 text-[#1E3A8A] hover:text-[#BFA14A]">Courses</a>
    <a href="faculty.php" class="py-2 border-b border-gray-200 text-[#1E3A8A] hover:text-[#BFA14A]">Faculty</a>
    <a href="contact.php" class="py-2 border-b border-gray-200 text-[#1E3A8A] hover:text-[#BFA14A]">Contact</a>
  </nav>
</div>

<!-- OVERLAY -->
<div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-30 z-30"></div>

<script>
  const menuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const overlay = document.getElementById("overlay");
  const closeBtn = document.getElementById("close-menu");

  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-full");
    overlay.classList.remove("hidden");
  });

  closeBtn.addEventListener("click", () => {
    mobileMenu.classList.add("translate-x-full");
    overlay.classList.add("hidden");
  });

  overlay.addEventListener("click", () => {
    mobileMenu.classList.add("translate-x-full");
    overlay.classList.add("hidden");
  });
</script>

</body>
</html>
