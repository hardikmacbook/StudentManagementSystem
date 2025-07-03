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
  <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
  <!------------------------------- Navbar start ---------->
  <nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-lg">
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
  <!------------------------------- Navbar end ---------->
  
  <!------------------------------- hero section start ---------->
  <section class="flex items-center justify-center py-12 px-4"> 
    <div class="max-w-6xl w-full mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden shadow-lg">

        <!-- Left Side - Company Info -->
        <div class="bg-white/20 backdrop-blur-sm p-12 flex flex-col justify-center text-white">
          <div class="space-y-8">
            <!-- Company Name -->
            <div>
              <h1 class="text-4xl lg:text-5xl font-bold mb-2 tracking-tight">
                Smt ZS Patel 
              </h1>
              <div class="w-20 h-1 bg-black rounded-full"></div>
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
              <button class="cta-button bg-gray-900 font-semibold py-4 px-8 rounded-xl text-lg hover:bg-gray-800 inline-flex items-center space-x-2">
                <span class="text-white">Learn More</span>
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
                  class="form-input w-full px-4 py-3 border border-gray-900 rounded-lg focus:ring-2 focus:ring-black focus:border-black outline-none"
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
                  class="form-input w-full px-4 py-3 border border-gray-900 rounded-lg focus:ring-2 focus:ring-black focus:border-black outline-none"
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
                  class="form-input w-full px-4 py-3 border border-gray-900 rounded-lg focus:ring-2 focus:ring-black focus:border-black outline-none"
                  placeholder="Enter your phone number">
              </div>

              <!-- Submit Button -->
              <button
                type="submit"
                class="submit-button w-full bg-gray-900 text-white font-semibold py-4 px-6 rounded-lg hover:from-purple-700 hover:bg-gray-800 transition-all duration-300">
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
  <!-- admisson sumbittion -->
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
  <!------------------------------- hero section end ---------->


   <!-- Course Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-black mb-4">Our Premium Courses</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover our comprehensive selection of premium courses, carefully crafted to help you master new skills, boost your confidence, and accelerate your career growth.
                </p>
            </div>

            <!-- Course Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course Card 1 -->
                <div class="bg-white border-2 border-black rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-full h-48 rounded-lg mb-4 flex items-center justify-center">
                        <img src="./assest//images/z.s patel.png" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Web Development</h3>
                    <p class="text-gray-600 mb-4">Learn HTML, CSS, JavaScript, and modern frameworks to build stunning websites.</p>
                    <div class="mb-4">
                    <b class="text-2xl text-black">Duration:</b>
                    <span class="text-xl">45 house</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-black">₹99</span>
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            Enroll Now
                        </button>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="bg-white border-2 border-black rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-full h-48 rounded-lg mb-4 flex items-center justify-center">
                        <img src="./assest//images/z.s patel.png" alt="">
                      
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Digital Marketing</h3>
                    <p class="text-gray-600 mb-4">Master social media, SEO, and content marketing to grow your business online.</p>
                    <div class="mb-4">
                    <b class="text-2xl text-black">Duration:</b>
                    <span class="text-xl">45 house</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-black">₹79</span>
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            Enroll Now
                        </button>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="bg-white border-2 border-black rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-full h-48 rounded-lg mb-4 flex items-center justify-center">
                        <img src="./assest//images/z.s patel.png" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Data Science</h3>
                    <p class="text-gray-600 mb-4">Analyze data, build models, and make data-driven decisions with Python and R.</p>
                    <div class="mb-4">
                    <b class="text-2xl text-black">Duration:</b>
                    <span class="text-xl">45 house</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-black">₹129</span>
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            Enroll Now
                        </button>
                    </div>
                </div>

                <!-- Course Card 4 -->
                <div class="bg-white border-2 border-black rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-full h-48 rounded-lg mb-4 flex items-center justify-center">
                        <img src="./assest//images/z.s patel.png" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Graphic Design</h3>
                    <p class="text-gray-600 mb-4">Create stunning visuals and master design principles using industry-standard tools.</p>
                    <div class="mb-4">
                    <b class="text-2xl text-black">Duration:</b>
                    <span class="text-xl">45 house</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-black">₹89</span>
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            Enroll Now
                        </button>
                    </div>
                </div>

                <!-- Course Card 5 -->
                <div class="bg-white border-2 border-black rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-full h-48 rounded-lg mb-4 flex items-center justify-center">
                        <img src="./assest//images/z.s patel.png" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Project Management</h3>
                    <p class="text-gray-600 mb-4">Learn to plan, execute, and deliver projects on time and within budget.</p>
                    <div class="mb-4">
                    <b class="text-2xl text-black">Duration:</b>
                    <span class="text-xl">45 house</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-black">₹109</span>
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            Enroll Now
                        </button>
                    </div>
                </div>

                <!-- Course Card 6 -->
                <div class="bg-white border-2 border-black rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-full h-48 rounded-lg mb-4 flex items-center justify-center">
                        <img src="./assest//images/z.s patel.png" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Business Analytics</h3>
                    <p class="text-gray-600 mb-4">Transform raw data into actionable insights to drive business growth.</p>
                    <div class="mb-4">
                    <b class="text-2xl text-black">Duration:</b>
                    <span class="text-xl">45 house</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-black">₹119</span>
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            Enroll Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-12">
                <div class="bg-black text-white rounded-lg p-8 max-w-2xl mx-auto">
                    <h3 class="text-2xl font-bold mb-4">Ready to Start Learning?</h3>
                    <p class="text-gray-300 mb-6">Join thousands of students who have transformed their careers with our courses.</p>
                    <div class="mb-4">
                    <b class="text-2xl text-black">Duration:</b>
                    <span class="text-xl">45 house</span>
                    </div>
                    <button class="bg-white text-black px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        View All Courses
                    </button>
                </div>
            </div>
        </div>
    </section>


