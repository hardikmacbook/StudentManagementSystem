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





<div class="max-w-6xl mx-auto px-4 py-12">
  <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Featured Courses</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
    <?php
    $coursesJson = file_get_contents('data/courses.json');
    $courses = json_decode($coursesJson, true);

    $featuredCourses = array_slice($courses, 0, 3);

    foreach ($featuredCourses as $course) {
    ?>
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300">
        <div class="relative h-56 overflow-hidden">
          <?php if (isset($course['image']) && file_exists($course['image'])) { ?>
            <img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
          <?php } else { ?>
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-100 to-blue-50">
              <span class="text-blue-800 text-2xl font-bold"><?php echo $course['code']; ?></span>
            </div>
          <?php } ?>
        </div>
        
        <div class="p-6 flex flex-col h-full">
          <h3 class="text-xl font-bold mb-2 text-gray-800"><?php echo $course['title']; ?></h3>
          <p class="text-sm text-gray-500 mb-4">Instructor: <?php echo $course['instructor']; ?></p>
          <p class="text-gray-600 flex-grow"><?php echo substr($course['description'], 0, 100); ?>...</p>
          <div class="mt-6">
            <a href="course.php?id=<?php echo $course['id']; ?>" class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-5 rounded-lg shadow-md transition duration-300">
              View Course
            </a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="text-center mt-12">
    <a href="courses.php" class="inline-block text-blue-600 hover:text-blue-800 font-semibold transition duration-300">View All Courses →</a>
  </div>
</div>


<?php include 'includes/footer.php'; ?>