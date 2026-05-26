<?php
include 'config/dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    
<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<header class="bg-white">
  <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
    <div class="flex lg:flex-1">
      <a href="index.php" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img src="mad_mike_logo.png" alt="" class="h-8 w-auto" />
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <el-popover-group class="hidden lg:flex lg:gap-x-12">
      <a href="games.php" class="text-sm/6 font-semibold text-gray-900">All Games</a>
      <a href="edit_delete.php" class="text-sm/6 font-semibold text-gray-900">Update Game</a>
      <a href="contact.php" class="text-sm/6 font-semibold text-gray-900">Contact</a>
    </el-popover-group>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center gap-4">
      <form action="search_result.php" method="get" class="flex items-center rounded-full border border-gray-200 bg-white px-3 py-2 shadow-sm focus-within:border-purple-500 focus-within:ring-2 focus-within:ring-purple-500/20">
        <label for="site-search" class="sr-only">Search</label>
        <input id="site-search" name="q" type="search" placeholder="Search" class="w-40 bg-transparent text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none" />
        <button type="submit" class="ml-2 inline-flex h-9 w-9 items-center justify-center rounded-full bg-purple-600 text-white hover:bg-purple-500">
          <svg viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
            <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.386a1 1 0 01-1.414 1.415l-4.387-4.387zm-4.9.68a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
          </svg>
        </button>
      </form>
      
    </div>
  </nav>

</header>
