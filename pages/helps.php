<?php
  require_once "./include/config.php";
  require_once "./include/function.php";

?>


<div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-indigo-500 pl-2 mb-10 text-2xl font-bold">Для тех кто хочет запустить проект, и управлять им</div>

  <div class="w-full">
    <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-gray-100 text-sm font-mono subpixel-antialiased 
            bg-gray-800  pb-6 rounded-lg leading-normal overflow-hidden">
      <div class="top mb-2 flex">
        <div class="h-3 w-3 bg-red-500 rounded-full"></div>
        <div class="ml-2 h-3 w-3 bg-orange-300 rounded-full"></div>
        <div class="ml-2 h-3 w-3 bg-green-500 rounded-full"></div>
      </div>
      <div class="mt-4 flex">
        <span class="text-green-400">nodejs</span>
        <p class="flex-1 typing items-center pl-2">
          npm install
          <br>
          npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --watch
        </p>
      </div>
    </div>

    <div class="mt-10 border-l-2 border-l-indigo-500 pl-2 mb-10 text-2xl font-bold">Все папки и ее пути:</div>

    <div class="mt-5 coding inverse-toggle px-5 pt-4 shadow-lg text-gray-100 text-sm font-mono subpixel-antialiased 
            bg-gray-800  pb-6 rounded-lg leading-normal overflow-hidden">
      <div class="top mb-2 flex">
        <div class="h-3 w-3 bg-red-500 rounded-full"></div>
        <div class="ml-2 h-3 w-3 bg-orange-300 rounded-full"></div>
        <div class="ml-2 h-3 w-3 bg-green-500 rounded-full"></div>
      </div>
      <div class="mt-4 flex">
        <span class="text-green-400">CSS</span>
        <p class="flex-1 typing items-center pl-2">
            --| assets\css\input.css <br>
            --| assets\css\output.css <br>
            --| assets\css\style.css <br>
        </p>
      </div>

      <div class="mt-4 flex">
        <span class="text-green-400">img</span>
        <p class="flex-1 typing items-center pl-2">
            --| assets\img\profile <br>
            --| assets\img<br>
        </p>
      </div>

      <div class="mt-4 flex">
        <span class="text-green-400">JS</span>
        <p class="flex-1 typing items-center pl-2">
            --| assets\js\index.js <br>
        </p>
      </div>

      <div class="mt-4 flex">
        <span class="text-green-400">include</span>
        <p class="flex-1 typing items-center pl-2">
            --| include\config.php<br>
            --| include\function.php <br>
        </p>
      </div>

      <div class="mt-4 flex">
        <span class="text-green-400">layout</span>
        <p class="flex-1 typing items-center pl-2">
          --| layout\header.php <br>
          --| layout\nav.php <br>
            --| layout\footer.php <br>
        </p>
      </div>

      <div class="mt-4 flex">
        <span class="text-green-400">pages</span>
        <p class="flex-1 typing items-center pl-2">
            --| pages\404.php <br>
            --| pages\about.php <br>
            --| pages\add-posts.php <br>
            --| pages\add-user.php <br>
            --| pages\auth.php <br>
            --| pages\blog.php <br>
            --| pages\contacts.php <br>
            --| pages\helps.php <br>
            --| pages\main.php <br>
            --| pages\posts.php <br>
            --| pages\profile.php <br>
        </p>
      </div>
    </div>
  </div>

</div>