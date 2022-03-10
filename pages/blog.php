<?php
  $title = "Blog Page";
?>

<?php

  require_once("./include/config.php");
  $posts_query = "SELECT * FROM `posts`";
  $result_posts = mysqli_query($connect, $posts_query);

?>

<?php include "./layout/header.php"; ?>
<?php include "./layout/nav.php"; ?>

<div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-blue-400 pl-2 mb-10 text-2xl font-bold">Blog Page</div>

  <div class="row grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full">
    <?php while ($posts = mysqli_fetch_assoc($result_posts)): ?>
      <div class="col w-full px-4">
        <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden mb-10 transition-all duration-500 hover:shadow-2xl hover:shadow-black/10">
          <img src="<?= $posts['img'] ?>" alt="image" class="w-full">
          <div class="p-5">
            <h3>
              <a href="javascript:void(0)" class="block font-semibold text-xl mb-5 transition-all duration-500">
                <?= $posts['title'] ?>
              </a>
            </h3>
            <p class="text-base text-gray-400 leading-relaxed mb-7">
            <?= $posts['intro'] ?>
            </p>
            <a href="/?page=post&post_id=<?= $posts['id'] ?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-blue-500 hover:bg-blue-500 hover:text-white transition-all duration-500">
              View Details
            </a>
          </div>
        </div>
      </div>
    <?php endwhile ?>
  </div>
</div>

<?php include "./layout/footer.php"; ?>