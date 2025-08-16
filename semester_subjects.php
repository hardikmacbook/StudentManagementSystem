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

// Find semester
$semester = null;
foreach ($year['semesters'] as $s) {
    if ($s['semester_number'] === $semesterNumber) {
        $semester = $s;
        break;
    }
}
if (!$semester) {
    include 'includes/error_state.php';
    exit;
}
?>

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-blue-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10 pointer-events-none select-none">
        <div class="absolute inset-0"
             style="background-image: radial-gradient(circle at 25% 25%, #1E3A8A 0%, transparent 50%),
             radial-gradient(circle at 75% 75%, #6366F1 0%, transparent 50%);"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-10">
        <!-- Navigation -->
        <div class="mb-8">
            <a href="year_semesters.php?course_id=<?= urlencode($courseId) ?>&year=<?= urlencode($yearNumber) ?>"
               class="inline-flex items-center text-[#1E3A8A] hover:text-[#BFA14A] font-medium transition-all duration-200 group mt-10">
                <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Semesters
            </a>
        </div>

        <!-- Course, Year, Semester Header -->
        <div class="bg-white rounded-3xl border border-gray-200 overflow-hidden shadow-lg mb-12">
            <div class="p-10">
                <div class="flex flex-col lg:flex-row items-start gap-8">
                    <div class="flex-1">
                        <!-- Badges -->
                        <div class="flex flex-wrap gap-3 mb-6">
                            <span class="px-4 py-2 bg-gradient-to-r from-indigo-100 to-blue-100 rounded-full text-indigo-700 font-semibold text-sm">
                                Year <?= htmlspecialchars($yearNumber) ?>
                            </span>
                            <span class="px-4 py-2 bg-gradient-to-r from-purple-100 to-pink-100 rounded-full text-purple-700 font-semibold text-sm">
                                Semester <?= htmlspecialchars($semesterNumber) ?>
                            </span>
                        </div>

                        <!-- Title -->
                        <h1 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent mb-4">
                            <?= htmlspecialchars($course['title']) ?>
                        </h1>

                        <!-- Instructor -->
                        <div class="flex items-center text-lg text-gray-700 mt-4">
                            <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <?= htmlspecialchars($course['instructor']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subjects Section -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Subjects</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Browse all available subjects for Semester <?= htmlspecialchars($semesterNumber) ?> in Year <?= htmlspecialchars($yearNumber) ?>
            </p>
        </div>

        <?php if (!empty($semester['subjects'])): ?>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 items-stretch">
                <?php foreach ($semester['subjects'] as $subject): ?>
                    <div class="group relative flex flex-col bg-white rounded-3xl shadow-xl border border-gray-100 p-6 transform transition-all duration-300 hover:-translate-y-2 select-text">
                        <!-- Subject Image -->
                        <div class="h-48 w-full rounded-xl overflow-hidden mb-6">
                            <?php if (!empty($subject['image'])): ?>
                                <img src="<?= htmlspecialchars($subject['image']) ?>" alt="<?= htmlspecialchars($subject['title']) ?>"
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                                     onerror="this.onerror=null;this.src='images/default-placeholder.png';">
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-blue-50 to-indigo-50">
                                    <svg class="w-10 h-10 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9"/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Subject Info -->
                        <h3 class="text-2xl font-bold text-gray-900 mb-3"><?= htmlspecialchars($subject['title']) ?></h3>
                        <p class="text-gray-600 flex-grow"><?= htmlspecialchars($subject['description']) ?></p>

                        <!-- Download Buttons -->
                        <div class="mt-6 space-y-3">
                            <!-- Complete Subject PDF Download -->
                            <a target="_blank" href="<?= htmlspecialchars($subject['pdf']) ?>" download
                               class="inline-flex items-center justify-center w-full px-5 py-3 bg-[#1E3A8A] text-white font-semibold rounded-xl hover:bg-[#BFA14A] shadow-lg transition-colors duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                                Google Drive
                            </a>
                            
                            <!-- Unit-wise PDF Downloads (if available) -->
                            <?php if (!empty($subject['units'])): ?>
                                <div class="mt-4">
                                    <div id="units-<?= htmlspecialchars($subject['id']) ?>" class="mt-3 space-y-2 bg-gray-50 p-4 rounded-xl">
                                        <?php foreach ($subject['units'] as $unit): ?>
                                            <a target="_blank" href="<?= htmlspecialchars($unit['pdf']) ?>" download
                                               class="flex items-center justify-between w-full px-4 py-2 bg-white border border-gray-200 rounded-lg hover:bg-[#BFA14A]/50 hover:border-[#BFA14A]/50- transition-all duration-200">
                                                <span class="font-medium text-gray-800">Unit <?= htmlspecialchars($unit['unit_number']) ?>: <?= htmlspecialchars($unit['title']) ?></span>
                                                <svg class="w-5 h-5 text-[#1E3A8A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                                </svg>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
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
                <h3 class="text-3xl font-bold text-gray-900 mb-4">No Subjects Available</h3>
                <p class="text-xl text-gray-600 max-w-md mx-auto mb-8">This semester does not have subjects configured yet.</p>
                <a href="year_semesters.php?course_id=<?= urlencode($courseId) ?>&year=<?= urlencode($yearNumber) ?>"
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-gray-700 to-gray-900 text-white font-semibold rounded-xl hover:from-gray-800 hover:to-black shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Semesters
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
