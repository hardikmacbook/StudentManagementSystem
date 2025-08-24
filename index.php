<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Open2Learn</title>
  <link rel="stylesheet" href="index.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/api_helper.php'; ?>

 <!-- Hero Section -->
<div class="relative w-full h-[600px] overflow-hidden bg-gray-900">
  <!-- Slides -->
  <div class="slider-wrapper flex transition-transform duration-700 ease-in-out" id="slider">
    <!-- Slide 1 - Image -->
    <div class="flex-shrink-0 w-full h-[600px] relative" data-slide-type="image">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/006/296/747/small_2x/bookshelf-with-books-biography-adventure-novel-poem-fantasy-love-story-detective-art-romance-banner-for-library-book-store-genre-of-literature-illustration-in-flat-style-vector.jpg" alt="University Campus" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent flex items-center slide-overlay">
        <div class="text-white max-w-3xl ml-16 animate-fade-in">
          <h1 class="text-6xl font-bold mb-6 leading-tight">Welcome to Course Portal</h1>
          <p class="text-xl mb-8 text-gray-200 leading-relaxed">Access quality education materials anytime, anywhere with our comprehensive learning platform</p>
          <a href="courses.php" class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-10 rounded-full transition duration-300 inline-flex items-center shadow-xl hover:shadow-2xl transform hover:scale-105">
            <span class="text-lg">Explore Courses</span>
            <i class="fas fa-arrow-right ml-3"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Slide 2 - Video -->
    <div class="flex-shrink-0 w-full h-[600px] relative" data-slide-type="video">
      <video 
        class="w-full h-full object-cover" 
        muted 
        preload="metadata"
        poster="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80"
      >
        <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
        <source src="https://sample-videos.com/zip/10/mp4/SampleVideo_1920x1080_30mb.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-transparent to-transparent flex items-center slide-overlay opacity-100 transition-opacity duration-500">
        <div class="text-white max-w-3xl ml-16">
          <h1 class="text-6xl font-bold mb-6 leading-tight">Interactive Learning</h1>
          <p class="text-xl mb-8 text-gray-200 leading-relaxed">Experience immersive educational content with our video-based learning modules</p>
          <a href="courses.php" class="bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 text-white font-bold py-4 px-10 rounded-full transition duration-300 inline-flex items-center shadow-xl hover:shadow-2xl transform hover:scale-105">
            <span class="text-lg">View Programs</span>
            <i class="fas fa-play ml-3"></i>
          </a>
        </div>
      </div>
      <!-- Video Controls -->
      <div class="absolute bottom-20 left-16 flex items-center space-x-4 video-controls opacity-0 transition-opacity duration-300">
        <button class="play-pause-btn bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-4 rounded-full transition duration-300 shadow-lg">
          <i class="fas fa-play text-xl"></i>
        </button>
        <button class="stop-btn bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-4 rounded-full transition duration-300 shadow-lg">
          <i class="fas fa-stop text-xl"></i>
        </button>
        <button class="mute-btn bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-4 rounded-full transition duration-300 shadow-lg">
          <i class="fas fa-volume-mute text-xl"></i>
        </button>
        <div class="flex items-center space-x-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
          <span class="text-white text-sm font-medium current-time">00:00</span>
          <span class="text-white/60">/</span>
          <span class="text-white text-sm font-medium duration-time">00:00</span>
        </div>
      </div>
    </div>

    <!-- Slide 3 - Image -->
    <div class="flex-shrink-0 w-full h-[600px] relative" data-slide-type="image">
      <img src="https://wallpapercrafter.com/desktop/159281-library-university-books-book-shelf-bookshelves.jpg" alt="Library Interior" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent flex items-center slide-overlay">
        <div class="text-white max-w-3xl ml-16">
          <h1 class="text-6xl font-bold mb-6 leading-tight">Comprehensive Learning</h1>
          <p class="text-xl mb-8 text-gray-200 leading-relaxed">Structured courses with semester-wise organization tailored to your academic journey</p>
          <a href="courses.php" class="bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white font-bold py-4 px-10 rounded-full transition duration-300 inline-flex items-center shadow-xl hover:shadow-2xl transform hover:scale-105">
            <span class="text-lg">Get Started</span>
            <i class="fas fa-rocket ml-3"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Slide 4 - Video -->
    <div class="flex-shrink-0 w-full h-[600px] relative" data-slide-type="video">
      <video 
        class="w-full h-full object-cover" 
        muted 
        preload="metadata"
        poster="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80"
      >
        <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4" type="video/mp4">
        <source src="https://sample-videos.com/zip/10/mp4/SampleVideo_1920x1080_20mb.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-transparent to-transparent flex items-center slide-overlay opacity-100 transition-opacity duration-500">
        <div class="text-white max-w-3xl ml-16">
          <h1 class="text-6xl font-bold mb-6 leading-tight">Learn at Your Pace</h1>
          <p class="text-xl mb-8 text-gray-200 leading-relaxed">Download or view course materials online with flexible learning options</p>
          <a href="courses.php" class="bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-700 hover:to-emerald-800 text-white font-bold py-4 px-10 rounded-full transition duration-300 inline-flex items-center shadow-xl hover:shadow-2xl transform hover:scale-105">
            <span class="text-lg">Start Learning</span>
            <i class="fas fa-graduation-cap ml-3"></i>
          </a>
        </div>
      </div>
      <!-- Video Controls -->
      <div class="absolute bottom-20 left-16 flex items-center space-x-4 video-controls opacity-0 transition-opacity duration-300">
        <button class="play-pause-btn bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-4 rounded-full transition duration-300 shadow-lg">
          <i class="fas fa-play text-xl"></i>
        </button>
        <button class="stop-btn bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-4 rounded-full transition duration-300 shadow-lg">
          <i class="fas fa-stop text-xl"></i>
        </button>
        <button class="mute-btn bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-4 rounded-full transition duration-300 shadow-lg">
          <i class="fas fa-volume-mute text-xl"></i>
        </button>
        <div class="flex items-center space-x-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
          <span class="text-white text-sm font-medium current-time">00:00</span>
          <span class="text-white/60">/</span>
          <span class="text-white text-sm font-medium duration-time">00:00</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation Arrows -->
  <button id="prev" class="absolute top-1/2 left-6 -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white p-4 rounded-full transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-110" aria-label="Previous Slide">
    <i class="fas fa-chevron-left text-xl"></i>
  </button>
  <button id="next" class="absolute top-1/2 right-6 -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white p-4 rounded-full transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-110" aria-label="Next Slide">
    <i class="fas fa-chevron-right text-xl"></i>
  </button>

  <!-- Auto Play Toggle -->
  <div class="absolute top-6 right-6 flex items-center space-x-3">
    <span class="text-white/80 text-sm font-medium">Auto Play</span>
    <button id="autoPlayToggle" class="relative inline-flex h-8 w-14 items-center justify-center rounded-full bg-green-500 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-white/25" aria-label="Toggle Auto Play">
      <span class="absolute left-1 top-1 h-6 w-6 rounded-full bg-white transition-transform duration-300 transform translate-x-0" id="toggleBall"></span>
      <span class="sr-only">Toggle Auto Play</span>
    </button>
  </div>

  <!-- Slide Indicators -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3">
    <button class="w-4 h-4 rounded-full bg-white/40 hover:bg-white/80 transition duration-300 slide-indicator active backdrop-blur-sm" data-index="0">
      <span class="sr-only">Slide 1</span>
    </button>
    <button class="w-4 h-4 rounded-full bg-white/40 hover:bg-white/80 transition duration-300 slide-indicator backdrop-blur-sm" data-index="1">
      <span class="sr-only">Slide 2</span>
    </button>
    <button class="w-4 h-4 rounded-full bg-white/40 hover:bg-white/80 transition duration-300 slide-indicator backdrop-blur-sm" data-index="2">
      <span class="sr-only">Slide 3</span>
    </button>
    <button class="w-4 h-4 rounded-full bg-white/40 hover:bg-white/80 transition duration-300 slide-indicator backdrop-blur-sm" data-index="3">
      <span class="sr-only">Slide 4</span>
    </button>
  </div>

  <!-- Progress Bar -->
  <!-- Removed progress bar as requested -->
