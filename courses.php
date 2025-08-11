<?php include 'includes/header.php'; ?>

<h1 class="text-3xl font-bold mb-8 text-blue-800">All Courses</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
  <?php
  $coursesJson = file_get_contents('data/courses.json');
  $courses = json_decode($coursesJson, true);
  
  foreach ($courses as $course) {
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
        <p class="text-gray-600 mb-4">Instructor: <?php echo $course['instructor']; ?></p>
        <p class="text-gray-700 mb-4"><?php echo substr($course['description'], 0, 100); ?>...</p>
        <a href="course.php?id=<?php echo $course['id']; ?>" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300">View Course</a>
      </div>
    </div>
  <?php } ?>
</div>

<?php include 'includes/footer.php'; ?>