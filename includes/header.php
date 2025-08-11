<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Management System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Glass Effect */
    .glass {
      background: rgba(255, 255, 255, 0.15);
      border-radius: 1rem;
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.25);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 flex flex-col">

  <!-- Floating Glass Header -->
  <header class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] z-50">
    <div class="glass flex justify-between items-center px-6 py-4">
      <!-- Logo -->
      <a href="/StudentManagementSystem/index.php" class="text-2xl font-bold text-black drop-shadow-lg tracking-wide">
        Course Portal
      </a>

      <!-- Navigation -->
      <nav class="hidden md:flex space-x-8">
        <a href="/StudentManagementSystem/index.php" class="text-black font-medium hover:text-yellow-300 transition ">Home</a>
        <a href="/StudentManagementSystem/about.php" class="text-black font-medium hover:text-yellow-300 transition">About</a>
        <a href="/StudentManagementSystem/courses.php" class="text-black font-medium hover:text-yellow-300 transition">Courses</a>
        <a href="/StudentManagementSystem/faculty.php" class="text-black font-medium hover:text-yellow-300 transition">Faculty</a>
        <a href="/StudentManagementSystem/contact.php" class="text-black font-medium hover:text-yellow-300 transition">Contact</a>
      </nav>

      <!-- Mobile Menu Button -->
      <button class="md:hidden text-white text-2xl focus:outline-none">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </header>

</body>
</html>
