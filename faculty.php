<?php include 'includes/header.php'; ?>

<div class="title-container mt-28 mb-16">
  <div class="text-center pb-5">
    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
      Explore <span class="text-[#1E3A8A]">Open<span class="text-[#BFA14A]">2</span>Learn</span> Faculty
    </h2>
    <p class="text-gray-600 max-w-2xl mx-auto text-lg">
      Top-class teachers, bringing quality learning to every student.
    </p>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <?php
        // Local JSON load
        $facultyData = json_decode(file_get_contents("faculty.json"), true);

        foreach ($facultyData as $faculty) {
      ?>
      <!-- Faculty Card -->
      <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200 hover:shadow-2xl hover:border-blue-400 transition-all duration-300">
        <!-- Image/Icon -->
        <div class="h-40 w-40 mx-auto bg-blue-100 flex items-center justify-center rounded-full mb-6 shadow-inner">
          <i class="fas fa-user-tie text-6xl text-blue-500"></i>
        </div>

        <!-- Name -->
        <h3 class="text-2xl font-bold text-gray-800 text-center mb-2">
          <?= htmlspecialchars($faculty['name']) ?>
        </h3>

        <!-- Designation -->
        <p class="text-blue-700 text-center font-medium mb-4">
          <?= htmlspecialchars($faculty['designation']) ?>
        </p>

        <!-- Info Section -->
        <div class="space-y-2 text-gray-700 text-sm">
          <p><span class="font-semibold text-gray-900">Qualification:</span> <?= htmlspecialchars($faculty['degree']) ?></p>
          <p><span class="font-semibold text-gray-900">Specialization:</span> <?= htmlspecialchars($faculty['specialization']) ?></p>
          <p><span class="font-semibold text-gray-900">Experience:</span> <?= htmlspecialchars($faculty['experience']) ?></p>
        </div>

        <!-- Divider -->
        <div class="border-t my-4"></div>

        <!-- Contact -->
        <div class="text-sm text-center">
          <p class="mb-3">
            <span class="font-semibold">Email: </span>
            <a href="mailto:<?= htmlspecialchars($faculty['email']) ?>" class="text-blue-600 hover:underline">
              <?= htmlspecialchars($faculty['email']) ?>
            </a>
          </p>

          <!-- Social Links -->
          <div class="flex justify-center space-x-5 text-gray-500">
            <a href="mailto:<?= htmlspecialchars($faculty['email']) ?>" class="hover:text-blue-700"><i class="far fa-envelope fa-lg"></i></a>
            <a href="<?= htmlspecialchars($faculty['linkedin']) ?>" target="_blank" class="hover:text-blue-700"><i class="fab fa-linkedin fa-lg"></i></a>
            <a href="<?= htmlspecialchars($faculty['website']) ?>" target="_blank" class="hover:text-blue-700"><i class="fas fa-globe fa-lg"></i></a>
          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
