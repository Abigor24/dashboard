<?php
  $title = "Home Page";
?>

<?php include "./layout/header.php"; ?>
<?php include "./layout/nav.php"; ?>

<?php

  $url = null;
  if (isset($_GET['page'])) {
    $url = urlencode($_GET['page']);
  }

?>

<?php

  if($url){
    switch ($url) {
      case 'post':
        include "./pages/post.php";
        break;
      
      default:
        include "./pages/404.php";
        break;
    }
  } else { ?>
    <div class="max-w-6xl m-auto mt-10">
      <div class="border-l-2 border-l-blue-400 pl-2 mb-3 text-2xl font-bold">Home Page</div>
    </div>
 <?php } ?>



<?php include "./layout/footer.php"; ?>