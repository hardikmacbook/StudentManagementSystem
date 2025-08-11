<?php
include 'includes/header.php';

// --- Get Course ---
$courseId = $_GET['id'] ?? '';
if (empty($courseId)) {
    header('Location: courses.php');
    exit;
}

$data = json_decode(file_get_contents('data/all_courses.json'), true);
$course = null;
foreach ($data['courses'] ?? [] as $c) {
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
?>

<!-- Page Container -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Back Button -->
    <div class="mb-6">
        <a href="courses.php" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-all duration-300 ease-in-out transform hover:translate-x-[-5px]">
            <i class="fas fa-arrow-left mr-2"></i> Back to Courses
        </a>
    </div>

    <!-- Course Info Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-12 flex flex-col md:flex-row hover:shadow-xl transition-all duration-300 ease-in-out">
        <!-- Image -->
        <div class="md:w-1/3 h-80 bg-gradient-to-r from-blue-50 to-indigo-50 flex items-center justify-center overflow-hidden">
            <?php if (!empty($course['image'])): ?>
                <img src="<?= htmlspecialchars($course['image']) ?>" alt="<?= htmlspecialchars($course['title']) ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
            <?php else: ?>
                <div class="text-center p-8">
                    <div class="bg-blue-100 w-24 h-24 mx-auto rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-800 text-4xl font-bold"><?= htmlspecialchars($course['code']) ?></span>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-800"><?= htmlspecialchars($course['code']) ?></h3>
                </div>
            <?php endif; ?>
        </div>

        <!-- Text -->
        <div class="p-8 md:w-2/3 flex flex-col justify-between bg-white">
            <div>
                <h1 class="text-3xl font-bold mb-3 text-gray-800"><?= htmlspecialchars($course['title']) ?></h1>
                <p class="text-blue-600 font-medium mb-4">Course Code: <?= htmlspecialchars($course['code']) ?></p>
                <p class="text-gray-700 mb-6 leading-relaxed"><?= htmlspecialchars($course['description']) ?></p>
            </div>
            <div class="flex flex-wrap gap-3 border-t pt-4">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">
                    <?= count($course['years']) ?> Years
                </span>
                <span class="bg-indigo-50 text-indigo-700 text-sm font-medium px-4 py-1.5 rounded-full">
                    <i class="fas fa-user-tie mr-1"></i> <?= htmlspecialchars($course['instructor']) ?>
                </span>
            </div>
        </div>
    </div>

    <!-- Years Section -->
    <h2 class="text-2xl font-bold mb-8 text-gray-800 flex items-center">
        <i class="fas fa-graduation-cap mr-3 text-blue-600"></i> Select Year
    </h2>

    <?php if (!empty($course['years'])): ?>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($course['years'] as $year): ?>
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-2 p-8 flex flex-col items-center text-center border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 w-24 h-24 flex items-center justify-center rounded-full mb-6 shadow-md">
                        <span class="text-3xl font-bold text-white"><?= htmlspecialchars($year['year_number']) ?></span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Year <?= htmlspecialchars($year['year_number']) ?></h3>
                    
                    <?php 
                    // Count total subjects across all semesters
                    $totalSubjects = 0;
                    $totalSemesters = count($year['semesters'] ?? []);
                    foreach ($year['semesters'] ?? [] as $semester) {
                        $totalSubjects += count($semester['subjects'] ?? []);
                    }
                    ?>
                    
                    <div class="flex gap-2 mb-4 justify-center">
                        <span class="bg-blue-50 text-blue-700 text-sm px-3 py-1 rounded-full">
                            <?= $totalSemesters ?> Semesters
                        </span>
                        <span class="bg-indigo-50 text-indigo-700 text-sm px-3 py-1 rounded-full">
                            <?= $totalSubjects ?> Subjects
                        </span>
                    </div>
                    
                    <p class="text-gray-600 mb-6">Semester <?= $year['semesters'][0]['semester_number'] ?? '?' ?> - <?= end($year['semesters'])['semester_number'] ?? '?' ?></p>
                    
                    <a href="year_semesters.php?course_id=<?= urlencode($course['id']) ?>&year=<?= urlencode($year['year_number']) ?>" 
                       class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-3 px-6 rounded-lg font-medium transition duration-300 w-full flex items-center justify-center">
                        <i class="fas fa-book-open mr-2"></i> View Semesters
                    </a>
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
                    <p class="text-yellow-700 font-medium">No years available for this course.</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
