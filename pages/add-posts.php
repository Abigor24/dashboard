<?php

  require_once "./include/config.php";
  require_once "./include/function.php";

  if (!isset($_SESSION['is_auth'])) {
    redirect_to('/');
  }

?>