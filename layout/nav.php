<?php

require_once("./include/config.php");
$nav_query = "SELECT * FROM `nav` WHERE visible = 1";
$result = mysqli_query($connect, $nav_query);

?>


<header class="bg-gray-900 text-white py-5 px-5">
  <div class="flex items-center justify-between max-w-6xl m-auto">
    <a href="/" class="text-2xl font-bold flex items-center">
      <svg id="logo-35" width="50" height="39" viewBox="0 0 50 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.4992 2H37.5808L22.0816 24.9729H1L16.4992 2Z" class="ccompli1" fill="#007AFF"></path>
        <path d="M17.4224 27.102L11.4192 36H33.5008L49 13.0271H32.7024L23.2064 27.102H17.4224Z" class="ccustom" fill="#312ECB"></path>
      </svg>
      <span class="ml-4">TailwindCSS</span>
    </a>
    <nav class="nav flex items-center">
      <?php while ($nav = mysqli_fetch_assoc($result)) : ?>
        <a href="<?= $nav['url'] ?>" class="nav__link block px-4 py-2 text-sm bg-transition rounded-lg transition-all duration-500 hover:bg-gray-800 ml-2"><?= $nav['title'] ?></a>
      <?php endwhile ?>

      <?php if (isset($_SESSION['is_auth'])) : ?>

        <div class="relative inline-block text-left">
          <div>
            <button type="button" class="nav__link flex items-center px-4 py-2 text-sm bg-transition rounded-lg transition-all duration-500 hover:bg-gray-800 ml-2" id="menu-button" aria-expanded="true" aria-haspopup="true">
              <img class="inline-block h-6 w-6 mr-3 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <?= $_SESSION['username'] ?>
              <!-- Heroicon name: solid/chevron-down -->
              <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>

          <!--
          Dropdown menu, show/hide based on menu state.

          Entering: "transition ease-out duration-100"
            From: "transform opacity-0 scale-95"
            To: "transform opacity-100 scale-100"
          Leaving: "transition ease-in duration-75"
            From: "transform opacity-100 scale-100"
            To: "transform opacity-0 scale-95"
        -->
          <div id="drop-menu" class="py-3 origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

            <a href="/?page=add-user" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Добавить аккаунт</a>
            <form method="POST" action="#" role="none">
              <a href="/?page=add-posts" type="submit" class="text-gray-700 block w-full text-left px-4 py-2 pb-0 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Добавить пост</a>

              <div class="py-1" role="none">
                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-3">
                    <div class="border-t border-gray-200"></div>
                  </div>
                </div>
                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Настройки аккаунта</a>
                <a href="/?page=auth&logout=1" type="submit" class="text-gray-700 block w-full text-left px-4 py-2 pb-0 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Выйти</a>
              </div>
          </div>
        </div>

      <?php else : ?>
        <a href="/?page=auth" class="nav__link block px-4 py-2 text-sm bg-transition rounded-lg transition-all duration-500 bg-indigo-500 hover:bg-gray-800 ml-2">Войти</a>
      <?php endif ?>
    </nav>
    <div id="menuToggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>