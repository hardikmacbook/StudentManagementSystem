<?php include 'includes/header.php'; ?>

<?php
// Get course ID from URL parameter
$courseId = isset($_GET['id']) ? $_GET['id'] : '';

// If no course ID is provided, redirect to courses page
if (empty($courseId)) {
  header('Location: courses.php');
  exit;
}

// Load course data from JSON file
$courseFile = 'data/' . $courseId . '.json';

if (!file_exists($courseFile)) {
  echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Error!</strong>
          <span class="block sm:inline"> Course not found.</span>
        </div>';
  include 'includes/footer.php';
  exit;
}

$courseJson = file_get_contents($courseFile);
$course = json_decode($courseJson, true);
?>

<div class="mb-8">
  <a href="courses.php" class="text-blue-600 hover:text-blue-800">
    <i class="fas fa-arrow-left mr-2"></i> Back to Courses
  </a>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
  <div class="md:flex">
    <div class="md:w-1/3 h-64 bg-gray-300">
      <?php if (isset($course['image']) && file_exists($course['image'])) { ?>
        <img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>" class="w-full h-full object-cover">
      <?php } else { ?>
        <div class="w-full h-full flex items-center justify-center bg-blue-100">
          <span class="text-blue-800 text-4xl font-bold"><?php echo $course['code']; ?></span>
        </div>
      <?php } ?>
    </div>
    <div class="p-6 md:w-2/3">
      <div class="flex justify-between items-start">
        <div>
          <h1 class="text-3xl font-bold mb-2"><?php echo $course['title']; ?></h1>
          <p class="text-gray-600 mb-4">Course Code: <?php echo $course['code']; ?></p>
        </div>
        <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full"><?php echo count($course['chapters']); ?> Chapters</span>
      </div>
      <p class="text-gray-700 mb-4"><?php echo $course['description']; ?></p>
      <div class="mt-4 pt-4 border-t border-gray-200">
        <p class="text-gray-600"><strong>Instructor:</strong> <?php echo $course['instructor']; ?></p>
      </div>
    </div>
  </div>
</div>

<h2 class="text-2xl font-bold mb-6">Course Chapters</h2>

<div class="space-y-4">
  <?php foreach ($course['chapters'] as $chapter) { ?>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
      <div class="p-6">
        <div class="flex justify-between items-center">
          <h3 class="text-xl font-bold">Chapter <?php echo $chapter['number']; ?>: <?php echo $chapter['title']; ?></h3>
          <div class="flex space-x-2">
            <a href="<?php echo $chapter['pdf']; ?>" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition duration-300">
              <i class="far fa-eye mr-2"></i> View
            </a>
            <a href="<?php echo $chapter['pdf']; ?>" download class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition duration-300">
              <i class="fas fa-download mr-2"></i> Download
            </a>
          </div>
        </div>
        <p class="text-gray-700 mt-2"><?php echo $chapter['description']; ?></p>
      </div>
    </div>
  <?php } ?>
</div>

<?php include 'includes/footer.php'; ?>