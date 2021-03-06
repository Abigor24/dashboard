<?php

  require_once "./include/config.php";
  require_once "./include/function.php";

  if(!isset($_SESSION['is_auth'])){
    redirect_to('/?page=404');
  }

  $admin_roles_query = "SELECT * FROM `users`";
  $admin_roles_result = mysqli_query($connect, $admin_roles_query);
  while($admin_roles = mysqli_fetch_assoc($admin_roles_result)){
      if($admin_roles['id_roles'] == '1' || $_SESSION['name'] == 'admin' ){
        $roles_query = "SELECT * FROM `roles`";
        $result = mysqli_query($connect, $roles_query);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
          $name = clear_field($_POST['name']);
          $username = clear_field($_POST['username']);
          $email = clear_field($_POST['email']);
          $password = clear_field($_POST['password']);
          $hash_password = password_hash($password, PASSWORD_DEFAULT);
          $role = (int) $_POST['role'];

          $cols = "(`name`, `username`, `email`, `password`, `id_roles`)";
          $values = "('$name', '$username', '$email', '$hash_password', '$role')";

          create_user_in_db('users', $cols, $values);
        }
      } else {
        redirect_to('/?page=404');
      }
  }

  


  

?>





<div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-indigo-500 pl-2 mb-10 text-2xl font-bold">Добавление пользователя</div>


  <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="overflow-hidden sm:rounded-2xl border border-slate-200">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="name" class="block text-sm font-medium text-gray-700">Логин</label>
              <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="username" class="block text-sm font-medium text-gray-700">ФИО</label>
              <input type="text" name="username" id="username" autocomplete="family-name" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="block text-sm font-medium text-gray-700">Почта</label>
              <input type="email" name="email" id="email" autocomplete="email" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="role" class="block text-sm font-medium text-gray-700">Роли</label>
              <select id="role" name="role" autocomplete="role" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
                <option value="" default disabled selected>Выберите роль</option>

                <?php while ($roles = mysqli_fetch_assoc($result)): ?>

                <option value="<?= $roles['id'] ?>"><?= $roles['roles_name'] ?></option>

                <?php endwhile ?>

              </select>
            </div>

            <div class="col-span-6">
              <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
              <input type="password" name="password" id="password" autocomplete="email" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

            
          </div>
        </div>
        <div class="px-4 py-3 bg-gray-800 text-right sm:px-6">
          <button type="submit" name="create" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Создать</button>
        </div>
      </div>
    </form>
  </div>
</div>