<?php
session_start();
?>
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
          <a href="index.php" class="text-lg font-semibold text-gray-900 transition-colors duration-200">
            <img class="w-[100px] sm:w-[150px] lg:w-[150px]" src="./assest/images/z.s patel.png" alt="">
          </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="index.php" class="nav-link text-gray-700 hover:text-gray-900 text-sm font-medium transition-colors duration-200">
            Home
          </a>
          <a href="about.php" class="nav-link text-gray-700 hover:text-gray-900 text-sm font-medium transition-colors duration-200">
            About
          </a>
          <a href="course.php" class="nav-link text-gray-700 hover:text-gray-900 text-sm font-medium transition-colors duration-200">
            Course
          </a>
          <a href="contact.php" class="nav-link text-gray-700 hover:text-gray-900 text-sm font-medium transition-colors duration-200">
            Contact
          </a>
        </div>

        <!-- CTA Button -->
        <div class="hidden md:block">
          <div class="flex gap-4">
            <a href="" class="bg-gray-900 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors duration-200">
              Get Started
            </a>
            <a href="" class="bg-gray-900 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors duration-200">
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
          <a href="index.php" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md">
            Home
          </a>
          <a href="about.php" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md">
            About
          </a>
          <a href="course.php" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md">
            Course
          </a>
          <a href="contact.php" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md">
            Contact
          </a>
          <a href="register.php" class="bg-gray-900 text-white hover:bg-gray-800 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md mt-3">
            Get Started
          </a>
          <a href="login.php" class="bg-gray-900 text-white hover:bg-gray-800 block px-3 py-2 text-base font-medium transition-colors duration-200 rounded-md mt-3">
            Login
          </a>
        </div>
      </div>
    </div>
  </nav>




  <section class="gradient-bg flex items-center justify-center py-12 px-4">
    <div class="max-w-6xl w-full mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden shadow-2xl">

        <!-- Left Side - Company Info -->
        <div class="bg-white/20 backdrop-blur-sm p-12 flex flex-col justify-center text-white">
          <div class="space-y-8">
            <!-- Company Name -->
            <div>
              <h1 class="text-4xl lg:text-5xl font-bold mb-2 tracking-tight">
                EduTech Pro
              </h1>
              <div class="w-20 h-1 bg-white/60 rounded-full"></div>
            </div>

            <!-- Slogan -->
            <div>
              <p class="text-xl lg:text-2xl font-light leading-relaxed opacity-90">
                "Empowering minds, shaping futures through innovative learning experiences"
              </p>
            </div>

            <!-- Call to Action -->
            <div class="space-y-6">
              <p class="text-lg opacity-80 leading-relaxed">
                Join thousands of successful students who have transformed their careers with our cutting-edge programs.
              </p>
              <button class="cta-button bg-white text-purple-700 font-semibold py-4 px-8 rounded-full text-lg hover:bg-white/90 inline-flex items-center space-x-2">
                <span>Learn More</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Right Side - Admission Form -->
        <div class="bg-white p-12 flex flex-col justify-center">
          <div class="max-w-md mx-auto w-full">
            <!-- Form Header -->
            <div class="text-center mb-8">
              <h2 class="text-3xl font-bold text-gray-800 mb-2">Start Your Journey</h2>
              <p class="text-gray-600">Fill out the form below to get started</p>
            </div>

            <!-- Form -->
            <form class="space-y-6" onsubmit="handleSubmit(event)">
              <!-- Name Field -->
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  required
                  class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none"
                  placeholder="Enter your full name">
              </div>

              <!-- Email Field -->
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Your Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none"
                  placeholder="Enter your email address">
              </div>

              <!-- Phone Field -->
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Your Number</label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  required
                  class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none"
                  placeholder="Enter your phone number">
              </div>

              <!-- Submit Button -->
              <button
                type="submit"
                class="submit-button w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold py-4 px-6 rounded-lg hover:from-purple-700 hover:to-blue-700 transition-all duration-300">
                Submit Application
              </button>
            </form>

            <!-- Privacy Note -->
            <p class="text-xs text-gray-500 text-center mt-4">
              By submitting this form, you agree to our privacy policy and terms of service.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function handleSubmit(event) {
      event.preventDefault();

      // Get form data
      const formData = new FormData(event.target);
      const data = {
        name: formData.get('name'),
        email: formData.get('email'),
        phone: formData.get('phone')
      };

      // Simple validation
      if (!data.name || !data.email || !data.phone) {
        alert('Please fill in all fields');
        return;
      }

      // Simulate form submission
      const submitButton = event.target.querySelector('button[type="submit"]');
      const originalText = submitButton.textContent;

      submitButton.textContent = 'Submitting...';
      submitButton.disabled = true;

      setTimeout(() => {
        alert('Thank you for your application! We will contact you soon.');
        event.target.reset();
        submitButton.textContent = originalText;
        submitButton.disabled = false;
      }, 2000);
    }
  </script>

  <script src="./MobileMenuToggle.js"></script>
</body>

</html>