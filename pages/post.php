<?php

require_once("./include/config.php");

$id = isset($_GET['post_id']) ? $_GET['post_id'] : null;
$posts_query = "SELECT * FROM `posts` WHERE id = $id";
$result_posts = mysqli_query($connect, $posts_query);


?>
<?php while ($posts = mysqli_fetch_assoc($result_posts)) : ?>

  <?php
    $arr = [
      'Январь',
      'Февраль',
      'Март',
      'Апрель',
      'Май',
      'Июнь',
      'Июль',
      'Август',
      'Сентябрь',
      'Октябрь',
      'Ноябрь',
      'Декабрь'
    ];

    $date = new DateTime($posts['date']);
    $month = date('n')-1;
  ?>



<div class="max-w-6xl m-auto mt-10">
    <div class="inline-block">
      <a href="/?page=blog" class="flex items-center py-2 px-4 bg-white text-gray-900 rounded-xl border border-slate-200 hover:bg-indigo-500 hover:text-white transition duration-500 hover:border-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
      </svg>
        <span class="ml-1">Вернуться назад</span>
      </a>
    </div>

    <div>
      <div class="posts mt-10">
        <div class="flex items-center">
        <h2 class="text-indigo-500 font-bold uppercase"><?= $date->format("d, $arr[$month], Y  -> G:i") ?></h2>
        </div>
        <div class="mt-3">
          <h1 class="text-gray-900 text-4xl font-bold"><?= $posts['title']; ?></h1>
        </div>
        <div class="mt-3">
          <p class="text-slate-500 text-lg font-normal"><?= $posts['intro']; ?></p>
        </div>
        <div class="flex items-center mt-3 mb-8">
          <img class="w-8 h-8 rounded-full object-cover mr-3" src="./assets/img/profile/male-04.jpg" alt="">
          <div>
            <p class="text-gray-500">Опубликовал: <span class="font-bold text-gray-900">Monica Fishkin</span></p>
          </div>
        </div>
        <div class="mt-3 min-h-[650px]">
          <img class="rounded-xl object-cover w-full" src="<?= $posts['img']; ?>" alt="">
        </div>
        <div class="mt-5 font-normal text-slate-700 leading-9">
          <?= $posts['text']; ?>
        </div>
      </div>
    </div>
</div>

<?php endwhile ?>