</div>

<style>
@keyframes fade-in {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
  animation: fade-in 1s ease-out;
}

.video-controls.show {
  opacity: 1 !important;
}

.slide-overlay.hide {
  opacity: 0 !important;
}

.slide-indicator.active {
  background-color: rgba(255, 255, 255, 0.9) !important;
  transform: scale(1.2);
}

.auto-play-off {
  background-color: #ef4444 !important;
}

.auto-play-off .toggle-ball {
  transform: translateX(0) !important;
}

.auto-play-on .toggle-ball {
  transform: translateX(24px) !important;
}
</style>

<script>
const slider = document.getElementById('slider');
const totalSlides = slider.children.length;
const indicators = document.querySelectorAll('.slide-indicator');
const autoPlayToggle = document.getElementById('autoPlayToggle');
const toggleBall = document.getElementById('toggleBall');
let index = 0;
let autoPlayInterval;
let isVideoPlaying = false;
let autoPlayEnabled = true;

// Format time helper
function formatTime(seconds) {
  const mins = Math.floor(seconds / 60);
  const secs = Math.floor(seconds % 60);
  return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
}

// Update active indicator
function updateIndicators() {
  indicators.forEach((indicator, i) => {
    indicator.classList.toggle('active', i === index);
  });
}

// Auto Play Toggle functionality
autoPlayToggle.addEventListener('click', () => {
  autoPlayEnabled = !autoPlayEnabled;
  
  if (autoPlayEnabled) {
    autoPlayToggle.classList.remove('auto-play-off');
    autoPlayToggle.classList.add('bg-green-500');
    autoPlayToggle.classList.remove('bg-red-500');
    toggleBall.style.transform = 'translateX(24px)';
    startAutoPlay();
  } else {
    autoPlayToggle.classList.add('auto-play-off');
    autoPlayToggle.classList.remove('bg-green-500');
    autoPlayToggle.classList.add('bg-red-500');
    toggleBall.style.transform = 'translateX(0)';
    clearInterval(autoPlayInterval);
  }
});

