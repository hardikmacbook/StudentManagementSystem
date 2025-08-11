<?php
include 'includes/header.php';

// Load courses data
$coursesData = json_decode(file_get_contents('data/all_courses.json'), true);
$courses = $coursesData['courses'] ?? [];
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Page Heading -->
    <div class="text-center mb-12 pt-10">
        <h1 class="text-4xl font-bold mb-4 text-gray-800">Our Academic Programs</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">Explore our comprehensive range of courses designed to provide you with the knowledge and skills needed for your future career.</p>
    </div>

    <!-- Course Filter (Optional) -->
    <div class="mb-10 flex justify-center">
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="px-5 py-2.5 text-sm font-medium bg-blue-600 text-white rounded-l-lg hover:bg-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-white active">
                All Courses
            </button>
            <button type="button" class="px-5 py-2.5 text-sm font-medium bg-white text-gray-700 border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                Commerce
            </button>
            <button type="button" class="px-5 py-2.5 text-sm font-medium bg-white text-gray-700 border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                Management
            </button>
            <button type="button" class="px-5 py-2.5 text-sm font-medium bg-white text-gray-700 border border-gray-200 rounded-r-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                Technology
            </button>
        </div>
    </div>

    <?php if (!empty($courses)): ?>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($courses as $course): ?>
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-2 flex flex-col overflow-hidden border border-gray-100">
                    
                    <!-- Image -->
                    <div class="h-56 bg-gray-200 flex items-center justify-center overflow-hidden relative">
                        <?php if (!empty($course['image'])): ?>
                            <img src="<?= htmlspecialchars($course['image']) ?>" 
                                 alt="<?= htmlspecialchars($course['title']) ?>" 
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-4 text-white">
                                <span class="bg-blue-600 text-xs font-bold px-2 py-1 rounded"><?= htmlspecialchars($course['code']) ?></span>
                            </div>
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-blue-400 to-indigo-500">
                                <span class="text-white text-3xl font-bold"><?= htmlspecialchars($course['code']) ?></span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Course Info -->
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-3 text-gray-800"><?= htmlspecialchars($course['title']) ?></h3>
                        
                        <div class="flex items-center mb-4">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-user-tie text-blue-600 text-sm"></i>
                            </div>
                            <p class="text-gray-600 text-sm">
                                <?= htmlspecialchars($course['instructor']) ?>
                            </p>
                        </div>
                        
                        <p class="text-gray-700 flex-grow mb-5 leading-relaxed">
                            <?= htmlspecialchars(substr($course['description'], 0, 120)) ?>...
                        </p>

                        <div class="flex flex-wrap gap-2 mb-5">
                            <?php 
                            // Count total years and subjects
                            $totalYears = count($course['years'] ?? []);
                            $totalSubjects = 0;
                            foreach ($course['years'] ?? [] as $year) {
                                foreach ($year['semesters'] ?? [] as $semester) {
                                    $totalSubjects += count($semester['subjects'] ?? []);
                                }
                            }
                            ?>
                            <span class="bg-blue-50 text-blue-700 text-xs px-2 py-1 rounded-full">
                                <?= $totalYears ?> Years
                            </span>
                            <span class="bg-indigo-50 text-indigo-700 text-xs px-2 py-1 rounded-full">
                                <?= $totalSubjects ?> Subjects
                            </span>
                        </div>

                        <a href="course_years.php?id=<?= urlencode($course['id']) ?>" 
                           class="mt-auto inline-block bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3 px-4 rounded-lg text-center transition-all duration-300 w-full">
                            <i class="fas fa-arrow-right mr-2"></i> View Course
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
                    <p class="text-yellow-700 font-medium">No courses available at the moment.</p>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>

<?php include 'includes/footer.php'; ?>
