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

  <!-- ✅ Tabs Section -->
  <div class="flex justify-center mb-8 space-x-4">
    <button class="tab-btn bg-blue-600 text-white px-4 py-2 rounded-md" data-filter="all">All</button>
    <button class="tab-btn bg-gray-200 px-4 py-2 rounded-md" data-filter="bca">BCA Department</button>
    <button class="tab-btn bg-gray-200 px-4 py-2 rounded-md" data-filter="bba">BBA Department</button>
    <button class="tab-btn bg-gray-200 px-4 py-2 rounded-md" data-filter="lab">Lab Staff</button>
    <button class="tab-btn bg-gray-200 px-4 py-2 rounded-md" data-filter="library">Library</button>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <?php
        // Fetch faculty data via API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://68a3f814c123272fb9b0e42d.mockapi.io/Faculties");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        $facultyData = json_decode($response, true);

        foreach ($facultyData as $faculty) {
          // Assume `department` key is present in API response (e.g., bca, bba, lab, library)
          $dept = strtolower($faculty['department']);
      ?>
      <div class="faculty-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 p-6"
           data-department="<?= htmlspecialchars($dept) ?>">
        <div class="h-64 bg-blue-50 flex items-center justify-center rounded-md mb-6">
          <i class="fas fa-user-tie text-7xl text-blue-400"></i>
        </div>
        <h3 class="text-2xl font-semibold mb-2 text-blue-800"><?= htmlspecialchars($faculty['name']) ?></h3>
        <p class="text-blue-600 font-medium mb-2"><?= htmlspecialchars($faculty['designation']) ?></p>
        <p class="text-gray-700 mb-4 leading-relaxed">
          <?= htmlspecialchars($faculty['degree']) ?>. <?= htmlspecialchars($faculty['specialization']) ?>
        </p>
        <div class="flex space-x-5 text-gray-600">
          <a href="mailto:<?= htmlspecialchars($faculty['email']) ?>" class="hover:text-blue-700"><i class="far fa-envelope fa-lg"></i></a>
          <a href="<?= htmlspecialchars($faculty['linkedin']) ?>" class="hover:text-blue-700"><i class="fab fa-linkedin fa-lg"></i></a>
          <a href="<?= htmlspecialchars($faculty['website']) ?>" class="hover:text-blue-700"><i class="fas fa-globe fa-lg"></i></a>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</div>

<!-- ✅ Filtering Script -->
<script>
  const buttons = document.querySelectorAll(".tab-btn");
  const cards = document.querySelectorAll(".faculty-card");

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      // Remove active class
      buttons.forEach(b => b.classList.remove("bg-blue-600", "text-white"));
      buttons.forEach(b => b.classList.add("bg-gray-200"));
      
      // Add active to clicked
      btn.classList.remove("bg-gray-200");
      btn.classList.add("bg-blue-600", "text-white");

      const filter = btn.getAttribute("data-filter");

      cards.forEach(card => {
        if (filter === "all" || card.getAttribute("data-department") === filter) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
</script>

<?php include 'includes/footer.php'; ?>
