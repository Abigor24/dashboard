<?php

require_once("./include/config.php");

$id = isset($_GET['post_id']) ? $_GET['post_id'] : null;
$posts_query = "SELECT * FROM `posts` WHERE id = $id";
$result_posts = mysqli_query($connect, $posts_query);


?>
<?php while ($posts = mysqli_fetch_assoc($result_posts)) : ?>
  <div class="max-w-6xl m-auto mt-10">
    <div class="h-96 overflow-hidden mb-16">
      <img src="<?= $posts['img'] ?>" alt="image" class="w-full bg-cover align-middle bg-bottom">
    </div>
    <div class="border-l-2 border-l-blue-400 pl-2 mb-10 text-2xl font-bold">
      <h3>
        <?= $posts['title'] ?>
    </div>
    </h3>
    <p class="text-base text-gray-400 leading-relaxed mb-7">
      <?= $posts['intro'] ?>
    </p>
  </div>
<?php endwhile ?>