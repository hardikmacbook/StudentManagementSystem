<?php
include 'includes/header.php';

// === Get URL Parameters ===
$courseId = $_GET['course_id'] ?? '';
$yearNumber = isset($_GET['year']) ? intval($_GET['year']) : 0;

// Redirect if missing params
if (empty($courseId) || $yearNumber === 0) {
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
?>

<!-- Page Container -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Back Button -->
    <div class="mb-6">
        <a href="course_years.php?id=<?= urlencode($courseId) ?>" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-all duration-300 ease-in-out transform hover:translate-x-[-5px]">
            <i class="fas fa-arrow-left mr-2"></i> Back to Years
        </a>
    </div>

    <!-- Course + Year Header Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 border border-gray-100">
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 px-8 py-4 border-b border-gray-100">
            <h1 class="text-3xl font-bold text-gray-800"><?= htmlspecialchars($course['title']) ?></h1>
            <div class="flex flex-wrap items-center gap-3 mt-2">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                    Year <?= htmlspecialchars($yearNumber) ?>
                </span>
                <span class="text-gray-600"><i class="fas fa-code mr-1"></i> <?= htmlspecialchars($course['code']) ?></span>
                <span class="text-gray-600"><i class="fas fa-user-tie mr-1"></i> <?= htmlspecialchars($course['instructor']) ?></span>
            </div>
        </div>
    </div>

    <!-- Semesters Section -->
    <h2 class="text-2xl font-bold mb-8 text-gray-800 flex items-center">
        <i class="fas fa-calendar-alt mr-3 text-blue-600"></i> Semesters
    </h2>

    <?php if (!empty($year['semesters'])): ?>
        <div class="grid gap-8 md:grid-cols-2">
            <?php foreach ($year['semesters'] as $semester): ?>
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-2 overflow-hidden border border-gray-100">
                    <!-- Semester Header -->
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-4 text-white">
                        <h3 class="text-xl font-bold">Semester <?= htmlspecialchars($semester['semester_number']) ?></h3>
                        <p class="text-blue-100 text-sm mt-1"><?= count($semester['subjects']) ?> Subjects</p>
                    </div>
                    
                    <!-- Subjects List -->
                    <div class="p-6">
                        <ul class="divide-y divide-gray-100">
                            <?php foreach ($semester['subjects'] as $index => $subject): ?>
                                <li class="py-3 <?= $index === 0 ? 'pt-0' : '' ?>">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-book text-indigo-600"></i>
                                        </div>
                                        <div class="ml-4 flex-grow">
                                            <h4 class="text-base font-medium text-gray-800"><?= htmlspecialchars($subject['title']) ?></h4>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <a href="semester_subjects.php?course_id=<?= urlencode($course['id']) ?>&year=<?= urlencode($year['year_number']) ?>&semester=<?= urlencode($semester['semester_number']) ?>" 
                           class="mt-6 inline-block bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-2 px-5 rounded-lg font-medium transition duration-300 w-full text-center">
                            <i class="fas fa-list-ul mr-2"></i> View Subjects
                        </a>
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
                    <p class="text-yellow-700 font-medium">No semesters available for this year.</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>