// Handle video controls
function setupVideoControls(videoSlide, video) {
  const playPauseBtn = videoSlide.querySelector('.play-pause-btn');
  const stopBtn = videoSlide.querySelector('.stop-btn');
  const muteBtn = videoSlide.querySelector('.mute-btn');
  const currentTimeSpan = videoSlide.querySelector('.current-time');
  const durationSpan = videoSlide.querySelector('.duration-time');
  const videoControls = videoSlide.querySelector('.video-controls');
  const overlay = videoSlide.querySelector('.slide-overlay');

  // Show controls on video hover
  video.addEventListener('mouseenter', () => {
    videoControls.classList.add('show');
  });

  videoSlide.addEventListener('mouseleave', () => {
    if (!video.paused) {
      videoControls.classList.remove('show');
    }
  });

  // Play/Pause functionality
  playPauseBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    if (video.paused) {
      video.play();
      playPauseBtn.innerHTML = '<i class="fas fa-pause text-xl"></i>';
      overlay.classList.add('hide');
      isVideoPlaying = true;
      clearInterval(autoPlayInterval);
    } else {
      video.pause();
      playPauseBtn.innerHTML = '<i class="fas fa-play text-xl"></i>';
      overlay.classList.remove('hide');
      isVideoPlaying = false;
      if (autoPlayEnabled) startAutoPlay();
    }
  });

  // Stop functionality
  stopBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    video.pause();
    video.currentTime = 0;
    playPauseBtn.innerHTML = '<i class="fas fa-play text-xl"></i>';
    overlay.classList.remove('hide');
    videoControls.classList.add('show');
    isVideoPlaying = false;
    if (autoPlayEnabled) startAutoPlay();
  });

  // Mute/Unmute functionality
  muteBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    video.muted = !video.muted;
    muteBtn.innerHTML = video.muted ? 
      '<i class="fas fa-volume-mute text-xl"></i>' : 
      '<i class="fas fa-volume-up text-xl"></i>';
  });

  // Time update
  video.addEventListener('timeupdate', () => {
    if (currentTimeSpan) currentTimeSpan.textContent = formatTime(video.currentTime);
  });

  video.addEventListener('loadedmetadata', () => {
    if (durationSpan) durationSpan.textContent = formatTime(video.duration);
  });

  // Video ended event
  video.addEventListener('ended', () => {
    playPauseBtn.innerHTML = '<i class="fas fa-play text-xl"></i>';
    overlay.classList.remove('hide');
    videoControls.classList.add('show');
    isVideoPlaying = false;
    if (autoPlayEnabled) startAutoPlay();
  });
}

// Setup all video slides
function setupVideos() {
  const videoSlides = document.querySelectorAll('[data-slide-type="video"]');
  videoSlides.forEach(slide => {
    const video = slide.querySelector('video');
    if (video) {
      setupVideoControls(slide, video);
    }
  });
}

// Auto-play functionality
function startAutoPlay() {
  clearInterval(autoPlayInterval);
  if (!isVideoPlaying && autoPlayEnabled) {
    autoPlayInterval = setInterval(() => {
      nextSlide();
    }, 6000);
  }
}

