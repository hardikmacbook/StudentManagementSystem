<?php
include 'includes/header.php';

// Load courses data
$coursesData = json_decode(file_get_contents('data/all_courses.json'), true);
$courses = $coursesData['courses'] ?? [];
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Page Heading -->
    <h1 class="text-3xl font-bold mb-8 text-blue-800">All Courses</h1>

    <?php if (!empty($courses)): ?>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($courses as $course): ?>
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1 flex flex-col">
                    
                    <!-- Image -->
                    <div class="h-48 bg-gray-200 flex items-center justify-center overflow-hidden">
                        <?php if (!empty($course['image']) && file_exists($course['image'])): ?>
                            <img src="<?= htmlspecialchars($course['image']) ?>" 
                                 alt="<?= htmlspecialchars($course['title']) ?>" 
                                 class="w-full h-full object-cover">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-blue-50">
                                <span class="text-blue-800 text-2xl font-semibold"><?= htmlspecialchars($course['code']) ?></span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Course Info -->
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-2"><?= htmlspecialchars($course['title']) ?></h3>
                        <p class="text-gray-600 text-sm mb-3">
                            <strong>Instructor:</strong> <?= htmlspecialchars($course['instructor']) ?>
                        </p>
                        <p class="text-gray-700 flex-grow mb-5 leading-relaxed">
                            <?= htmlspecialchars(substr($course['description'], 0, 100)) ?>...
                        </p>

                        <a href="course_years.php?id=<?= urlencode($course['id']) ?>" 
                           class="mt-auto inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg text-center transition-all duration-300">
                            View Course
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-gray-500">No courses available at the moment.</p>
    <?php endif; ?>

</div>

<?php include 'includes/footer.php'; ?>
