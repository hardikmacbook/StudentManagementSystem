<?php include 'includes/header.php'; ?>

<?php
// Get course ID and year from URL parameters
$courseId = isset($_GET['course_id']) ? $_GET['course_id'] : '';
$yearNumber = isset($_GET['year']) ? intval($_GET['year']) : 0;

// If no course ID or year is provided, redirect to courses page
if (empty($courseId) || $yearNumber === 0) {
  header('Location: courses.php');
  exit;
}

// Load all courses data from JSON file
$allCoursesJson = file_get_contents('data/all_courses.json');
$allCourses = json_decode($allCoursesJson, true);

// Find the specific course by ID
$course = null;
foreach ($allCourses['courses'] as $c) {
  if ($c['id'] === $courseId) {
    $course = $c;
    break;
  }
}

// If course not found, show error
if ($course === null) {
  echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Error!</strong>
          <span class="block sm:inline"> Course not found.</span>
        </div>';
  include 'includes/footer.php';
  exit;
}

// Find the specific year
$year = null;
foreach ($course['years'] as $y) {
  if ($y['year_number'] === $yearNumber) {
    $year = $y;
    break;
  }
}

// If year not found, show error
if ($year === null) {
  echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Error!</strong>
          <span class="block sm:inline"> Year not found.</span>
        </div>';
  include 'includes/footer.php';
  exit;
}
?>

<div class="mb-8">
  <a href="course_years.php?id=<?php echo $courseId; ?>" class="text-blue-600 hover:text-blue-800">
    <i class="fas fa-arrow-left mr-2"></i> Back to Years
  </a>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
  <div class="p-6">
    <h1 class="text-3xl font-bold mb-2"><?php echo $course['title']; ?> - Year <?php echo $yearNumber; ?></h1>
    <p class="text-gray-600 mb-4">Course Code: <?php echo $course['code']; ?></p>
  </div>
</div>

<h2 class="text-2xl font-bold mb-6">Subjects</h2>

<div class="space-y-4">
  <?php foreach ($year['subjects'] as $subject) { ?>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
      <div class="p-6">
        <div class="flex justify-between items-center">
          <h3 class="text-xl font-bold"><?php echo $subject['title']; ?></h3>
          <div class="flex space-x-2">
            <a href="<?php echo $subject['pdf']; ?>" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition duration-300">
              <i class="far fa-eye mr-2"></i> View
            </a>
            <a href="<?php echo $subject['pdf']; ?>" download class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition duration-300">
              <i class="fas fa-download mr-2"></i> Download
            </a>
          </div>
        </div>
        <p class="text-gray-700 mt-2"><?php echo $subject['description']; ?></p>
      </div>
    </div>
  <?php } ?>
</div>

<?php include 'includes/footer.php'; ?>