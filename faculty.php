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

  <?php
    // API se data fetch karo
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://68a3f814c123272fb9b0e42d.mockapi.io/Faculties");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $facultyData = json_decode($response, true);

    // Departments ki list
    $departments = ["ALL", "BCA", "BBA", "LAB", "LIBRARY"];
  ?>

  <!-- Tabs Section -->
  <div class="flex justify-center space-x-4 mb-10">
    <?php foreach ($departments as $dept) { ?>
      <button 
        class="tab-btn px-6 py-2 rounded-lg border font-semibold text-gray-700 transition"
        data-dept="<?= $dept ?>">
        <?= $dept ?>
      </button>
    <?php } ?>
  </div>

  <!-- Faculty Cards List -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div id="faculty-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <?php
        if ($facultyData) {
          foreach ($facultyData as $faculty) {
      ?>
      <!-- Faculty Card -->
      <div 
        class="faculty-card bg-white rounded-xl shadow-lg p-6 border border-gray-200 hover:shadow-xl hover:border-[#1E3A8A] transition-all duration-300"
        data-dept="<?= strtoupper($faculty['department']) ?>">
        
        <!-- Icon -->
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
        </div>
      </div>
      <?php 
          }
        } else {
          echo '<p class="text-center text-red-500">No data found or API error.</p>';
        }
      ?>
    </div>
  </div>
</div>

<!-- Tabs JavaScript -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".tab-btn");
    const cards = document.querySelectorAll(".faculty-card");

    function filterData(dept) {
      cards.forEach(card => {
        if (dept === "ALL" || card.getAttribute("data-dept") === dept) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });

      // All buttons classes reset
      buttons.forEach(b => b.classList.remove("bg-blue-600", "text-white"));
    }

    buttons.forEach(btn => {
      btn.addEventListener("click", () => {
        const dept = btn.getAttribute("data-dept");

        filterData(dept);

        // Active tab styling
        btn.classList.add("bg-blue-600", "text-white");
      });
    });

    // 👇 Default show ALL
    const defaultBtn = document.querySelector('[data-dept="ALL"]');
    if (defaultBtn) {
      defaultBtn.click(); // simulate click
    }
  });
</script>


<?php include 'includes/footer.php'; ?>
