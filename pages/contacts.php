<?php
  $title = "Contacts Page";

  require_once "./include/config.php";
  require_once "./include/function.php";

  if(isset($_POST['send'])){

    $name = clear_field($_POST['name']);
    $email = clear_field($_POST['email']);
    $name_firm = clear_field($_POST['name-firm']);
    $city = clear_field($_POST['city']);
    $message = clear_field($_POST['message']);


  }


?>

<div class="max-w-6xl m-auto mt-10">
  <div class="mt-20 bg-white rounded-2xl border border-slate-200 py-12 lg:px-28 px-8">
    <p class="md:text-3xl text-xl font-bold leading-7 text-center text-gray-700">Обратная связь</p>
    <p class="mt-5 text-center">Старница обратной связи. Заполнив форму ниже, вы сможете обратиться к администрации проекта. Задать вопрос. Либо, предложить свою идею по улучшению проекта.
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="md:flex items-center mt-12">
      <div class="md:w-2/4 flex flex-col">
        <label class="text-base font-semibold leading-none text-gray-800">Имя</label>
        <input tabindex="0" arial-label="Please input name" name="name" type="text" class="rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100" placeholder="Please input  name">
      </div>
      <div class="md:w-2/4 flex flex-col md:ml-6 md:mt-0 mt-4">
        <label class="text-base font-semibold leading-none text-gray-800">Email Адресс</label>
        <input tabindex="0" arial-label="Please input email address" name="email" type="text" class="rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100" placeholder="Please input email address">
      </div>
    </div>
    
    <div>
      <div class="w-full flex flex-col mt-8">
        <label class="text-base font-semibold leading-none text-gray-800">Содержание</label>
        <textarea tabindex="0" aria-label="leave a message" role="textbox" name="message" type="text" class="rounded-xl py-4 outline-none transition duration-500 h-36 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100 resize-none"></textarea>
      </div>
    </div>
    <p class="text-xs leading-3 text-gray-600 mt-4">Нажимая «Отправить», вы соглашаетесь с нашими условиями обслуживания, политикой конфиденциальности и тем, как мы используем данные, как указано.</p>
    <div class="flex items-center justify-center w-full">
      <button type="submit" name="send" class="mt-9 text-base leading-none text-white py-4 px-10 bg-indigo-500 rounded-xl hover:bg-indigo-400 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none transition duration-500">Отправить</button>
    </div>
    </form>
  </div>


</div>