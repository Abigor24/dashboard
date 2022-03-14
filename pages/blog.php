<?php
$title = "Blog Page";
?>

<?php

require_once("./include/config.php");
$posts_query = "SELECT * FROM `posts`";
$result_posts = mysqli_query($connect, $posts_query);

?>

<div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-indigo-500 pl-2 mb-10 text-2xl font-bold">Блог</div>
  <main class="py-4">
    <div class="px-4">
      <div class="block md:flex justify-between md:-mx-2">
      <?php while ($posts = mysqli_fetch_assoc($result_posts)) : ?>
          <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
            <div class="bg-white rounded-xl overflow-hidden outline-none border border-slate-200 relative">
              <img class="h-56 w-full object-cover object-center" src="<?= $posts['img'] ?>" alt="">
              <div class="p-4 h-auto md:h-40 lg:h-48">
                <a href="/?page=post&post_id=<?= $posts['id'] ?>" class="transition-all duration-500 block text-indigo-500 hover:text-indigo-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                  <?= $posts['title'] ?>
                </a>
                <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                  <?= $posts['intro'] ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile ?>
      </div>
    </div>
  </main>
</div>