<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Open2Learn</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  <?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<div class="relative w-full h-[600px] overflow-hidden">
  <!-- Slides -->
  <div class="slider-wrapper flex transition-transform duration-700 ease-in-out" id="slider">
    <div class="flex-shrink-0 w-full h-[600px] relative">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/006/296/747/small_2x/bookshelf-with-books-biography-adventure-novel-poem-fantasy-love-story-detective-art-romance-banner-for-library-book-store-genre-of-literature-illustration-in-flat-style-vector.jpg" alt="University Campus" class="w-full h-full object-cover"/>
      <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-transparent flex items-center">
        <div class="text-white max-w-2xl ml-16">
          <h1 class="text-5xl font-bold mb-4">Welcome to Course Portal</h1>
          <p class="text-xl mb-8">Access quality education materials anytime, anywhere</p>
          <a href="courses.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-flex items-center">
            <span>Explore Courses</span>
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="flex-shrink-0 w-full h-[600px] relative">
      <img src="https://wallpapercrafter.com/desktop/159281-library-university-books-book-shelf-bookshelves.jpg" alt="Library Interior" class="w-full h-full object-cover"/>
      <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-transparent flex items-center">
        <div class="text-white max-w-2xl ml-16">
          <h1 class="text-5xl font-bold mb-4">Comprehensive Learning</h1>
          <p class="text-xl mb-8">Structured courses with semester-wise organization</p>
          <a href="courses.php" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-flex items-center">
            <span>View Programs</span>
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="flex-shrink-0 w-full h-[600px] relative">
      <img src="https://www.readlocalbc.ca/wp-content/uploads/2025/05/eBookshelf-banner.jpg" alt="Students Studying" class="w-full h-full object-cover"/>
      <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-transparent flex items-center">
        <div class="text-white max-w-2xl ml-16">
          <h1 class="text-5xl font-bold mb-4">Learn at Your Pace</h1>
          <p class="text-xl mb-8">Download or view course materials online</p>
          <a href="courses.php" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-flex items-center">
            <span>Get Started</span>
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </div>
    
  </div>

  <!-- Navigation Arrows -->
  <button id="prev" class="absolute top-1/2 left-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-4 rounded-full transition duration-300" aria-label="Previous Slide">
    <i class="fas fa-chevron-left"></i>
  </button>
  <button id="next" class="absolute top-1/2 right-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-4 rounded-full transition duration-300" aria-label="Next Slide">
    <i class="fas fa-chevron-right"></i>
  </button>
  
  <!-- Slide Indicators -->
  <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2">
    <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition duration-300 slide-indicator active" data-index="0"></button>
    <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition duration-300 slide-indicator" data-index="1"></button>
    <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition duration-300 slide-indicator" data-index="2"></button>
  </div>
</div>

<script>
  const slider = document.getElementById('slider');
  const totalSlides = slider.children.length;
  const indicators = document.querySelectorAll('.slide-indicator');
  let index = 0;

  // Update active indicator
  function updateIndicators() {
    indicators.forEach((indicator, i) => {
      if (i === index) {
        indicator.classList.add('bg-white');
        indicator.classList.add('active');
      } else {
        indicator.classList.remove('bg-white');
        indicator.classList.remove('active');
      }
    });
  }

  // Next slide
  document.getElementById('next').addEventListener('click', () => {
    index = (index + 1) % totalSlides;
    slider.style.transform = `translateX(-${index * 100}%)`;
    updateIndicators();
  });

  // Previous slide
  document.getElementById('prev').addEventListener('click', () => {
    index = (index - 1 + totalSlides) % totalSlides;
    slider.style.transform = `translateX(-${index * 100}%)`;
    updateIndicators();
  });

  // Indicator clicks
  indicators.forEach((indicator, i) => {
    indicator.addEventListener('click', () => {
      index = i;
      slider.style.transform = `translateX(-${index * 100}%)`;
      updateIndicators();
    });
  });

  // Auto-play every 5 seconds
  setInterval(() => {
    index = (index + 1) % totalSlides;
    slider.style.transform = `translateX(-${index * 100}%)`;
    updateIndicators();
  }, 6000);
</script>

