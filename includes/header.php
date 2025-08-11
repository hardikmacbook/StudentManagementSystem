<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Open2Learn</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    .glass {
      background: rgba(255, 255, 255, 0.18);
      border-radius: 1.2rem;
      box-shadow: 0 6px 24px rgba(31, 38, 135, 0.22);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border: 1px solid rgba(255,255,255,0.22);
    }

    /* Smooth dropdown animation */
    .menu-enter {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    .menu-open {
      max-height: 500px;
      opacity: 1;
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 flex flex-col">

  <!-- Floating Glass Header -->
  <header class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[40%] max-w-5xl z-50">
    <div class="glass flex justify-between items-center px-6 py-3">
      <!-- Logo -->
<a href="/StudentManagementSystem/index.php" class="text-xl font-bold text-black tracking-tight flex items-center space-x-2">
  <p class="tracking-tight text-lg">Open<span>2</span>Learn</p>
</a>

      
      <!-- Desktop Navigation -->
      <nav class="hidden md:flex space-x-8">
        <a href="/StudentManagementSystem/index.php" class="text-black font-medium hover:text-blue-600 transition">Home</a>
        <a href="/StudentManagementSystem/about.php" class="text-black font-medium hover:text-blue-600 transition">About</a>
        <a href="/StudentManagementSystem/courses.php" class="text-black font-medium hover:text-blue-600 transition">Courses</a>
        <a href="/StudentManagementSystem/faculty.php" class="text-black font-medium hover:text-blue-600 transition">Faculty</a>
        <a href="/StudentManagementSystem/contact.php" class="text-black font-medium hover:text-blue-600 transition">Contact</a>
      </nav>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-btn" class="md:hidden text-black text-2xl focus:outline-none">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- Mobile Navigation (Hidden by default) -->
    <div id="mobile-menu" class="glass md:hidden mt-2 px-6 flex flex-col space-y-4 menu-enter">
      <a href="/StudentManagementSystem/index.php" class="block text-black font-medium hover:text-blue-600">Home</a>
      <a href="/StudentManagementSystem/about.php" class="block text-black font-medium hover:text-blue-600">About</a>
      <a href="/StudentManagementSystem/courses.php" class="block text-black font-medium hover:text-blue-600">Courses</a>
      <a href="/StudentManagementSystem/faculty.php" class="block text-black font-medium hover:text-blue-600">Faculty</a>
      <a href="/StudentManagementSystem/contact.php" class="block text-black font-medium hover:text-blue-600">Contact</a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="pt-32">
    <!-- Your hero/content here -->
  </div>

  <script>
    const menuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("menu-open");
    });
  </script>

</body>
</html>
