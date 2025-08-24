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
   <?php
// --- SLIDES ARRAY, customize as you like ---
$slides = [
    [
        'type' => 'image',
        'src' => 'https://static.vecteezy.com/system/resources/thumbnails/006/296/747/small_2x/bookshelf-with-books-biography-adventure-novel-poem-fantasy-love-story-detective-art-romance-banner-for-library-book-store-genre-of-literature-illustration-in-flat-style-vector.jpg',
        'headline' => 'Welcome to Course Portal',
        'subtext' => 'Access quality education materials anytime, anywhere',
        'btn_text' => 'Explore Courses',
        'btn_link' => 'courses.php'
    ],
    [
        'type' => 'image',
        'src' => 'https://wallpapercrafter.com/desktop/159281-library-university-books-book-shelf-bookshelves.jpg',
        'headline' => 'Comprehensive Learning',
        'subtext' => 'Structured courses with semester-wise organization',
        'btn_text' => 'View Programs',
        'btn_link' => 'courses.php'
    ],
    [
        'type' => 'video',
        'src' => 'https://www.w3schools.com/html/mov_bbb.mp4',
        'poster' => 'https://www.readlocalbc.ca/wp-content/uploads/2025/05/eBookshelf-banner.jpg'
    ],
    [
        'type' => 'image',
        'src' => 'https://www.readlocalbc.ca/wp-content/uploads/2025/05/eBookshelf-banner.jpg',
        'headline' => 'Learn at Your Pace',
        'subtext' => 'Download or view course materials online',
        'btn_text' => 'Get Started',
        'btn_link' => 'courses.php'
    ]
];
?>
<!-- SLIDER START -->
<div id="heroSlider" class="c-hero-slider">
    <div class="c-hero-slider__inner" id="heroSliderInner">
        <?php foreach ($slides as $s): ?>
            <div class="c-hero-slide" data-type="<?= $s['type'] ?>">
                <?php if($s['type'] === 'image'): ?>
                    <img src="<?= htmlspecialchars($s['src']) ?>" alt="<?= htmlspecialchars($s['headline']) ?>">
                    <div class="c-hero-overlay">
                        <div class="c-hero-content">
                            <h2><?= htmlspecialchars($s['headline']) ?></h2>
                            <p><?= htmlspecialchars($s['subtext']) ?></p>
                            <a href="<?= htmlspecialchars($s['btn_link']) ?>" class="c-hero-btn"><?= htmlspecialchars($s['btn_text']) ?></a>
                        </div>
                    </div>
                <?php else: ?>
                    <video src="<?= htmlspecialchars($s['src']) ?>" poster="<?= isset($s['poster']) ? htmlspecialchars($s['poster']) : '' ?>" controls></video>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="c-hero-nav c-hero-nav--left" id="heroPrev" aria-label="Previous Slide">&#8592;</button>
    <button class="c-hero-nav c-hero-nav--right" id="heroNext" aria-label="Next Slide">&#8594;</button>
    <div class="c-hero-indicators" id="heroIndicators">
        <?php foreach ($slides as $idx => $s): ?>
            <button class="c-hero-indicator" data-index="<?= $idx ?>" <?= $idx === 0 ? 'aria-current="true"' : '' ?>></button>
        <?php endforeach; ?>
    </div>
