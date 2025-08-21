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
      // JSON data load
      $facultyData = json_decode(file_get_contents("faculty.json"), true);

      foreach ($facultyData as $faculty) {
    ?>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 p-6">
      <div class="h-64 bg-blue-50 flex items-center justify-center rounded-md mb-6">
        <i class="fas fa-user-tie text-7xl text-blue-400"></i>
      </div>
      <h3 class="text-2xl font-semibold mb-2 text-blue-800"><?= $faculty['name'] ?></h3>
      <p class="text-blue-600 font-medium mb-2"><?= $faculty['designation'] ?></p>
      <p class="text-gray-700 mb-4 leading-relaxed">
        <?= $faculty['degree'] ?>. <?= $faculty['specialization'] ?>
      </p>
      <div class="flex space-x-5 text-gray-600">
        <a href="mailto:<?= $faculty['email'] ?>" class="hover:text-blue-700"><i class="far fa-envelope fa-lg"></i></a>
        <a href="<?= $faculty['linkedin'] ?>" class="hover:text-blue-700"><i class="fab fa-linkedin fa-lg"></i></a>
        <a href="<?= $faculty['website'] ?>" class="hover:text-blue-700"><i class="fas fa-globe fa-lg"></i></a>
      </div>
    </div>
    <?php } ?>

  </div>
</div>
</div>

<?php include 'includes/footer.php'; ?>
