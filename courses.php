<?php
include 'includes/header.php';

// Load courses data
$coursesData = json_decode(file_get_contents('data/all_courses.json'), true);
$courses = $coursesData['courses'] ?? [];
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    
    <!-- Page Title -->
    <div class="text-center mb-12">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Our Academic Programs</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
            Explore our comprehensive academic programs and find the right path for your future.
        </p>
    </div>

    <?php if (!empty($courses)): ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($courses as $course): ?>
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-gray-100">
                    
                    <!-- Image -->
                    <div class="h-52 bg-gray-200 relative overflow-hidden">
                        <?php if (!empty($course['image'])): ?>
                            <img src="<?= htmlspecialchars($course['image']) ?>" 
                                 alt="<?= htmlspecialchars($course['title']) ?>" 
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">

                            <div class="absolute top-4 right-4 bg-[#1E3A8A] text-white text-xs font-bold px-2 py-1 rounded">
                                <?= htmlspecialchars($course['code']) ?>
                            </div>
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-blue-400 to-indigo-500">
                                <span class="text-white text-3xl font-bold">
                                    <?= htmlspecialchars($course['code']) ?>
                                </span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-800">
                            <?= htmlspecialchars($course['title']) ?>
                        </h3>

                        <!-- Instructor -->
                        <div class="flex items-center mb-4">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-user-tie text-blue-600 text-sm"></i>
                            </div>
                            <p class="text-gray-600 text-sm">
                                <?= htmlspecialchars($course['instructor']) ?>
                            </p>
                        </div>

                        <!-- Description -->
                        <p class="text-gray-700 mb-6">
                            <?= htmlspecialchars(substr($course['description'], 0, 100)) ?>...
                        </p>

                        <!-- Years & Details link -->
                        <div class="flex justify-between items-center">
                            <div>
                                <?php $totalYears = count($course['years'] ?? []); ?>
                                <span class="bg-blue-50 text-blue-700 text-xs px-2 py-1 rounded-full">
                                    <?= $totalYears ?> Years
                                </span>
                            </div>
                            <a href="course_years.php?id=<?= urlencode($course['id']) ?>" 
                               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                View Details
                                <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
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
