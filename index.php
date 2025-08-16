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


  <!-- Featured Courses -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">
        Explore the <span class="text-[#1E3A8A]">Open<span class="text-[#BFA14A]">2</span>Learn</span> Library
      </h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Study-ready PDFs of every course, one click away
      </p>

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
  <div class="bg-gradient-to-br from-blue-50 via-purple-50 to-indigo-50 py-20">
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
        <div class="p-8 border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:border-[#1E3A8A] transition duration-300">
          <div class="text-4xl mb-4">
            <i class="fas fa-graduation-cap text-[#1E3A8A]"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-900">Structured Learning</h3>
          <p class="text-gray-600">
            Courses are neatly organized by years and semesters for a clear learning path.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="p-8 border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:border-[#1E3A8A] transition duration-300">
          <div class="text-4xl mb-4">
            <i class="fas fa-file-pdf text-[#1E3A8A]"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-900">Accessible Materials</h3>
          <p class="text-gray-600">
            Access or download materials anytime for seamless, flexible learning.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="p-8 border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:border-[#1E3A8A] transition duration-300">
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
  $jsonData = '[
  {
    "name": "Ravi Patel",
    "review": "Open2Learn is a lifesaver during exams! All my university PDFs are well-organized and easy to access. I love the clean design — it’s fast and simple to use",
    "rating": 5
  },
  {
    "name": "Priya Shah",
    "review": "Very helpful for finding my semester books. I wish there were more previous year papers, but the overall experience is great!",
    "rating": 4
  },
  {
    "name": "Amit Verma",
    "review": "This site has saved me so much time. No more searching in WhatsApp groups or asking friends for notes — everything is here!",
    "rating": 3
  },
  {
    "name": "Neha Joshi",
    "review": "The library is well-structured and the PDFs are good quality. It would be perfect if more subjects were added.",
    "rating": 5
  },
  {
    "name": "Harsh Mehta",
    "review": "Honestly, the best platform for university study material I’ve seen. Fast download speed and mobile-friendly design make it perfect for students like me",
    "rating": 5
  },
  {
    "name": "Kiran Solanki",
    "review": "Good resource, but sometimes a few links don’t work. Still, it’s very helpful overall for my course PDFs",
    "rating": 5
  }
]';

  $reviews = json_decode($jsonData, true);
  $valid_reviews = array_filter($reviews, fn($r) => isset($r['name'], $r['review'], $r['rating']));
  ?>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .swiper-pagination {
      width: 100%;
      text-align: center;
      padding-top: 12px;
      margin-top: 32px;
      margin-bottom: 8px;
      position: static !important;
    }

    .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: #1E3A8A;
      opacity: 0.4;
      margin: 0 6px !important;
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      opacity: 1;
      transform: scale(1.2);
    }
  </style>

  <div class="max-w-6xl mx-auto my-16 px-6">
    <div class="text-center mb-10">
      <h2 class="text-4xl font-semibold text-gray-900 mb-2">
        What Learners Say About <span class="text-[#1E3A8A]">Open<span class="text-[#BFA14A]">2</span>Learn</span>
      </h2>
      <p class="text-gray-500 max-w-xl mx-auto text-base">
        Genuine reviews from students who trust Open2Learn.
      </p>
    </div>

    <div class="swiper reviewSwiper">
      <div class="swiper-wrapper">
        <?php foreach ($valid_reviews as $review): ?>
          <div class="swiper-slide flex">
            <article class="review-card p-6 w-[300px] border border-gray-200 hover:border-[#1E3A8A] h-[320px] rounded-3xl">

              <div class="avatar bg-[#1E3A8A] text-white font-bold h-14 w-14 [clip-path:circle(35%)] flex items-center justify-center text-2xl mx-auto mb-4"><?= htmlspecialchars(mb_substr($review['name'], 0, 1)) ?></div>

              <h3 class="font-semibold text-xl text-center text-gray-900 mb-2"><?= htmlspecialchars($review['name']) ?></h3>

              <div class="flex justify-center mb-4 space-x-1">
                <?php for ($i = 0; $i < 5; $i++): ?>
                  <svg class="w-5 h-5 <?= $i < $review['rating'] ? 'text-[#BFA14A]' : 'text-gray-300' ?>" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927C9.432 2.036 10.568 2.036 10.951 2.927L12.92 7.53l4.996.157c.964.027 1.357 1.254.627 1.838l-4.169 3.562 1.239 4.977c.22.935-.84 1.671-1.633 1.181L10 16.858 5.941 19.245c-.793.49-1.854-.236-1.633-1.181l1.239-4.977-4.169-3.562c-.73-.584-.337-1.811.627-1.838L7.08 7.53 9.049 2.927z" />
                  </svg>
                <?php endfor; ?>
              </div>
              
              <p class="review-text text-center text-gray-700 leading-relaxed flex-grow"><?= htmlspecialchars($review['review']) ?></p>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- Pagination is now outside, visually at the bottom -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.reviewSwiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        },
      }
    });
  </script>



  <?php include 'includes/footer.php'; ?>
</body>

</html>