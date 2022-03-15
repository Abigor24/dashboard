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

  <div class="text-center pt-16 md:pt-32">
    <p class="text-sm md:text-base text-green-500 font-bold"><?= $date->format('d.m.Y - h:m / ') . $arr[$month] ?></p>
    <h1 class="font-bold break-normal text-3xl md:text-5xl"><?= $posts['title'] ?></h1>
  </div>


  <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded-xl" style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

  <div class="container max-w-5xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

      <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal rounded-xl border border-slate-200/10" style="font-family:Georgia,serif;">

        <p class="text-2xl md:text-3xl mb-5">
          <?= $posts['title'] ?>
        </p>

        <p class="py-6"><?= $posts['text'] ?></p>

        <blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12"><?= $posts['quotes'] ?></blockquote>

      </div>
    </div>
  </div>

<?php endwhile ?>