</div>
<!-- STYLES -->
<style>
.c-hero-slider {
    position: relative;
    width: 100%;
    max-width: 1150px;
    margin: 3rem auto 2rem auto;
    aspect-ratio: 16/6;
    border-radius: 24px;
    overflow: hidden;
    background: #22243a;
    box-shadow: 0 8px 40px #17182133;
}
.c-hero-slider__inner {
    display: flex;
    height: 100%;
    transition: transform 0.65s cubic-bezier(.82,0,.18,1);
}
.c-hero-slide {
    position: relative;
    flex: 0 0 100%;
    width: 100%;
    display: flex;
    align-items: stretch;
    justify-content: stretch;
    min-height: 300px;
    background: #1a1a2d;
    user-select: none;
}
.c-hero-slide img, .c-hero-slide video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    background: #191b2d;
    border-radius: 0;
}
.c-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg,rgba(0,0,0,.9) 8%,rgba(30,30,54,.55) 70%,rgba(0,0,0,0) 100%);
    display: flex;
    align-items: center;
    z-index: 2;
}
.c-hero-content {
    color: #fff;
    padding-left: 3vw;
    max-width: 480px;
    animation: hero_fadein .7s .1s both;
}
@keyframes hero_fadein {from {opacity:0;transform:translateY(20px);} to {opacity:1;transform:translateY(0)}}
.c-hero-content h2 {
    font-size: 2.4rem;
    font-weight: 900;
    margin: 0 0 1.1rem 0;
    text-shadow: 0 2px 24px #05032a88;
}
.c-hero-content p {
    font-size: 1.16rem;
    margin: 0 0 1.2rem 0;
    color: #e3ebfc;
    text-shadow: 0 2px 10px #02162333;
}
.c-hero-btn {
    display: inline-block;
    padding: 0.82rem 2.08rem;
    font-size: 1.14rem;
    font-weight: 700;
    border-radius: 11px;
    background: linear-gradient(94deg,#3451ff 34%,#a471c3 96%);
    color: #fff;
    text-decoration: none;
    border: none;
    box-shadow: 0 4px 16px #3946b633;
    transition: background 0.19s, filter .26s;
}
.c-hero-btn:hover,
.c-hero-btn:focus { background: linear-gradient(94deg,#1e2a78,#8544b4); filter: brightness(1.08);}
.c-hero-slide[data-type="video"] .c-hero-overlay {display: none;}
.c-hero-nav {
    position: absolute;
    top: 50%; transform: translateY(-50%);
    background: rgba(33,33,44,0.55);
    color: #fff;
    border: none;
    border-radius: 50%;
    box-shadow: 0 2px 8px #0004;
    width: 2.6rem; height: 2.6rem;
    font-size: 1.4rem;
    z-index: 10;
    cursor: pointer;
    transition: background .16s;
    display: flex; align-items: center; justify-content: center;
}
.c-hero-nav:hover { background: #3451ff; }
.c-hero-nav--left { left: 1.2rem;}
.c-hero-nav--right { right: 1.2rem;}
.c-hero-indicators {
    position: absolute; left: 50%; bottom: 1.3rem; transform: translateX(-50%);
    display: flex; gap: 13px; z-index: 19;
}
.c-hero-indicator {
    width: 13px; height: 13px; border-radius: 50%;
    background: #fff4; border: none;
    box-shadow: 0 1px 16px #615fff15;
    cursor: pointer;
    transition: background 0.18s, transform 0.2s;
}
.c-hero-indicator[aria-current="true"] {background: #3451ff; transform: scale(1.15);}
@media (max-width: 920px) {
    .c-hero-slider {aspect-ratio: 16/9; max-width:96vw}
    .c-hero-content {max-width: 340px; padding-left: 4vw;}
    .c-hero-content h2 {font-size:1.3rem;}
}
@media (max-width: 600px) {
    .c-hero-slider {aspect-ratio: 16/13;}
    .c-hero-content {padding-left: 6vw;max-width:99vw;}
    .c-hero-nav {width:2rem;height:2rem;}
    .c-hero-indicator {width:10px; height:10px;}
    .c-hero-btn {font-size:0.99rem;padding:.7rem 1.2rem;}
}
</style>
<!-- JS LOGIC -->
<script>
(function(){
    const slider = document.getElementById('heroSlider'),
          slides = slider.querySelectorAll('.c-hero-slide'),
          inner = document.getElementById('heroSliderInner'),
          indicators = slider.querySelectorAll('.c-hero-indicator'),
          btnPrev = document.getElementById('heroPrev'),
          btnNext = document.getElementById('heroNext');

    let index = 0, autoplay, transitioning = false, touchX = null, touchY = null, ignoreTouch = false;

    function goTo(n) {
        if(n === index || transitioning) return;
        transitioning = true;
        index = (n + slides.length) % slides.length;
        inner.style.transform = `translateX(-${index*100}%)`;
        indicators.forEach((b,i)=>b.toggleAttribute('aria-current', i===index));
        setTimeout(()=>transitioning=false, 370);
        handleVideoPause();
    }

    function next() { goTo(index+1); }
    function prev() { goTo(index-1); }

    // Click events
    btnPrev.onclick = prev;
    btnNext.onclick = next;
    indicators.forEach((b,i)=>b.onclick=()=>goTo(i));

    // Keyboard navigation
    slider.tabIndex = 0;
    slider.onkeydown = e=>{
        if(e.key === "ArrowRight") next();
        if(e.key === "ArrowLeft") prev();
    };

    // Touch/swipe logic
    inner.addEventListener('touchstart', function(e){
        if(ignoreTouch) return;
        touchX = e.touches[0].clientX;
        touchY = e.touches[0].clientY;
    }, {passive:true});
    inner.addEventListener('touchmove', function(e){
        if(ignoreTouch || touchX === null) return;
        let dX = e.touches[0].clientX - touchX;
        let dY = e.touches[0].clientY - touchY;
        if(Math.abs(dX) > 40 && Math.abs(dY) < 28){
            goTo(index - Math.sign(dX));
            touchX = null; touchY = null;
        }
    }, {passive:true});
    inner.addEventListener('touchend', ()=>{touchX=null; touchY=null});

    // Pause/play for video
    function handleVideoPause() {
        slides.forEach((s,i)=>{
            if(s.dataset.type === 'video'){
                let vid = s.querySelector('video');
                vid.pause(); vid.currentTime = 0;
                if(i === index){
                    // when slide is shown, nothing (user can press play)
                    ignoreTouch = false;
                }
            }
        });
    }

    // When a video is played, stop autoplay and disable swipe left/right
    slides.forEach(s=>{
        if(s.dataset.type === "video"){
            let vid = s.querySelector('video');
            vid.addEventListener('play', ()=>{
                clearInterval(autoplay); ignoreTouch=true;
            });
            vid.addEventListener('pause', ()=>{
                if(index === Array.from(slides).indexOf(s)){
                    ignoreTouch = false;
                    startAutoplay();
                }
            });
            vid.addEventListener('ended', ()=>{
                ignoreTouch = false;
                next();
            });
        }
    });

    // Autoplay for images only
    function startAutoplay(){
        clearInterval(autoplay);
        autoplay = setInterval(()=>{
            if(slides[index].dataset.type !== 'video'){
                next();
            }
        }, 5500);
    }
    slider.addEventListener('mouseenter', ()=>clearInterval(autoplay));
    slider.addEventListener('mouseleave', ()=>startAutoplay());

    // Responsive (fix jump on resize)
    window.addEventListener('resize', ()=>{ inner.style.transform = `translateX(-${index*100}%)`; });

    // Init
    goTo(0);
    startAutoplay();
})();
</script>
<!-- SLIDER END -->


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