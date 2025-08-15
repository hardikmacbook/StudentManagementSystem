<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Open2Learn</title>
  <link rel="stylesheet" href="./style.css">
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
        <img src="https://static.vecteezy.com/system/resources/thumbnails/006/296/747/small_2x/bookshelf-with-books-biography-adventure-novel-poem-fantasy-love-story-detective-art-romance-banner-for-library-book-store-genre-of-literature-illustration-in-flat-style-vector.jpg" alt="University Campus" class="w-full h-full object-cover" />
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
        <img src="https://wallpapercrafter.com/desktop/159281-library-university-books-book-shelf-bookshelves.jpg" alt="Library Interior" class="w-full h-full object-cover" />
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
        <img src="https://www.readlocalbc.ca/wp-content/uploads/2025/05/eBookshelf-banner.jpg" alt="Students Studying" class="w-full h-full object-cover" />
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
  <div class="bg-gradient-to-br from-blue-50 via-purple-50 to-indigo-50 py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

      <!-- Heading -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4 tracking-tight">
          Our Academic Excellence
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
          Providing quality education through our comprehensive and curated course offerings.
        </p>
      </div>

      <!-- Stats Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

        <!-- Card -->
        <div class="bg-white group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
          <div class="text-5xl font-extrabold bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent mb-3">
            7+
          </div>
          <div class="text-gray-700 font-medium">Academic Programs</div>
        </div>

        <div class="bg-white group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
          <div class="text-5xl font-extrabold bg-gradient-to-r from-indigo-500 to-purple-500 bg-clip-text text-transparent mb-3">
            50+
          </div>
          <div class="text-gray-700 font-medium">Subjects</div>
        </div>

        <div class="bg-white group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
          <div class="text-5xl font-extrabold bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent mb-3">
            15+
          </div>
          <div class="text-gray-700 font-medium">Expert Faculty</div>
        </div>

        <div class="bg-white group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
          <div class="text-5xl font-extrabold bg-gradient-to-r from-pink-500 to-red-500 bg-clip-text text-transparent mb-3">
            3+
          </div>
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
              <div class="absolute top-4 right-4 bg-[#1E3A8A] text-white text-xs font-bold px-2 py-1 rounded">
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
                <span class="bg-[#1E3A8A] text-white text-xs px-2 py-1 rounded-full">
                  <?= $totalYears ?> Years
                </span>
              </div>
              <a href="course_years.php?id=<?php echo $course['id']; ?>" class="inline-flex items-center text-[#1E3A8A] hover:text-[#BFA14A] font-medium">
                View Details
                <i class="fas fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <div class="text-center mt-10">
      <a href="courses.php" class="inline-block bg-[#1E3A8A] hover:text-black hover:bg-[#BFA14A] text-white font-semibold py-3 px-8 rounded-lg transition duration-300">
        View All Programs
      </a>
    </div>
  </div>

  <!-- Features Section -->
  <div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Heading -->
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">
          Why Choose <span class="text-[#1E3A8A]">Open<span class="text-[#BFA14A]">2</span>Learn</span>
        </h2>

        <p class="text-gray-600 max-w-2xl mx-auto">
          Streamlined, organized, and crafted to give you the best learning experience possible.
        </p>
      </div>

      <!-- Features -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Feature 1 -->
        <div class="p-8 border border-gray-100 rounded-xl shadow-sm hover:shadow-md hover:border-[#1E3A8A] transition duration-300">
          <div class="text-4xl mb-4">
            <i class="fas fa-graduation-cap text-[#1E3A8A]"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-900">Structured Learning</h3>
          <p class="text-gray-600">
            Courses are neatly organized by years and semesters for a clear learning path.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="p-8 border border-gray-100 rounded-xl shadow-sm hover:shadow-md hover:border-[#1E3A8A] transition duration-300">
          <div class="text-4xl mb-4">
            <i class="fas fa-file-pdf text-[#1E3A8A]"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-900">Accessible Materials</h3>
          <p class="text-gray-600">
            Access or download materials anytime for seamless, flexible learning.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="p-8 border border-gray-100 rounded-xl shadow-sm hover:shadow-md hover:border-[#1E3A8A] transition duration-300">
          <div class="text-4xl mb-4">
            <i class="fas fa-chalkboard-teacher text-[#1E3A8A]"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-900">Expert Faculty</h3>
          <p class="text-gray-600">
            Learn from experienced subject experts dedicated to your growth.
          </p>
        </div>

      </div>
    </div>
  </div>




  <?php
  // Enhanced JSON data with detailed reviews and dates
  $jsonData = '[
  {
    "name": "John Doe",
    "review": "Absolutely loved it! The product quality exceeded my expectations, and the delivery was super fast. Highly recommend to everyone.",
    "rating": 5,
    "date": "2025-07-15"
  },
  {
    "name": "Jane Smith",
    "review": "Good value for the price. The item arrived on time and works as described. Customer service was very helpful.",
    "rating": 4,
    "date": "2025-08-01"
  },
  {
    "name": "Alex Johnson",
    "review": "Decent product but packaging could be improved. Overall satisfied with the purchase experience.",
    "rating": 3,
    "date": "2025-06-20"
  },
  {
    "name": "Emily Davis",
    "review": "Exceeded expectations with excellent build quality and features. Will definitely buy again.",
    "rating": 5,
    "date": "2025-08-10"
  }
]';

  $reviews = json_decode($jsonData, true);
  $valid_reviews = array_filter($reviews, function ($r) {
    return isset($r['name'], $r['review'], $r['rating']);
  });
  ?>

  <div class="max-w-6xl mx-auto my-12 px-6">
    <div class="mb-12 text-center">
      <h2 class="text-5xl font-extrabold text-blue-900 mb-3">What People Are Saying</h2>
      <p class="text-blue-700 text-xl">Real reviews from real customers</p>
    </div>
    <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
      <?php foreach ($valid_reviews as $review): ?>
        <div class="flex flex-col bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 border border-blue-200">
          <!-- Avatar -->
          <div class="flex items-center justify-center h-28 w-28 bg-blue-900 rounded-t-2xl text-white font-extrabold text-6xl tracking-tight drop-shadow-lg mx-auto mt-8 mb-6">
            <?= htmlspecialchars(mb_substr($review['name'], 0, 1)) ?>
          </div>
          <!-- Content -->
          <div class="px-8 pb-10 flex flex-col flex-grow">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-xl font-semibold text-blue-900"><?= htmlspecialchars($review['name']) ?></h3>
              <?php if (!empty($review['date'])): ?>
                <time datetime="<?= htmlspecialchars($review['date']) ?>" class="text-sm text-gray-400 italic">
                  <?= htmlspecialchars(date("M j, Y", strtotime($review['date']))) ?>
                </time>
              <?php endif; ?>
            </div>
            <div class="flex items-center mb-4 space-x-1">
              <?php for ($i = 0; $i < 5; $i++): ?>
                <?php if ($i < $review['rating']): ?>
                  <svg aria-hidden="true" class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <title>Star</title>
                    <path d="M9.049 2.927C9.432 2.036 10.568 2.036 10.951 2.927L12.92 7.53l4.996.157c.964.027 1.357 1.254.627 1.838l-4.169 3.562 1.239 4.977c.22.935-.84 1.671-1.633 1.181L10 16.858 5.941 19.245c-.793.49-1.854-.236-1.633-1.181l1.239-4.977-4.169-3.562c-.73-.584-.337-1.811.627-1.838L7.08 7.53 9.049 2.927z" />
                  </svg>
                <?php else: ?>
                  <svg aria-hidden="true" class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                    <title>Star empty</title>
                    <path d="M9.049 2.927C9.432 2.036 10.568 2.036 10.951 2.927L12.92 7.53l4.996.157c.964.027 1.357 1.254.627 1.838l-4.169 3.562 1.239 4.977c.22.935-.84 1.671-1.633 1.181L10 16.858 5.941 19.245c-.793.49-1.854-.236-1.633-1.181l1.239-4.977-4.169-3.562c-.73-.584-.337-1.811.627-1.838L7.08 7.53 9.049 2.927z" />
                  </svg>
                <?php endif; ?>
              <?php endfor; ?>
              <span class="ml-2 text-blue-900 font-semibold"><?= $review['rating'] ?>/5</span>
            </div>
            <p class="text-gray-800 text-lg leading-relaxed flex-grow"><?= htmlspecialchars($review['review']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>


  <?php include 'includes/footer.php'; ?>
</body>

</html>