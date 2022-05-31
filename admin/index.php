<?php
  session_start();
  ob_start();

?>

<?php include "./layout/header.php"; ?>
<?php include "./include/config.php"; ?>


<?php

$url = null;
if (isset($_GET['page'])) {
  $url = urldecode($_GET['page']);
}

?>


<?php
if ($url) {
  switch ($url) {
    case 'dashboard':
      echo "<div class='app overflow-hidden'>";
        include "./layout/sidebar.php";
        include "./pages/dashboard.php";
      echo "</div>";
      break;

    default:
      include "./pages/404.php";
      break;
  }
} else {
  include "./pages/login.php";
}
?>

<?php include "./layout/footer.php"; ?>
<?php ob_flush(); ?>