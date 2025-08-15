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
    include 'includes/error_state.php';
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
    include 'includes/error_state.php';
    exit;
}
?>

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-blue-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10 pointer-events-none select-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #1E3A8A 0%, transparent 50%), radial-gradient(circle at 75% 75%, #6366F1 0%, transparent 50%);"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-10">
        
        <!-- Navigation -->
        <div class="mb-8">
            <a href="course_years.php?id=<?= urlencode($courseId) ?>" class="inline-flex items-center text-[#1E3A8A] hover:text-[#BFA14A] font-medium transition-all duration-200 group mt-10">
                <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Years
            </a>
        </div>

        <!-- Course & Year Header -->
        <div class="bg-white rounded-3xl border border-gray-200 overflow-hidden shadow-lg mb-12">
            <div class="p-10">
                <div class="flex flex-col lg:flex-row items-start gap-8">
                    <div class="flex-1">
                        <!-- Year Badge -->
                        <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-indigo-100 to-blue-100 rounded-full text-indigo-700 font-semibold text-sm mb-6">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Year <?= htmlspecialchars($yearNumber) ?>
                        </div>

                        <!-- Course Title -->
                        <h1 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent mb-4">
                            <?= htmlspecialchars($course['title']) ?>
                        </h1>

                        <!-- Course Info -->
                        <div class="flex flex-wrap items-center gap-6 mt-4">
                            <!-- Code -->
                            <div class="flex items-center text-lg text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <?= htmlspecialchars($course['code']) ?>
                            </div>
                            <!-- Instructor -->
                            <div class="flex items-center text-lg text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <?= htmlspecialchars($course['instructor']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Semesters Section -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Select a Semester</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Browse all the semesters for this academic year and see available subjects
            </p>
        </div>

        <?php if (!empty($year['semesters'])): ?>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($year['semesters'] as $semester): ?>
            <div class="group relative">
                <div class="absolute -inset-2 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl blur opacity-0 group-hover:opacity-20 transition duration-500"></div>
                <div class="relative bg-white rounded-3xl shadow-xl border border-gray-100 p-8 text-center transform group-hover:-translate-y-2 transition-all duration-300">
                    <div class="w-20 h-20 bg-[#1E3A8A] rounded-2xl flex items-center justify-center mx-auto shadow-lg mb-6">
                        <span class="text-3xl font-bold text-white"><?= htmlspecialchars($semester['semester_number']) ?></span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Semester <?= htmlspecialchars($semester['semester_number']) ?></h3>
                    <p class="text-gray-600 mb-6"><?= count($semester['subjects']) ?> Subjects</p>
                    <a href="semester_subjects.php?course_id=<?= urlencode($course['id']) ?>&year=<?= urlencode($year['year_number']) ?>&semester=<?= urlencode($semester['semester_number']) ?>"
                       class="inline-flex items-center justify-center w-full px-8 py-4 bg-[#1E3A8A] text-white font-semibold rounded-xl hover:bg-[#BFA14A] shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        View Subjects
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <!-- Empty State -->
        <div class="text-center py-20">
            <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mx-auto mb-8">
                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-4">No Semesters Available</h3>
            <p class="text-xl text-gray-600 max-w-md mx-auto mb-8">This academic year does not have semesters configured yet.</p>
            <a href="course_years.php?id=<?= urlencode($courseId) ?>" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-gray-700 to-gray-900 text-white font-semibold rounded-xl hover:from-gray-800 hover:to-black shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Years
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
