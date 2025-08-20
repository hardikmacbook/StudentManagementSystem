<?php include 'includes/header.php'; ?>

<div class="max-w-5xl mx-auto pt-28 px-4">
  <!-- Page Title -->
  <div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-blue-700 mb-3">Contact Open2learn</h1>
    <p class="text-gray-600 text-lg">Have questions? We're here to help you.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
    
    <!-- Contact Info -->
    <div class="bg-white p-8 rounded-lg shadow-lg space-y-6">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Get in Touch</h2>

      <div class="flex items-start space-x-4">
        <div class="text-blue-600">
          <i class="fas fa-phone text-xl"></i>
        </div>
        <div>
          <h3 class="font-semibold">Phone</h3>
          <p class="text-gray-600">8238923182</p>
        </div>
      </div>

      <div class="flex items-start space-x-4">
        <div class="text-blue-600">
          <i class="fas fa-envelope text-xl"></i>
        </div>
        <div>
          <h3 class="font-semibold">Email</h3>
          <p class="text-gray-600">open2learnedu@gmail.com</p>
        </div>
      </div>

      <!-- Social Media -->
      <div class="mt-6">
        <h3 class="font-semibold mb-2">Follow Us</h3>
        <div class="flex space-x-4">
          <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f text-xl"></i></a>
          <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter text-xl"></i></a>
          <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-instagram text-xl"></i></a>
          <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin-in text-xl"></i></a>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-2xl font-semibold mb-6">Send Us a Message</h2>
      
      <form action="#" method="post" class="space-y-5">
        <div>
          <label for="name" class="block text-gray-700 mb-1">Your Name</label>
          <input type="text" id="name" name="name" 
                 class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        
        <div>
          <label for="email" class="block text-gray-700 mb-1">Your Email</label>
          <input type="email" id="email" name="email" 
                 class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        
        <div>
          <label for="subject" class="block text-gray-700 mb-1">Subject</label>
          <input type="text" id="subject" name="subject" 
                 class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        
        <div>
          <label for="message" class="block text-gray-700 mb-1">Message</label>
          <textarea id="message" name="message" rows="5" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
        </div>

        <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md transition">
          Send Message
        </button>
      </form>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
