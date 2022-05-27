<?php

  require_once "./include/config.php";
  require_once "./include/function.php";

  if (!isset($_SESSION['is_auth'])) {
    redirect_to('/?page=auth');
  }

?>


<div class="max-w-6xl m-auto mt-10 mb-10">
  <div class="grid grid-cols-4 gap-5">
    <div class="p-10 border border-slate-200 rounded-xl h-max">
      <h1 class="text-lg mb-5">Настройки</h1>
      <ul>
        <li class="mb-4">
          <button class="pl-2 border-l border-indigo-500">Профиль</button>
        </li>
        <li class="mb-4">
          <button>Безопастность</button>
        </li>
      </ul>
    </div>

    <div class="col-span-3 p-10 border border-slate-200 rounded-xl">
      <h1 class="pb-4 text-lg">Настройки профиля пользователя <?= $_SESSION['name']; ?></h1>

      <div class="pt-4 border-t border-slate-200 flex">
        <div class="max-w-[100px] max-h-[100px] overflow-hidden object-cover rounded-full relative mr-10">
          <img class="w-full z-0" src="https://kartinkin.net/uploads/posts/2022-02/1645062630_1-kartinkin-net-p-kartinki-dlya-profilya-1.jpg" alt="">
          <div class="absolute bottom-0 z-50 new-avatar">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path class="stroke-white" stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                <path class="stroke-white" stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </button>
          </div>
        </div>

        <form action="" method="post" class="w-full">
          <div class="mb-10">
            <p>Имя</p>
            <input class="w-full rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100 resize-none" type="text" placeholder="Введите ваше имя" value="<?= $_SESSION['username']; ?>">
          </div>
          <div class="mb-10">
            <p>E-mail Адрес</p>
            <input class="w-full rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100 resize-none" type="text" placeholder="Введите ваш E-mail" value="<?= $_SESSION['email']; ?>">
          </div>
          <div>
            <p>Обо мне</p>
            <textarea class="w-full rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100 resize-none" name="" id="" cols="30" rows="10" placeholder="Введите описание о себе"></textarea>
          </div>

          <?php if (true) : ?>

          <button class="mt-10 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600 duration-300">Изменить профиль</button>
          
          <?php else : ?>

          <button class="mt-10 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600 duration-300">Сохранить</button>

          <?php endif ?>

          
        </form>

      </div>
    </div>
  </div>

</div>