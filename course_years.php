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
        <a href="courses.php" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
            <i class="fas fa-arrow-left mr-2"></i> Back to Courses
        </a>
    </div>

    <!-- Course Info Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-12 flex flex-col md:flex-row">
        <!-- Image -->
        <div class="md:w-1/3 h-64 bg-gray-200 flex items-center justify-center">
            <?php if (!empty($course['image']) && file_exists($course['image'])): ?>
                <img src="<?= htmlspecialchars($course['image']) ?>" alt="<?= htmlspecialchars($course['title']) ?>" class="w-full h-full object-cover">
            <?php else: ?>
                <span class="text-blue-800 text-4xl font-bold"><?= htmlspecialchars($course['code']) ?></span>
            <?php endif; ?>
        </div>

        <!-- Text -->
        <div class="p-8 md:w-2/3 flex flex-col justify-between">
            <div>
                <h1 class="text-3xl font-bold mb-3"><?= htmlspecialchars($course['title']) ?></h1>
                <p class="text-gray-600 mb-4">Course Code: <?= htmlspecialchars($course['code']) ?></p>
                <p class="text-gray-700 mb-6 leading-relaxed"><?= htmlspecialchars($course['description']) ?></p>
            </div>
            <div class="flex flex-wrap gap-3 border-t pt-4">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                    <?= count($course['years']) ?> Years
                </span>
                <span class="text-gray-600"><strong>Instructor:</strong> <?= htmlspecialchars($course['instructor']) ?></span>
            </div>
        </div>
    </div>

    <!-- Years Section -->
    <h2 class="text-2xl font-bold mb-8">Select Year</h2>

    <?php if (!empty($course['years'])): ?>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($course['years'] as $year): ?>
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1 p-8 flex flex-col items-center text-center">
                    <div class="bg-blue-50 w-20 h-20 flex items-center justify-center rounded-full mb-5">
                        <span class="text-2xl font-bold text-blue-700"><?= htmlspecialchars($year['year_number']) ?></span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Year <?= htmlspecialchars($year['year_number']) ?></h3>
                    <p class="text-gray-600 mb-6"><?= count($year['subjects']) ?> Subjects</p>
                    <a href="year_subjects.php?course_id=<?= urlencode($course['id']) ?>&year=<?= urlencode($year['year_number']) ?>"
                       class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-lg font-medium transition duration-300">
                        View Subjects
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-gray-500">No years available for this course.</p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
