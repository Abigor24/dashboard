<?php

  require_once "./include/config.php";
  require_once "./include/function.php";

  if(!isset($_SESSION['is_auth'])){
    redirect_to('/?page=auth');
  }


?>

<div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-indigo-500 pl-2 mb-10 text-2xl font-bold">Настройки профиля</div>




  <div class="flex flex-col shadow bg-card rounded-b-2xl">
    <div>
      <img src="./assets/img/cover.jpg" alt="Cover image" class="h-40 lg:h-80 object-cover w-full rounded-t-2xl">
    </div>
    <div class="flex flex-col flex-0 lg:flex-row items-center max-w-5xl w-full mx-auto px-8 py-5 bg-card rounded-b-3xl">
      <div class="rounded-full">
        <img src="./assets/img/profile/male-04.jpg" alt="User avatar" class="w-16 h-16 rounded-full">
      </div>
      <div class="flex flex-col items-center lg:items-start mt-4 lg:mt-0 lg:ml-8">
        <div class="text-lg font-bold leading-none text-gray-800"><?= $_SESSION['username'] ?></div>
        <div class="text-secondary text-gray-400"><?= $_SESSION['email'] ?></div>
      </div>
      <div class="hidden lg:flex h-8 mx-8 border-l-2"></div>
      <div class="flex items-center mt-6 lg:mt-0 space-x-6">
        <div class="flex flex-col items-center text-gray-800"><span class="font-bold">200k</span><span class="text-sm font-medium text-secondary text-gray-400">FOLLOWERS</span></div>
        <div class="flex flex-col items-center text-gray-800"><span class="font-bold">1.2k</span><span class="text-sm font-medium text-secondary text-gray-400">FOLLOWING</span></div>
      </div>
    </div>
  </div>

  

</div>