<!-- Stats Section -->
<div class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Academic Excellence</h2>
      <p class="text-gray-600 max-w-3xl mx-auto">Providing quality education through our comprehensive course offerings</p>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
        <div class="text-blue-600 text-4xl font-bold mb-2">7+</div>
        <div class="text-gray-700 font-medium">Academic Programs</div>
      </div>
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
        <div class="text-indigo-600 text-4xl font-bold mb-2">50+</div>
        <div class="text-gray-700 font-medium">Subjects</div>
      </div>
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
        <div class="text-purple-600 text-4xl font-bold mb-2">15+</div>
        <div class="text-gray-700 font-medium">Expert Faculty</div>
      </div>
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
        <div class="text-pink-600 text-4xl font-bold mb-2">3+</div>
        <div class="text-gray-700 font-medium">Years of Excellence</div>
      </div>
    </div>
  </div>
</div>

<!-- Featured Courses -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Featured Programs</h2>
    <p class="text-gray-600 max-w-3xl mx-auto">Explore our most popular academic programs</p>
  </div>
  
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <?php
    $allCoursesJson = file_get_contents('data/all_courses.json');
    $allCourses = json_decode($allCoursesJson, true);
    $courses = $allCourses['courses'];
    
    // Display only the first 3 courses
    $featuredCourses = array_slice($courses, 0, 3);
    
    foreach ($featuredCourses as $course) {
    ?>
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-gray-100">
        <div class="h-52 bg-gray-200 relative overflow-hidden">
          <?php if (isset($course['image'])): ?>
            <img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            <div class="absolute top-4 right-4 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">
              <?php echo $course['code']; ?>
            </div>
          <?php else: ?>
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-blue-400 to-indigo-500">
              <span class="text-white text-3xl font-bold"><?php echo $course['code']; ?></span>
            </div>
          <?php endif; ?>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-3 text-gray-800"><?php echo $course['title']; ?></h3>
          
          <div class="flex items-center mb-4">
            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-2">
              <i class="fas fa-user-tie text-blue-600 text-sm"></i>
            </div>
            <p class="text-gray-600 text-sm">
              <?php echo $course['instructor']; ?>
            </p>
          </div>
          
          <p class="text-gray-700 mb-6"><?php echo substr($course['description'], 0, 100); ?>...</p>
          
          <div class="flex justify-between items-center">
            <div>
              <?php 
              // Count total years
              $totalYears = count($course['years'] ?? []);
              ?>
              <span class="bg-blue-50 text-blue-700 text-xs px-2 py-1 rounded-full">
                <?= $totalYears ?> Years
              </span>
            </div>
            <a href="course_years.php?id=<?php echo $course['id']; ?>" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
              View Details
              <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  
  <div class="text-center mt-10">
    <a href="courses.php" class="inline-block bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3 px-8 rounded-lg transition duration-300">
      View All Programs
    </a>
  </div>
</div>

<!-- Features Section -->
<div class="bg-gradient-to-r from-blue-600 to-indigo-600 py-16 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold mb-4">Why Choose Our Course Portal</h2>
      <p class="text-blue-100 max-w-3xl mx-auto">We provide a comprehensive learning experience with multiple benefits</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl hover:bg-white/20 transition duration-300">
        <div class="text-4xl mb-4"><i class="fas fa-graduation-cap"></i></div>
        <h3 class="text-xl font-bold mb-3">Structured Learning</h3>
        <p class="text-blue-100">Our courses are organized by years and semesters for systematic learning progression.</p>
      </div>
      <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl hover:bg-white/20 transition duration-300">
        <div class="text-4xl mb-4"><i class="fas fa-file-pdf"></i></div>
        <h3 class="text-xl font-bold mb-3">Accessible Materials</h3>
        <p class="text-blue-100">View or download course materials anytime, anywhere for flexible learning.</p>
      </div>
      <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl hover:bg-white/20 transition duration-300">
        <div class="text-4xl mb-4"><i class="fas fa-chalkboard-teacher"></i></div>
        <h3 class="text-xl font-bold mb-3">Expert Faculty</h3>
        <p class="text-blue-100">Learn from experienced instructors who are experts in their respective fields.</p>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>