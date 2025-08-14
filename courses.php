<?php
include 'includes/header.php';

// Load courses data
$coursesData = json_decode(file_get_contents('data/all_courses.json'), true);
$courses = $coursesData['courses'] ?? [];
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Page Heading -->
    <div class="text-center mb-12 pt-10">
        <h1 class="text-3xl font-bold mb-3 text-gray-800">Our Academic Programs</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
            Browse through our academic programs to find the right one for you.
        </p>
    </div>

    <?php if (!empty($courses)): ?>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($courses as $course): ?>
                <div class="bg-white border rounded-lg overflow-hidden hover:shadow-lg transition duration-200">
                    
                    <!-- Image -->
                    <div class="h-48 bg-gray-200 flex items-center justify-center overflow-hidden">
                        <?php if (!empty($course['image'])): ?>
                            <img src="<?= htmlspecialchars($course['image']) ?>" 
                                 alt="<?= htmlspecialchars($course['title']) ?>" 
                                 class="w-full h-full object-cover">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-blue-500 text-white text-lg font-semibold">
                                <?= htmlspecialchars($course['code']) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Course Info -->
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">
                            <?= htmlspecialchars($course['title']) ?>
                        </h3>
                        <p class="text-sm text-gray-600 mb-4">
                            <?= htmlspecialchars(substr($course['description'], 0, 100)) ?>...
                        </p>

                        <!-- Years and Subjects -->
                        <?php 
                            $totalYears = count($course['years'] ?? []);
                            $totalSubjects = 0;
                            foreach ($course['years'] ?? [] as $year) {
                                foreach ($year['semesters'] ?? [] as $semester) {
                                    $totalSubjects += count($semester['subjects'] ?? []);
                                }
                            }
                        ?>
                        <div class="text-xs text-gray-500 mb-4">
                            <?= $totalYears ?> Years | <?= $totalSubjects ?> Subjects
                        </div>

                        <!-- Button -->
                        <a href="course_years.php?id=<?= urlencode($course['id']) ?>" 
                           class="block text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                            View Details
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="bg-yellow-50 p-6 rounded border-l-4 border-yellow-400 text-yellow-800">
            No courses available at the moment.
        </div>
    <?php endif; ?>

</div>

<?php include 'includes/footer.php'; ?>