// Next slide function
function nextSlide() {
  // Pause current video if playing
  const currentSlide = slider.children[index];
  if (currentSlide.dataset.slideType === 'video') {
    const video = currentSlide.querySelector('video');
    const overlay = currentSlide.querySelector('.slide-overlay');
    const controls = currentSlide.querySelector('.video-controls');
    const playBtn = currentSlide.querySelector('.play-pause-btn');
    if (video && !video.paused) {
      video.pause();
      playBtn.innerHTML = '<i class="fas fa-play text-xl"></i>';
      overlay.classList.remove('hide');
      controls.classList.remove('show');
    }
  }

  index = (index + 1) % totalSlides;
  slider.style.transform = `translateX(-${index * 100}%)`;
  updateIndicators();
  isVideoPlaying = false;
}

// Previous slide function
function prevSlide() {
  // Pause current video if playing
  const currentSlide = slider.children[index];
  if (currentSlide.dataset.slideType === 'video') {
    const video = currentSlide.querySelector('video');
    const overlay = currentSlide.querySelector('.slide-overlay');
    const controls = currentSlide.querySelector('.video-controls');
    const playBtn = currentSlide.querySelector('.play-pause-btn');
    if (video && !video.paused) {
      video.pause();
      playBtn.innerHTML = '<i class="fas fa-play text-xl"></i>';
      overlay.classList.remove('hide');
      controls.classList.remove('show');
    }
  }

  index = (index - 1 + totalSlides) % totalSlides;
  slider.style.transform = `translateX(-${index * 100}%)`;
  updateIndicators();
  isVideoPlaying = false;
}

// Navigation event listeners
document.getElementById('next').addEventListener('click', () => {
  nextSlide();
  if (autoPlayEnabled) startAutoPlay();
});

document.getElementById('prev').addEventListener('click', () => {
  prevSlide();
  if (autoPlayEnabled) startAutoPlay();
});

// Indicator clicks
indicators.forEach((indicator, i) => {
  indicator.addEventListener('click', () => {
    // Pause current video if playing
    const currentSlide = slider.children[index];
    if (currentSlide.dataset.slideType === 'video') {
      const video = currentSlide.querySelector('video');
      const overlay = currentSlide.querySelector('.slide-overlay');
      const controls = currentSlide.querySelector('.video-controls');
      const playBtn = currentSlide.querySelector('.play-pause-btn');
      if (video && !video.paused) {
        video.pause();
        playBtn.innerHTML = '<i class="fas fa-play text-xl"></i>';
        overlay.classList.remove('hide');
        controls.classList.remove('show');
      }
    }

    index = i;
    slider.style.transform = `translateX(-${index * 100}%)`;
    updateIndicators();
    isVideoPlaying = false;
    if (autoPlayEnabled) startAutoPlay();
  });
});

// Initialize
setupVideos();
updateIndicators();
if (autoPlayEnabled) startAutoPlay();

// Pause auto-play when user interacts
document.addEventListener('visibilitychange', () => {
  if (document.hidden) {
    clearInterval(autoPlayInterval);
  } else {
    if (autoPlayEnabled) startAutoPlay();
  }
});
    startAutoPlay();
  });
}

// Setup all video slides
function setupVideos() {
  const videoSlides = document.querySelectorAll('[data-slide-type="video"]');
  videoSlides.forEach(slide => {
    const video = slide.querySelector('video');
    if (video) {
      setupVideoControls(slide, video);
    }
  });
}

// Auto-play functionality
function startAutoPlay() {
  clearInterval(autoPlayInterval);
  if (!isVideoPlaying) {
    autoPlayInterval = setInterval(() => {
      nextSlide();
    }, 6000);
  }
}

// Next slide function
function nextSlide() {
  // Pause current video if playing
  const currentSlide = slider.children[index];
  if (currentSlide.dataset.slideType === 'video') {
    const video = currentSlide.querySelector('video');
    const overlay = currentSlide.querySelector('.slide-overlay');
    const controls = currentSlide.querySelector('.video-controls');
    if (video && !video.paused) {
      video.pause();
      overlay.classList.remove('hide');
      controls.classList.remove('show');
    }
  }

  index = (index + 1) % totalSlides;
  slider.style.transform = `translateX(-${index * 100}%)`;
  updateIndicators();
  isVideoPlaying = false;
}

