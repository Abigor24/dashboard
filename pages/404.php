<?php
$title = "404";
?>

<?php include "./layout/header.php"; ?>

<div class="min-h-screen md:flex">
  <div class="flex items-center justify-center w-full py-10 bg-white md:w-1/2">
    <div class="max-w-md">
      <div class="text-5xl font-black text-gray-800 md:text-8xl"> 404 </div>

      <div class="w-16 h-1 my-3 bg-primary md:my-6"></div>

      <p class="text-2xl font-light leading-normal text-gray-600 md:text-3xl"> Not Found </p>
      <a href="/">
        <button class="px-4 py-2 mt-4 text-lg text-white transition-colors duration-200 transform rounded-lg hover:bg-teal-500 bg-teal-300"> Go Home </button>
      </a>
    </div>
  </div>

  <div class="relative w-full pb-full md:flex md:pb-0 md:min-h-screen md:w-1/2">
    <div class="flex items-center w-full h-full max-w-4xl mx-auto">
      <img class="object-cover w-full" src="./assets/img/404-error-with-broken-robot-pana.svg" alt="Error">
    </div>
  </div>
</div>

<?php include "./layout/footer.php"; ?>