<?php
$title = "Blog Page";
?>

<?php

require_once("./include/config.php");
$posts_query = "SELECT * FROM `posts`";
$result_posts = mysqli_query($connect, $posts_query);

?>


<div class="max-w-6xl m-auto mt-10 mb-10">
  <div class="border-l-2 border-l-indigo-500 pl-2 mb-10 text-2xl font-bold">Блог</div>
  <div class="row grid gap-4 grid-cols-1">
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
    <fuse-card class=" transition duration-500 hover:shadow-[0_0_60px_-15px_rgba(0,0,0,0.3)] hover:shadow-black/10 flex flex-col md:flex-row filter-article border border-slate-200/40 overflow-hidden rounded-xl">
      <div class="flex-0 md:w-2/5 w-full h-96 object-cover p-2">
        <img src="<?= $posts['img'] ?>" alt="Card cover image" class="w-full h-full object-cover rounded-xl">
      </div>
      <div class="flex flex-col flex-auto w-3/5 m-8 mb-4">
        <div class="text-2xl font-semibold leading-tight"><?= $posts['title'] ?></div>
        <h2 class="mt-3 mb-3 text-sm text-indigo-500 uppercase"><?= $date->format("d, $arr[$month], Y") ?></h2>
        <div class="mt-4"> <?= $posts['intro'] ?> </div>
        <div class="flex items-center mt-5 mb-3">
          <img class="w-8 h-8 rounded-full object-cover mr-3" src="./assets/img/profile/male-04.jpg" alt="">
          <div>
            <p class="font-bold text-gray-900">Jim Harris</p>
          </div>
        </div>
        <div class="mt-3 -mx-3">
          <a href="/?page=post&post_id=<?= $posts['id'] ?>" class="group transition-all duration-500 px-4 py-2 text-indigo-500 inline-flex hover:bg-indigo-200 bg-indigo-100 items-center rounded-full" tabindex="0">
            <span class="mr-3 group-hover:mr-4 transition-all duration-500"> Подробнее </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </fuse-card>
    <?php endwhile ?>
  </div>