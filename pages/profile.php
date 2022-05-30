<?php

  require_once "./include/config.php";
  require_once "./include/function.php";

  if (!isset($_SESSION['is_auth'])) {
    redirect_to('/?page=auth');
  }


  $id = isset($_GET['user_id']) ? $_GET['user_id'] : null;
  $users_query = "SELECT * FROM `users` WHERE id = $id";
  $users_result = mysqli_query($connect, $users_query);
  $users_info = mysqli_fetch_assoc($users_result)

?>


<div class="max-w-6xl m-auto mt-10 mb-10">
  <div class="grid grid-cols-4 gap-5">
    <div class="p-10 border border-slate-200 rounded-xl h-max">
      <h1 class="text-lg mb-5">Настройки</h1>
      <ul>
        <li class="mb-4">
          <button class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
          </svg>
            <span class="ml-2">Профиль</span>
          </button>
        </li>
        <li class="mb-4">
        
          <button class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
          </svg>
            <span class="ml-2">Безопастность</span>
          </button>
        </li>
      </ul>
    </div>

    <div class="col-span-3 p-10 border border-slate-200 rounded-xl">
      <h1 class="pb-4 text-lg">Настройки профиля пользователя <span class="uppercase font-medium"><?= $users_info['name']; ?></span></h1>

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

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="w-full">
          <div class="mb-10">
            <p>Имя</p>
            <input name="username" class="form-input" type="text" placeholder="Введите ваше имя" value="<?= $users_info['username']; ?>">
          </div>
          <div class="mb-10">
            <p>E-mail Адрес</p>
            <input name="email" class="form-input" type="text" placeholder="Введите ваш E-mail" value="<?= $users_info['email']; ?>">
          </div>
          <div>
            <p>Обо мне</p>
            <textarea class="form-input" name="" id="" cols="30" rows="10" placeholder="Введите описание о себе"></textarea>
          </div>

          <button name="send" type="submit" class="form-button">Сохранить</button>
        </form>

      </div>
    </div>
  </div>

</div>