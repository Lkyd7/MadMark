<?php 
include 'partials/header.php';
include 'scripts/game.php';
include 'scripts/featured_games.php';

 $randomnumber_number = rand(7, 14)

?>

<!--breadcrumbs-->

<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="#" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-4 h-4 w-4">
          <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
          <polyline points="9 22 9 12 15 12 15 22"></polyline>
        </svg>
        Documentation
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <span class="mx-2.5 text-gray-800 ">/</span>
        <a href="#" class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
          Database
        </a>
      </div>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <span class="mx-2.5 text-gray-800 ">/</span>
        <span class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
          Replication
        </span>
      </div>
    </li>
  </ol>
</nav>


<!--game info -->

<section class="flex flex-col max-md:gap-20 md:flex-row pb-20 items-center justify-between mt-20 px-4 md:px-16 lg:px-24 xl:px-32">
    <div class="flex flex-col items-center md:items-start">
        <div class="flex flex-wrap items-center justify-center p-1.5 rounded-full border border-slate-400 text-gray-500 text-xs">
            <div class="flex items-center">
                <img class="size-7 rounded-full border-3 border-white"
                    src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=50" alt="userImage1">
                <img class="size-7 rounded-full border-3 border-white -translate-x-2"
                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=50" alt="userImage2">
                <img class="size-7 rounded-full border-3 border-white -translate-x-4"
                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=50&h=50&auto=format&fit=crop"
                    alt="userImage3">
            </div>
        
        </div>
        <h1 class="text-center md:text-left text-5xl leading-[68px] md:text-6xl md:leading-[84px] font-medium max-w-xl text-slate-900">
            <?= htmlspecialchars($game['game_name']) ?>
        </h1>
        <p class="text-center md:text-left text-sm text-slate-700 max-w-lg mt-2">
            <?= htmlspecialchars($game['game_description']) ?>
        </p>
        <p class="text-center md:text-left text-sm text-slate-700 max-w-lg mt-2">
            <?= htmlspecialchars($game['game_price']) ?>
        </p>
        <div class="flex items-center gap-4 mt-8 text-sm">
           
        </div>
    </div>
    <img src="assets/image/<?= htmlspecialchars($game['game_image']) ?>" alt="hero" class="max-w-xs sm:max-w-sm lg:max-w-md transition-all duration-300">
</section>

<section class="py-16 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Section Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured Games</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Explore some of the most exciting titles available right now. Each game offers a unique world, thrilling gameplay, and unforgettable experiences.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-8 md:grid-cols-3">
        <?php foreach ($featured_games as $game): ?>

      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img 
          src="assets/image/<?= htmlspecialchars($game['game_image'], ENT_QUOTES, 'UTF-8') ?>" 
          alt="<?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?>" 
          class="w-full h-48 object-cover"
        >
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?> </h3>
          <p class="text-gray-600 mb-4">
            Dive into a futuristic world filled with neon lights, fast action, and mystery.
          </p>
          <button class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            More Info
          </button>
        </div>
      </div>
<?php endforeach ?>
     
    </div>
  </div>
</section>

<?php
include "partials/footer.php";
?>