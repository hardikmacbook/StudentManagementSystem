  <?php include 'includes/header.php'; ?>

<div class="max-w-4xl mx-auto pt-28">
  <h1 class="text-3xl font-bold mb-8 text-blue-800">Contact Us</h1>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold mb-4">Get in Touch</h2>
      
      <div class="space-y-4">
        <div class="flex items-start">
          <div class="text-blue-600 mr-4">
            <i class="fas fa-map-marker-alt text-xl"></i>
          </div>
          <div>
            <h3 class="font-semibold">Address</h3>
            <p class="text-gray-700">123 Education Street<br>Learning City, LC 12345</p>
          </div>
        </div>
        
        <div class="flex items-start">
          <div class="text-blue-600 mr-4">
            <i class="fas fa-phone text-xl"></i>
          </div>
          <div>
            <h3 class="font-semibold">Phone</h3>
            <p class="text-gray-700">(123) 456-7890</p>
          </div>
        </div>
        
        <div class="flex items-start">
          <div class="text-blue-600 mr-4">
            <i class="fas fa-envelope text-xl"></i>
          </div>
          <div>
            <h3 class="font-semibold">Email</h3>
            <p class="text-gray-700">info@courseportal.example</p>
          </div>
        </div>
        
        <div class="flex items-start">
          <div class="text-blue-600 mr-4">
            <i class="fas fa-clock text-xl"></i>
          </div>
          <div>
            <h3 class="font-semibold">Office Hours</h3>
            <p class="text-gray-700">Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday: 10:00 AM - 2:00 PM<br>Sunday: Closed</p>
          </div>
        </div>
      </div>
      
      <div class="mt-6">
        <h3 class="font-semibold mb-2">Connect With Us</h3>
        <div class="flex space-x-4">
          <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f text-xl"></i></a>
          <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter text-xl"></i></a>
          <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-instagram text-xl"></i></a>
          <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin-in text-xl"></i></a>
        </div>
      </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold mb-4">Send Us a Message</h2>
      
      <form action="#" method="post" class="space-y-4">
        <div>
          <label for="name" class="block text-gray-700 mb-1">Name</label>
          <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        
        <div>
          <label for="email" class="block text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        
        <div>
          <label for="subject" class="block text-gray-700 mb-1">Subject</label>
          <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        
        <div>
          <label for="message" class="block text-gray-700 mb-1">Message</label>
          <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
        </div>
        
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md transition duration-300">Send Message</button>
      </form>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>