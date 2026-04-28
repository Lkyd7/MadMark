<?php
include 'partials/header.php';
include 'config/dbconfig.php';
?>




<section class="relative bg-gray-900 text-white overflow-hidden">
  <!-- Background Image -->
  <div class="absolute inset-0">
    <img 
      src="https://images.unsplash.com/photo-1605902711622-cfb43c44367f" 
      alt="Gaming setup" 
      class="w-full h-full object-cover opacity-40"
    />
  </div>

  <!-- Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-r from-black via-black/70 to-transparent"></div>

  <!-- Content -->
  <div class="relative max-w-7xl mx-auto px-6 py-24 lg:py-32 flex flex-col lg:flex-row items-center">
    
    <!-- Text Content -->
    <div class="lg:w-1/2 space-y-6">
      <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
        Level Up Your <span class="text-purple-500">Gaming Experience</span>
      </h1>
      <p class="text-lg text-gray-300 max-w-lg">
        Discover the latest games, consoles, and accessories. Upgrade your setup and dominate every match.
      </p>

      <!-- Buttons -->
      <div class="flex flex-wrap gap-4">
        <a href="#" 
           class="px-6 py-3 bg-purple-600 hover:bg-purple-700 rounded-xl font-semibold transition">
          Shop Now
        </a>
        <a href="#" 
           class="px-6 py-3 border border-gray-400 hover:border-white rounded-xl font-semibold transition">
          Browse Deals
        </a>
      </div>
    </div>

    <!-- Optional Feature Card -->
    <div class="lg:w-1/2 mt-12 lg:mt-0 flex justify-center">
      <div class="bg-white/10 backdrop-blur-lg p-6 rounded-2xl shadow-lg max-w-sm w-full">
        <h3 class="text-xl font-semibold mb-4">🔥 Featured Deal</h3>
        <p class="text-gray-300 mb-4">
          Save up to 30% on top-rated gaming gear this week only.
        </p>
        <a href="#" 
           class="block text-center bg-purple-500 hover:bg-purple-600 px-4 py-2 rounded-lg font-medium transition">
          View Offer
        </a>
      </div>
    </div>

  </div>
</section>



<!-- cards -->
<?php include 'partials/cards.php'; ?>

