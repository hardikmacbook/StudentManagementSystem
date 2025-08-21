<?php include 'includes/header.php'; ?>

<div class="title-container mt-28 mb-10">
  <div class="text-center pb-5">
    <h2 class="text-4xl font-bold text-gray-900 mb-4">
      Explore <span class="text-[#1E3A8A]">Open<span class="text-[#BFA14A]">2</span>Learn</span> faculty
    </h2>
    <p class="text-gray-600 max-w-2xl mx-auto">
      Top-class teachers, bringing quality learning to every student.
    </p>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <?php
        // API se data fetch karo
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://68a3f814c123272fb9b0e42d.mockapi.io/Faculties");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        $facultyData = json_decode($response, true);

        foreach ($facultyData as $faculty) {
      ?>
      <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 p-6">
        <div class="h-64 bg-blue-50 flex items-center justify-center rounded-md mb-6">
          <i class="fas fa-user-tie text-7xl text-blue-400"></i>
        </div>

        <!-- Faculty Name -->
        <h3 class="text-2xl font-semibold mb-2 text-blue-800">
          <?= htmlspecialchars($faculty['name']) ?>
        </h3>

        <!-- Designation -->
        <p class="text-blue-600 font-medium mb-2">
          <?= htmlspecialchars($faculty['designation']) ?>
        </p>

        <!-- Qualification (Degree + Specialization) -->
        <p class="text-gray-700 mb-2 leading-relaxed">
          <span class="font-semibold">Qualification:</span> 
          <?= htmlspecialchars($faculty['degree']) ?> in <?= htmlspecialchars($faculty['specialization']) ?>
        </p>

        <!-- Experience -->
        <p class="text-gray-700 mb-2">
          <span class="font-semibold">Experience:</span> 
          <?= htmlspecialchars($faculty['experience'] ?? 'N/A') ?> years
        </p>

        <!-- Contact Info -->
        <p class="text-gray-700 mb-4">
          <span class="font-semibold">Email:</span> 
          <a href="mailto:<?= htmlspecialchars($faculty['email']) ?>" class="text-blue-600 hover:underline">
            <?= htmlspecialchars($faculty['email']) ?>
          </a>
        </p>

        <!-- Social & Website -->
        <div class="flex space-x-5 text-gray-600">
          <a href="mailto:<?= htmlspecialchars($faculty['email']) ?>" class="hover:text-blue-700">
            <i class="far fa-envelope fa-lg"></i>
          </a>
          <a href="<?= htmlspecialchars($faculty['linkedin']) ?>" class="hover:text-blue-700">
            <i class="fab fa-linkedin fa-lg"></i>
          </a>
          <a href="<?= htmlspecialchars($faculty['website']) ?>" class="hover:text-blue-700">
            <i class="fas fa-globe fa-lg"></i>
          </a>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
