<?php
include 'includes/header.php';
include 'includes/api_helper.php';

// === Get URL Parameters ===
$courseId   = $_GET['course_id'] ?? '';
$yearNumber = isset($_GET['year']) ? intval($_GET['year']) : 0;

// Redirect if missing params
if (empty($courseId) || $yearNumber === 0) {
    header('Location: courses.php');
    exit;
}

// Get course data from API
$course = findCourseById($courseId);
if (!$course) {
    echo '<div class="alert alert-error">Course not found.</div>';
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
    echo '<div class="alert alert-error">Year not found.</div>';
    include 'includes/footer.php';
    exit;
}
?>

<!-- Page Container -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Back Button -->
    <div class="mb-6">
        <a href="course_years.php?id=<?= urlencode($courseId) ?>" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
            <i class="fas fa-arrow-left mr-2"></i> Back to demo
        </a>
    </div>

    <!-- Course + Year Header Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
        <div class="p-8">
            <h1 class="text-3xl font-bold mb-2"><?= htmlspecialchars($course['title']) ?> — Year <?= htmlspecialchars($yearNumber) ?></h1>
            <p class="text-gray-600 mb-1">Course Code: <?= htmlspecialchars($course['code']) ?></p>
            <p class="text-gray-500"><strong>Instructor:</strong> <?= htmlspecialchars($course['instructor']) ?></p>
        </div>
    </div>

    <!-- Subjects Section -->
    <h2 class="text-2xl font-bold mb-8">Subjects</h2>

    <?php if (!empty($year['subjects'])): ?>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($year['subjects'] as $subject): ?>
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1 flex flex-col">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($subject['title']) ?></h3>
                        <p class="text-gray-700 flex-grow mb-5">
                            <?= htmlspecialchars($subject['description']) ?>
                        </p>
                        <div class="mt-auto flex space-x-2">
                            <a href="<?= htmlspecialchars($subject['pdf']) ?>" target="_blank"
                               class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center px-4 py-2 rounded-lg transition duration-300">
                                <i class="far fa-eye mr-2"></i> View
                            </a>
                            <a href="<?= htmlspecialchars($subject['pdf']) ?>" download
                               class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center px-4 py-2 rounded-lg transition duration-300">
                                <i class="fas fa-download mr-2"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-gray-500">No subjects available for this year.</p>
    <?php endif; ?>

</div>

<?php include 'includes/footer.php'; ?>