// Previous slide function
function prevSlide() {
  // Pause current video if playing
  const currentSlide = slider.children[index];
  if (currentSlide.dataset.slideType === 'video') {
    const video = currentSlide.querySelector('video');
    const overlay = currentSlide.querySelector('.slide-overlay');
    const controls = currentSlide.querySelector('.video-controls');
    if (video && !video.paused) {
      video.pause();
      overlay.classList.remove('hide');
      controls.classList.remove('show');
    }
  }

  index = (index - 1 + totalSlides) % totalSlides;
  slider.style.transform = `translateX(-${index * 100}%)`;
  updateIndicators();
  isVideoPlaying = false;
}

// Navigation event listeners
document.getElementById('next').addEventListener('click', () => {
  nextSlide();
  startAutoPlay();
});

document.getElementById('prev').addEventListener('click', () => {
  prevSlide();
  startAutoPlay();
});

// Indicator clicks
indicators.forEach((indicator, i) => {
  indicator.addEventListener('click', () => {
    // Pause current video if playing
    const currentSlide = slider.children[index];
    if (currentSlide.dataset.slideType === 'video') {
      const video = currentSlide.querySelector('video');
      const overlay = currentSlide.querySelector('.slide-overlay');
      const controls = currentSlide.querySelector('.video-controls');
      if (video && !video.paused) {
        video.pause();
        overlay.classList.remove('hide');
        controls.classList.remove('show');
      }
    }

    index = i;
    slider.style.transform = `translateX(-${index * 100}%)`;
    updateIndicators();
    isVideoPlaying = false;
    startAutoPlay();
  });
});

// Initialize
setupVideos();
updateIndicators();
startAutoPlay();

// Pause auto-play when user interacts
document.addEventListener('visibilitychange', () => {
  if (document.hidden) {
    clearInterval(autoPlayInterval);
  } else {
    startAutoPlay();
  }
});
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
      // Use API helper function to fetch courses data
      require_once './includes/api_helper.php'; // Include your API helper functions file if needed

      $allCoursesData = fetchCoursesData();  // Fetch data from API
      $courses = $allCoursesData['courses'];

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
      <?php
      $servername = "localhost"; // you can change it to your server name
      $username = "root"; // enter you MySQL User Name
      $password = ""; // enter your hosting panel password
      $dbname = "open2learn"; // your database name

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Fetch features data
      $sql = "SELECT * FROM features";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo '<div class="grid grid-cols-1 md:grid-cols-3 gap-8">';
        while ($row = $result->fetch_assoc()) {
          echo '<div class="p-8 border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:border-[#1E3A8A] transition duration-300">';
          echo '<div class="text-4xl mb-4"><i class="' . htmlspecialchars($row["icon_class"]) . ' text-[#1E3A8A]"></i></div>';
          echo '<h3 class="text-xl font-semibold mb-2 text-gray-900">' . htmlspecialchars($row["title"]) . '</h3>';
          echo '<p class="text-gray-600">' . htmlspecialchars($row["description"]) . '</p>';
          echo '</div>';
        }
        echo '</div>';
      } else {
        echo "No features available.";
      }

      $conn->close();
      ?>
    </div>
  </div>

  <!-- Reviews Section -->


  <?php
  $servername = "localhost"; // you can change it to your server name
  $username = "root"; // enter you MySQL User Name
  $password = ""; // enter your hosting panel password
  $dbname = "open2learn"; // your database name

  // कनेक्शन बनाएं
  $conn = new mysqli($servername, $username, $password, $dbname);

  // कनेक्शन चेक करें
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // अपनी टेबल का नाम मान लेते हैं "reviews"
  $sql = "SELECT name, review, rating FROM reviews";
  $result = $conn->query($sql);

  $valid_reviews = [];
  if ($result->num_rows > 0) {
    // हर एक रो को ऐरे में डालें
    while ($row = $result->fetch_assoc()) {
      // वैलिड होने पर ही ऐरे में जोड़ें, जैसे JSON में था
      if (isset($row['name'], $row['review'], $row['rating'])) {
        $valid_reviews[] = $row;
      }
    }
  }

  // कनेक्शन बंद करें
  $conn->close();
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
            <article class="review-card p-6 w-[300px] border border-gray-200 hover:border-[#1E3A8A] h-[320px] rounded-3xl mx-auto">
              <div class="avatar bg-[#1E3A8A] text-white font-bold h-14 w-14 [clip-path:circle(35%)] flex items-center justify-center text-2xl mx-auto mb-4">
                <?= htmlspecialchars(mb_substr($review['name'], 0, 1)) ?>
              </div>
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

    <!-- Swiper pagination -->
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