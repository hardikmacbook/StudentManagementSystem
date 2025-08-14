<?php
include 'includes/header.php';

// === Get URL Parameters ===
$courseId = $_GET['course_id'] ?? '';
$yearNumber = isset($_GET['year']) ? intval($_GET['year']) : 0;
$semesterNumber = isset($_GET['semester']) ? intval($_GET['semester']) : 0;

// Redirect if missing params
if (empty($courseId) || $yearNumber === 0 || $semesterNumber === 0) {
    header('Location: courses.php');
    exit;
}

// === Load all courses ===
$data = json_decode(file_get_contents('data/all_courses.json'), true);
$courses = $data['courses'] ?? [];

// Find course
$course = null;
foreach ($courses as $c) {
    if ($c['id'] === $courseId) {
        $course = $c;
        break;
    }
}
if (!$course) {
    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <strong class="font-bold">Error!</strong> <span>Course not found.</span>
          </div>';
    include 'includes/footer.php';
    exit;
}

// Find year
$year = null;
foreach ($course['years'] as $y) {
    if ($y['year_number'] === $yearNumber) {
        $year = $y;
        break;
    }
}
if (!$year) {
    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <strong class="font-bold">Error!</strong> <span>Year not found.</span>
          </div>';
    include 'includes/footer.php';
    exit;
}

// Find semester
$semester = null;
foreach ($year['semesters'] as $s) {
    if ($s['semester_number'] === $semesterNumber) {
        $semester = $s;
        break;
    }
}
if (!$semester) {
    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <strong class="font-bold">Error!</strong> <span>Semester not found.</span>
          </div>';
    include 'includes/footer.php';
    exit;
}
?>

<!-- Page Container -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Back Button -->
    <div class="mb-6 pt-10">
        <a href="year_semesters.php?course_id=<?= urlencode($courseId) ?>&year=<?= urlencode($yearNumber) ?>" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-all duration-300 ease-in-out transform hover:translate-x-[-5px]">
            <i class="fas fa-arrow-left mr-2"></i> Back to Semesters
        </a>
    </div>

    <!-- Course + Year + Semester Header Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 border border-gray-100">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-6 text-white">
            <h1 class="text-2xl font-bold mb-2"><?= htmlspecialchars($course['title']) ?></h1>
            <div class="flex flex-wrap items-center gap-3">
                <span class="bg-white/20 backdrop-blur-sm text-white text-sm font-medium px-3 py-1 rounded-full">
                    Year <?= htmlspecialchars($yearNumber) ?>
                </span>
                <span class="bg-white/20 backdrop-blur-sm text-white text-sm font-medium px-3 py-1 rounded-full">
                    Semester <?= htmlspecialchars($semesterNumber) ?>
                </span>
                <span class="text-blue-100"><i class="fas fa-user-tie mr-1"></i> <?= htmlspecialchars($course['instructor']) ?></span>
            </div>
        </div>
    </div>

    <!-- Subjects Section -->
    <h2 class="text-2xl font-bold mb-8 text-gray-800 flex items-center">
        <i class="fas fa-book mr-3 text-blue-600"></i> Subjects
    </h2>

    <?php if (!empty($semester['subjects'])): ?>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($semester['subjects'] as $subject): ?>
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-2 flex flex-col overflow-hidden border border-gray-100">

                    <!-- Subject Image -->
                    <div class="h-80 bg-gray-100 overflow-hidden">
                        <?php if (!empty($subject['image'])): ?>
                            <img src="<?= htmlspecialchars($subject['image']) ?>"
                                alt="<?= htmlspecialchars($subject['title']) ?>"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                                onerror="this.onerror=null;this.src='images/default-placeholder.png';">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-blue-50 to-indigo-50">
                                <i class="fas fa-book-open text-4xl text-blue-300"></i>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Subject Info -->
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-semibold mb-3 text-gray-800"><?= htmlspecialchars($subject['title']) ?></h3>
                        <p class="text-gray-700 flex-grow mb-5">
                            <?= htmlspecialchars($subject['description']) ?>
                        </p>
                        <div class="mt-auto flex space-x-2">
                            <a target="_blank" href="<?= htmlspecialchars($subject['pdf']) ?>" download
                               class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center px-4 py-2.5 rounded-lg transition duration-300 flex items-center justify-center">
                                <i class="fas fa-download mr-2"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
            <div class="flex items-center">
                <div class="text-yellow-500">
                    <i class="fas fa-exclamation-circle text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-yellow-700 font-medium">No subjects available for this semester.</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>