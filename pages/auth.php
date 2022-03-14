<?php

  require_once "./include/config.php";
  require_once "./include/function.php";

  if(isset($_GET['logout'])){
    session_destroy();
    redirect_to("/");
  }

  if(isset($_POST['send'])){
    $login = clear_field($_POST['name']);
    $password = clear_field($_POST['password']);

    $users = select_all_users('users');

    while ($user = mysqli_fetch_assoc($users)) {
      if($user['name'] === $login){
        if( password_verify($password, $user['password']) ){
          $_SESSION['is_auth'] = true;
          $_SESSION['name'] = $user['name'];
          $_SESSION['username'] = $user['username'];
          $_SESSION['email'] = $user['email'];
        } else {
          echo "Не верный пароль!";
        }
      } else {
        echo "Нет такого пользователя";
      }
    }

    redirect_to("/");
  }

?>



<?php if(!isset($_SESSION['is_auth'])): ?>

<div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-indigo-500 pl-2 mb-10 text-2xl font-bold">Авторизация</div>

  <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST">
      <div class="overflow-hidden sm:rounded-2xl border border-slate-200">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="name" class="block text-sm font-medium text-gray-700">Логин</label>
              <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

            <div class="col-span-6 md:col-span-3">
              <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
              <input type="password" name="password" id="password" autocomplete="email" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

          </div>
        </div>
        <div class="px-4 py-3 bg-gray-800 text-right sm:px-6">
          <button type="submit" name="send" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Войти</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php else: ?>
  <div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-blue-400 pl-2 mb-10 text-2xl font-bold">Вы вошли как: <?= $_SESSION['username'] ?></div>
  <div class="px-4 py-3 bg-gray-800 text-right sm:px-6">
    <a href="/?page=auth&logout=1" type="submit" name="send" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Выйти</a>
  </div>

<?php endif ?>