<?php include 'includes/header.php'; ?>

<!-- Hero Slider -->
<div class="relative w-full h-[500px] overflow-hidden">
  <!-- Slides -->
  <div class="slider-wrapper flex transition-transform duration-700 ease-in-out" id="slider">
    <div class="flex-shrink-0 w-full h-[500px]">
      <img src="https://source.unsplash.com/1600x900/?university" alt="University Campus" class="w-full h-full object-cover"/>
    </div>
    <div class="flex-shrink-0 w-full h-[500px]">
      <img src="https://source.unsplash.com/1600x900/?library" alt="Library Interior" class="w-full h-full object-cover"/>
    </div>
    <div class="flex-shrink-0 w-full h-[500px]">
      <img src="https://source.unsplash.com/1600x900/?students" alt="Students Studying" class="w-full h-full object-cover"/>
    </div>
  </div>

  <!-- Navigation Arrows -->
  <button id="prev" class="absolute top-1/2 left-4 -translate-y-1/2 bg-black/50 text-white p-3 rounded-full hover:bg-black" aria-label="Previous Slide">
    <i class="fas fa-chevron-left"></i>
  </button>
  <button id="next" class="absolute top-1/2 right-4 -translate-y-1/2 bg-black/50 text-white p-3 rounded-full hover:bg-black" aria-label="Next Slide">
    <i class="fas fa-chevron-right"></i>
  </button>
</div>

<script>
  const slider = document.getElementById('slider');
  const totalSlides = slider.children.length;
  let index = 0;

  document.getElementById('next').addEventListener('click', () => {
    index = (index + 1) % totalSlides;
    slider.style.transform = `translateX(-${index * 100}%)`;
  });

  document.getElementById('prev').addEventListener('click', () => {
    index = (index - 1 + totalSlides) % totalSlides;
    slider.style.transform = `translateX(-${index * 100}%)`;
  });

  // Auto-play every 5 seconds
  setInterval(() => {
    index = (index + 1) % totalSlides;
    slider.style.transform = `translateX(-${index * 100}%)`;
  }, 5000);
</script>




<div class="max-w-6xl mx-auto">
  <h2 class="text-3xl font-bold text-center mb-8">Featured Courses</h2>
  
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
    $coursesJson = file_get_contents('data/courses.json');
    $courses = json_decode($coursesJson, true);
    
    // Display only the first 3 courses
    $featuredCourses = array_slice($courses, 0, 3);
    
    foreach ($featuredCourses as $course) {
    ?>
      <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-gray-300">
          <?php if (isset($course['image']) && file_exists($course['image'])) { ?>
            <img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>" class="w-full h-full object-cover">
          <?php } else { ?>
            <div class="w-full h-full flex items-center justify-center bg-blue-100">
              <span class="text-blue-800 text-2xl font-bold"><?php echo $course['code']; ?></span>
            </div>
          <?php } ?>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2"><?php echo $course['title']; ?></h3>
          <p class="text-gray-600 mb-4"><?php echo $course['instructor']; ?></p>
          <p class="text-gray-700 mb-4"><?php echo substr($course['description'], 0, 100); ?>...</p>
          <a href="course.php?id=<?php echo $course['id']; ?>" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300">View Course</a>
        </div>
      </div>
    <?php } ?>
  </div>
  
  <div class="text-center mt-8">
    <a href="courses.php" class="inline-block text-blue-600 hover:text-blue-800 font-semibold">View All Courses →</a>
  </div>
</div>

<?php include 'includes/footer.php'; ?>