<section class="bg-gray-950 text-white py-16">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between mb-10">
      <h2 class="text-3xl md:text-4xl font-bold">
        🎮 Most Popular Games
      </h2>
      <a href="#" class="text-purple-400 hover:text-purple-300 font-medium">
        View All →
      </a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform">
        <img 
          src="https://images.unsplash.com/photo-1511512578047-dfb367046420" 
          alt="Shadow Frontier" 
          class="w-full h-56 object-cover"
        />
        <div class="p-5 space-y-3">
          <h3 class="text-xl font-semibold">Shadow Frontier</h3>
          <p class="text-gray-400 text-sm">
            An immersive stealth adventure with cinematic combat and a dark world.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-purple-400 font-bold text-lg">£39.99</span>
            <button class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-sm font-medium">
              Shop
            </button>
          </div>
        </div>
      </div>

      <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform">
        <img 
          src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1" 
          alt="Neon Drift" 
          class="w-full h-56 object-cover"
        />
        <div class="p-5 space-y-3">
          <h3 class="text-xl font-semibold">Neon Drift</h3>
          <p class="text-gray-400 text-sm">
            High-speed neon racing with intense tracks, sleek cars, and explosive action.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-purple-400 font-bold text-lg">£34.99</span>
            <button class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-sm font-medium">
              Shop
            </button>
          </div>
        </div>
      </div>

      <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform">
        <img 
          src="https://images.unsplash.com/photo-1511512578047-dfb367046420?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwyNjc3OTZ8MHwxfHNlYXJjaHwxfHxnaW1lfGVufDB8fHx8MTY4MTQ1MDYxMA&ixlib=rb-4.0.3&q=80&w=1080" 
          alt="Galaxy Siege" 
          class="w-full h-56 object-cover"
        />
        <div class="p-5 space-y-3">
          <h3 class="text-xl font-semibold">Galaxy Siege</h3>
          <p class="text-gray-400 text-sm">
            Command your fleet in a sci-fi strategy epic with stunning space battles.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-purple-400 font-bold text-lg">£44.99</span>
            <button class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-sm font-medium">
              Shop
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-900 text-white py-16">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between mb-10">
      <h2 class="text-3xl md:text-4xl font-bold">
        🔥 Trending Now
      </h2>
      <a href="#" class="text-purple-400 hover:text-purple-300 font-medium">
        Explore More →
      </a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform">
        <img 
          src="https://images.unsplash.com/photo-1511512578047-dfb367046420?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwyNjc3OTZ8MHwxfHNlYXJjaHwzfHxnaW1lfGVufDB8fHx8MTY4MTQ1MDYxMA&ixlib=rb-4.0.3&q=80&w=1080" 
          alt="Mystic Quest" 
          class="w-full h-56 object-cover"
        />
        <div class="p-5 space-y-3">
          <h3 class="text-xl font-semibold">Mystic Quest</h3>
          <p class="text-gray-400 text-sm">
            A magical RPG adventure with rich storytelling and unforgettable characters.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-purple-400 font-bold text-lg">£29.99</span>
            <button class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-sm font-medium">
              Shop
            </button>
          </div>
        </div>
      </div>

      <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform">
        <img 
          src="https://images.unsplash.com/photo-1523906630133-f6934a9f2010?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwyNjc3OTZ8MHwxfHNlYXJjaHw0fHxnaW1lfGVufDB8fHx8MTY4MTQ1MDYxMA&ixlib=rb-4.0.3&q=80&w=1080" 
          alt="Cyber Rally" 
          class="w-full h-56 object-cover"
        />
        <div class="p-5 space-y-3">
          <h3 class="text-xl font-semibold">Cyber Rally</h3>
          <p class="text-gray-400 text-sm">
            Futuristic racing action with customizable vehicles and neon city tracks.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-purple-400 font-bold text-lg">£24.99</span>
            <button class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-sm font-medium">
              Shop
            </button>
          </div>
        </div>
      </div>

      <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform">
        <img 
          src="https://images.unsplash.com/photo-1511512578047-dfb367046420?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwyNjc3OTZ8MHwxfHNlYXJjaHw1fHxnaW1lfGVufDB8fHx8MTY4MTQ1MDYxMA&ixlib=rb-4.0.3&q=80&w=1080" 
          alt="Legends of Valor" 
          class="w-full h-56 object-cover"
        />
        <div class="p-5 space-y-3">
          <h3 class="text-xl font-semibold">Legends of Valor</h3>
          <p class="text-gray-400 text-sm">
            Epic fantasy battles with heroic squads and immersive questlines.
          </p>
          <div class="flex items-center justify-between">
            <span class="text-purple-400 font-bold text-lg">£49.99</span>
            <button class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-sm font-medium">
              Shop
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-900 text-white py-16">
  <div class="max-w-7xl mx-auto px-6">
    
    <!-- Header -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        💬 What Gamers Say
      </h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Real feedback from players who upgraded their gaming experience with us.
      </p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Testimonial 1 -->
      <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-purple-500/20 transition">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/men/32.jpg" 
            alt="User" 
            class="w-12 h-12 rounded-full mr-4"
          />
          <div>
            <h4 class="font-semibold">James Carter</h4>
            <p class="text-sm text-gray-400">FPS Enthusiast</p>
          </div>
        </div>
        <p class="text-gray-300 text-sm">
          “Super fast delivery and the game selection is insane. I found titles here I couldn’t get anywhere else!”
        </p>
        <div class="mt-4 text-purple-400">★★★★★</div>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-purple-500/20 transition">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/women/44.jpg" 
            alt="User" 
            class="w-12 h-12 rounded-full mr-4"
          />
          <div>
            <h4 class="font-semibold">Sophie Nguyen</h4>
            <p class="text-sm text-gray-400">RPG Lover</p>
          </div>
        </div>
        <p class="text-gray-300 text-sm">
          “Absolutely love the deals! Picked up my favorite RPG at a huge discount. Will definitely shop again.”
        </p>
        <div class="mt-4 text-purple-400">★★★★★</div>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-purple-500/20 transition">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/men/65.jpg" 
            alt="User" 
            class="w-12 h-12 rounded-full mr-4"
          />
          <div>
            <h4 class="font-semibold">Liam O’Connor</h4>
            <p class="text-sm text-gray-400">Casual Gamer</p>
          </div>
        </div>
        <p class="text-gray-300 text-sm">
          “Clean website, easy checkout, and awesome support. My go-to store for anything gaming.”
        </p>
        <div class="mt-4 text-purple-400">★★★★★</div>
      </div>

    </div>
  </div>
</section>

<?php include 'partials/cards.php'; ?>

<!-- content will go here -->
 <?php
 include 'partials/footer.php';
    ?>
