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
    </nav>
    <div id="menuToggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>