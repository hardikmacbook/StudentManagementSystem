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
    echo '<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center">
            <div class="bg-white rounded-3xl shadow-xl p-8 text-center max-w-md">
                <div class="w-20 h-20 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 15.5c-.77.833.192 2.5 1.732 2.5z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Course Not Found</h2>
                <p class="text-gray-600 mb-8">Sorry, we couldn\'t find the course you\'re looking for.</p>
                <a href="courses.php" class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transform hover:scale-105 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Courses
                </a>
            </div>
          </div>';
    include 'includes/footer.php';
    exit;
}
?>

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-blue-50">
    
    <!-- Header Section with Course Details -->
    <div class="relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #1E3A8A 0%, transparent 50%), radial-gradient(circle at 75% 75%, #6366F1 0%, transparent 50%);"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6 py-8">
            <!-- Navigation -->
            <div class="mb-8">
                <a href="courses.php" class="inline-flex items-center text-gray-600 hover:text-indigo-600 font-medium transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to All Courses
                </a>
            </div>

            <!-- Course Hero Card -->
            <div class="bg-white rounded-3xl border border-gray-200 overflow-hidden">
                <div class="p-10">
                    <div class="flex flex-col lg:flex-row items-start gap-8">
                        <!-- Course Information -->
                        <div class="flex-1">
                            <!-- Course Code Badge -->
                            <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-indigo-100 to-blue-100 rounded-full text-indigo-700 font-semibold text-sm mb-6">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <?= htmlspecialchars($course['code']) ?>
                            </div>

                            <!-- Course Title -->
                            <h1 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent mb-6">
                                <?= htmlspecialchars($course['title']) ?>
                            </h1>

                            <!-- Description -->
                            <p class="text-xl text-gray-600 leading-relaxed mb-8 max-w-4xl">
                                <?= htmlspecialchars($course['description']) ?>
                            </p>

                            <!-- Course Stats -->
                            <div class="flex flex-wrap items-center gap-8">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-900"><?= count($course['years']) ?></div>
                                        <div class="text-gray-500 text-sm">Years Program</div>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-lg font-semibold text-gray-900"><?= htmlspecialchars($course['instructor']) ?></div>
                                        <div class="text-gray-500 text-sm">Course Instructor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Years Selection Section -->
    <div class="max-w-7xl mx-auto px-6 py-20">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Choose Your Academic Year</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Select the year you want to explore and dive into all available semesters and subjects
            </p>
        </div>

        <?php if (!empty($course['years'])): ?>
            <!-- Years Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($course['years'] as $year): ?>
                    <?php 
                    $totalSubjects = 0;
                    $totalSemesters = count($year['semesters'] ?? []);
                    foreach ($year['semesters'] ?? [] as $semester) {
                        $totalSubjects += count($semester['subjects'] ?? []);
                    }
                    ?>
                    
                    <div class="group relative">
                        <!-- Hover Glow Effect -->
                        <div class="absolute -inset-2 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-3xl blur opacity-0 group-hover:opacity-20 transition duration-500"></div>
                        
                        <!-- Card -->
                        <div class="relative bg-white rounded-3xl shadow-xl border border-gray-100 p-8 text-center transform group-hover:-translate-y-2 transition-all duration-300">
                            
                            <!-- Year Icon -->
                            <div class="relative mb-6">
                                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                    <span class="text-3xl font-bold text-white"><?= htmlspecialchars($year['year_number']) ?></span>
                                </div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Year Title -->
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Year <?= htmlspecialchars($year['year_number']) ?></h3>
                            
                            <!-- Stats Row -->
                            <div class="flex items-center justify-center gap-8 mb-8">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-indigo-600 mb-1"><?= $totalSemesters ?></div>
                                    <div class="text-sm text-gray-500 font-medium">Semesters</div>
                                </div>
                                
                                <div class="w-px h-12 bg-gradient-to-b from-transparent via-gray-300 to-transparent"></div>
                                
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-purple-600 mb-1"><?= $totalSubjects ?></div>
                                    <div class="text-sm text-gray-500 font-medium">Total Subjects</div>
                                </div>
                            </div>

                            <!-- Semester Range -->
                            <div class="mb-8">
                                <span class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-gray-50 to-gray-100 rounded-full text-gray-600 text-sm font-medium">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    Semester <?= $year['semesters'][0]['semester_number'] ?? '1' ?> - <?= end($year['semesters'])['semester_number'] ?? '2' ?>
                                </span>
                            </div>

                            <!-- Action Button -->
                            <a href="year_semesters.php?course_id=<?= urlencode($course['id']) ?>&year=<?= urlencode($year['year_number']) ?>" 
                               class="inline-flex items-center justify-center w-full px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl hover:from-indigo-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z"/>
                                </svg>
                                Explore Semesters
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="relative mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">No Years Available Yet</h3>
                <p class="text-xl text-gray-600 max-w-md mx-auto mb-10">This course doesn't have any academic years configured at the moment.</p>
                <a href="courses.php" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-gray-700 to-gray-900 text-white font-semibold rounded-xl hover:from-gray-800 hover:to-black transform hover:scale-105 transition-all duration-200 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Browse Other Courses
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>