<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="min-h-screen bg-gray-50 flex flex-col">

<!-- Stylish Fixed Header -->
<header class="fixed top-0 left-0 w-full z-50 bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    
    <!-- Logo -->
    <a href="/StudentManagementSystem/index.php" class="text-2xl font-extrabold tracking-tight flex items-center gap-2">
      <i class="fas fa-book-open text-yellow-300"></i>
      Open<span class="text-yellow-300">2</span>Learn
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-8">
      <a href="/StudentManagementSystem/index.php" class="relative group">
        Home
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-yellow-300 transition-all group-hover:w-full"></span>
      </a>
      <a href="/StudentManagementSystem/about.php" class="relative group">
        About
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-yellow-300 transition-all group-hover:w-full"></span>
      </a>
      <a href="/StudentManagementSystem/courses.php" class="relative group">
        Courses
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-yellow-300 transition-all group-hover:w-full"></span>
      </a>
      <a href="/StudentManagementSystem/faculty.php" class="relative group">
        Faculty
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-yellow-300 transition-all group-hover:w-full"></span>
      </a>
      <a href="/StudentManagementSystem/contact.php" class="relative group">
        Contact
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-yellow-300 transition-all group-hover:w-full"></span>
      </a>
    </nav>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="md:hidden text-white text-2xl focus:outline-none">
      <i class="fas fa-bars"></i>
    </button>
  </div>

  <!-- Mobile Navigation -->
  <div id="mobile-menu" class="hidden flex-col space-y-4 bg-white text-gray-800 px-6 py-4 shadow-md rounded-b-lg backdrop-blur-md animate-slide-down">
    <a href="/StudentManagementSystem/index.php" class="hover:text-blue-600 transition">Home</a>
    <a href="/StudentManagementSystem/about.php" class="hover:text-blue-600 transition">About</a>
    <a href="/StudentManagementSystem/courses.php" class="hover:text-blue-600 transition">Courses</a>
    <a href="/StudentManagementSystem/faculty.php" class="hover:text-blue-600 transition">Faculty</a>
    <a href="/StudentManagementSystem/contact.php" class="hover:text-blue-600 transition">Contact</a>
  </div>
</header>

<!-- Adding smooth animation -->
<style>
  @keyframes slideDown {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-slide-down {
    animation: slideDown 0.3s ease forwards;
  }
</style>

<script>
  const menuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const icon = menuBtn.querySelector("i");

  menuBtn.addEventListener("click", () => {
    if (mobileMenu.classList.contains("hidden")) {
      mobileMenu.classList.remove("hidden");
      mobileMenu.classList.add("animate-slide-down");
      icon.classList.replace("fa-bars", "fa-times");
    } else {
      mobileMenu.classList.add("hidden");
      icon.classList.replace("fa-times", "fa-bars");
    }
  });
</script>

</body>
</html>
