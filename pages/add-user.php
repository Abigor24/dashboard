<?php

  require_once "./include/config.php";



?>





<div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-blue-400 pl-2 mb-10 text-2xl font-bold">Добавление пользователя</div>


  <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST">
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
                <option value="1">Администратор</option>
                <option value="2">Модератор</option>
                <option value="3">Пользователь</option>
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