<?php include 'includes/header.php'; ?>

<div class="max-w-3xl mx-auto pt-28 px-4">
  <!-- Page Title -->
  <div class="text-center mb-10">
    <h1 class="text-4xl font-bold text-blue-700 mb-3">Contact</h1>
    <p class="text-gray-600 text-lg">We’d love to hear from you. Send us a message below.</p>
  </div>

  <!-- Contact Form -->
  <div class="bg-white p-8 rounded-lg shadow-lg mb-10">
    <form action="https://api.web3forms.com/submit"
  method="POST" class="space-y-6">


      <!-- Replace with your Access Key -->
    <input type="hidden" name="access_key" value="1f630424-1e67-4fff-a6f4-3e9ece6b2772">
      
      <div>
        <label for="name" class="block text-gray-700 mb-1">Your Name</label>
        <input type="text" id="name" name="name" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1E3A8A]" 
               placeholder="Enter your name" required>
      </div>
      
      <div>
        <label for="email" class="block text-gray-700 mb-1">Your Email</label>
        <input type="email" id="email" name="email" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1E3A8A]" 
               placeholder="Enter your email" required>
      </div>
      
      <div>
        <label for="subject" class="block text-gray-700 mb-1">Subject</label>
        <input type="text" id="subject" name="subject" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1E3A8A]" 
               placeholder="Write subject" required>
      </div>
      
      <div>
        <label for="message" class="block text-gray-700 mb-1">Message</label>
        <textarea id="message" name="message" rows="5" 
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1E3A8A]" 
                  placeholder="Write your message..." required></textarea>
      </div>

      <button type="submit" 
              class="w-full bg-[#1E3A8A] hover:bg-[#BFA14A] text-white hover:text-black font-semibold py-3 rounded-lg transition">
        Send Message
      </button>
    </form>
  </div>
</div>




<?php include 'includes/footer.php'; ?>