<!-- Teachers Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-black mb-4">Meet Our Teachers</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Learn from industry experts and experienced professionals who are passionate about sharing their knowledge.
      </p>
    </div>

    <!-- Dynamic Teachers Grid -->
    <div id="teachers-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
  </div>
</section>


<script>
  const teachers = [
  {
    "name": "demo Johnson",
    "title": "Web Development Expert",
    "bio": "5+ years experience in full-stack development with expertise in React, Node.js, and modern web technologies.",
    "socialMedia": {
      "instagram": "https://instagram.com/msverma",
      "linkedin": "https://linkedin.com/in/msverma",
      "facebook": "",
      "twitter": ""
    }
  },
  {
    "name": "Michael Chen",
    "title": "Data Science Specialist",
    "bio": "PhD in Statistics with 8+ years in machine learning and data analysis. Former Google data scientist.",
    "socialMedia": {
      "instagram": "",
      "linkedin": "",
      "facebook": "",
      "twitter": ""
    }
  },
  {
    "name": "Emma Rodriguez",
    "title": "Digital Marketing Guru",
    "bio": "10+ years in digital marketing with expertise in SEO, social media, and content strategy for Fortune 500 companies.",
    "socialMedia": {
      "instagram": "",
      "linkedin": "",
      "facebook": "",
      "twitter": ""
    }
  },
  {
    "name": "David Thompson",
    "title": "UX/UI Design Master",
    "bio": "Award-winning designer with 12+ years creating user experiences for startups and established brands.",
    "socialMedia": {
      "instagram": "",
      "linkedin": "",
      "facebook": "",
      "twitter": ""
    }
  },
  {
    "name": "Lisa Park",
    "title": "Project Management Pro",
    "bio": "PMP certified with 15+ years managing complex projects across various industries. Expert in Agile methodologies.",
    "socialMedia": {
      "instagram": "",
      "linkedin": "",
      "facebook": "",
      "twitter": ""
    }
  },
  {
    "name": "James Wilson",
    "title": "Business Analytics Expert",
    "bio": "MBA with 9+ years in business intelligence and analytics. Specializes in turning data into strategic insights.",
    "socialMedia": {
      "instagram": "",
      "linkedin": "",
      "facebook": "",
      "twitter": ""
    }
  }
]


  const container = document.getElementById("teachers-grid");

  teachers.forEach(teacher => {
    const card = `
      <div class="bg-white border-2 border-black rounded-lg p-6 hover:shadow-lg transition-shadow duration-300 text-center">
        <div class="w-32 h-32 bg-black rounded-full mx-auto mb-4 flex items-center justify-center">
          <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-black mb-2">${teacher.name}</h3>
        <p class="text-gray-600 mb-3">${teacher.title}</p>
        <p class="text-sm text-gray-500 mb-4">${teacher.bio}</p>
        <div class="flex justify-center space-x-3">
          <button class="w-10 h-10 rounded-full transition-colors flex items-center justify-center">
            <i class="fa-solid fa-envelope"></i>
          </button>
          <button class="w-10 h-10 rounded-full transition-colors flex items-center justify-center">
            <i class="fa-brands fa-git-alt"></i>
          </button>
          <button class="w-10 h-10 rounded-full transition-colors flex items-center justify-center">
            <i class="fa-brands fa-linkedin-in"></i>
          </button>
        </div>
      </div>
    `;
    container.innerHTML += card;
  });
</script>



  <script src="./MobileMenuToggle.js"></script>
</body>

</html>