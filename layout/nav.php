<?php

require_once("./include/config.php");
$nav_query = "SELECT * FROM `nav` WHERE visible = 1";
$result = mysqli_query($connect, $nav_query);

?>


<header class="bg-gray-900 text-white py-5 px-5 sticky top-0 border-b border-slate-100/10 z-50">
  <div class="flex items-center justify-between max-w-6xl m-auto">
    <a href="/" class="text-2xl font-bold flex items-center">
      <svg id="logo-35" width="50" height="39" viewBox="0 0 50 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.4992 2H37.5808L22.0816 24.9729H1L16.4992 2Z" class="ccompli1" fill="#6366F1"></path>
        <path d="M17.4224 27.102L11.4192 36H33.5008L49 13.0271H32.7024L23.2064 27.102H17.4224Z" class="ccustom" fill="#4649be"></path>
      </svg>
      <span class="ml-4">TailwindCSS</span>
    </a>
    <nav class="nav flex items-center">
      <?php while ($nav = mysqli_fetch_assoc($result)) : ?>
        <a href="<?= $nav['url'] ?>" class="nav__link block px-4 py-2 text-sm bg-transition rounded-lg transition-all duration-500 hover:bg-gray-800 ml-2"><?= $nav['title'] ?></a>
      <?php endwhile ?>
      
        <?php if(!isset($_SESSION['is_auth'])): ?>

        <a href="/?page=helps" class="flex items-center nav__link px-4 py-2 text-sm bg-transition rounded-lg transition-all duration-500 hover:bg-gray-800 ml-2" role="menuitem" tabindex="-1" id="menu-item-0">
          <span class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
          </span>
          Читать документацию
        </a>

      <?php endif ?>

      <?php if (isset($_SESSION['is_auth'])) : ?>


        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative inline-block text-left">
          <div>
            <button type="button" class="nav__link flex items-center px-4 py-2 text-sm bg-transition rounded-lg transition-all duration-500 bg-indigo-500 hover:bg-gray-800 ml-2" id="menu-button" aria-expanded="true" aria-haspopup="true">
              <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white mr-3" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
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
          <div id="drop-menu" class="origin-top-right overflow-hidden absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="" role="none">

              <a href="/?page=add-user" class="flex items-center bg-gray-transparent hover:bg-indigo-500 hover:text-white transition-all duration-500 text-gray-700 px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                  </svg>
                </span>
                Добавить аккаунт
              </a>
              <a href="/?page=add-posts" class="flex items-center bg-gray-transparent hover:bg-indigo-500 hover:text-white transition-all duration-500 text-gray-700 px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                  </svg>
                </span>
                Добавить новость
              </a>

              <div class="hidden sm:block" aria-hidden="true">
                <div class="py-1">
                  <div class="border-t border-gray-200"></div>
                </div>
              </div>


              <a href="/?page=helps" class="flex items-center bg-gray-transparent hover:bg-indigo-500 hover:text-white transition-all duration-500 text-gray-700 px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                  </svg>
                </span>
                Читать документацию</a>
              <div class="hidden sm:block" aria-hidden="true">
                <div class="py-1">
                  <div class="border-t border-gray-200"></div>
                </div>
              </div>

              <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
              <a href="/?page=profile" class="flex items-center bg-gray-transparent hover:bg-indigo-500 hover:text-white transition-all duration-500 text-gray-700 px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                  </svg>
                </span>
                Настройки
              </a>
              <a href="/?page=auth&logout=1" type="submit" class="flex items-center bg-gray-transparent hover:bg-indigo-500 hover:text-white transition-all duration-500 text-gray-700 w-full text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg>
                </span>
                Выйти
              </a>
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