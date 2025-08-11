<?php include 'includes/header.php'; ?>

<div class="bg-blue-50 py-12 px-4 rounded-lg shadow-sm mb-12">
  <div class="max-w-4xl mx-auto text-center">
    <h1 class="text-4xl font-bold text-blue-800 mb-4">Welcome to Course Portal</h1>
    <p class="text-xl text-gray-700 mb-8">Access quality educational materials for your courses</p>
    <a href="courses.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Browse Courses</a>
  </div>
</div>

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