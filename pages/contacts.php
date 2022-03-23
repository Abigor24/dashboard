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
    <p class="md:text-3xl text-xl font-bold leading-7 text-center text-gray-700">Давайте поговорим и получить цитату!</p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="md:flex items-center mt-12">
      <div class="md:w-2/4 flex flex-col">
        <label class="text-base font-semibold leading-none text-gray-800">Имя</label>
        <input tabindex="0" arial-label="Please input name" name="name" type="text" class="rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100" placeholder="Please input  name">
      </div>
      <div class="md:w-2/4 flex flex-col md:ml-6 md:mt-0 mt-4">
        <label class="text-base font-semibold leading-none text-gray-800">Email Алресс</label>
        <input tabindex="0" arial-label="Please input email address" name="email" type="text" class="rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100" placeholder="Please input email address">
      </div>
    </div>
    <div class="md:flex items-center mt-8">
      <div class="md:w-2/4 flex flex-col">
        <label class="text-base font-semibold leading-none text-gray-800">Название фирмы</label>
        <input tabindex="0" role="input" arial-label="Please input company name" name="name-firm" type="name" class="rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100" placeholder="Please input company name">
      </div>
      <div class="md:w-2/4 flex flex-col md:ml-6 md:mt-0 mt-4">
        <label class="text-base font-semibold leading-none text-gray-800">Город</label>
        <input tabindex="0" arial-label="Please input country name" type="text" name="city" class="rounded-xl py-4 outline-none transition duration-500 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100" placeholder="Please input country name">
      </div>
    </div>
    <div>
      <div class="w-full flex flex-col mt-8">
        <label class="text-base font-semibold leading-none text-gray-800">Сообщение</label>
        <textarea tabindex="0" aria-label="leave a message" role="textbox" name="message" type="text" class="rounded-xl py-4 outline-none transition duration-500 h-36 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border border-gray-200 placeholder-gray-100 resize-none"></textarea>
      </div>
    </div>
    <p class="text-xs leading-3 text-gray-600 mt-4">Нажимая «Отправить», вы соглашаетесь с нашими условиями обслуживания, политикой конфиденциальности и тем, как мы используем данные, как указано.</p>
    <div class="flex items-center justify-center w-full">
      <button type="submit" name="send" class="mt-9 text-base leading-none text-white py-4 px-10 bg-indigo-500 rounded-xl hover:bg-indigo-400 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none transition duration-500">Отправить</button>
    </div>
    </form>
  </div>




  <h1 class="mt-24 xl:text-5xl md:text-4xl text-2xl font-semibold leading-tight text-center text-gray-800 sm:mb-0 mb-12">
    Более 10 лет мы предоставляем услуги <br class="md:block hidden" />
    в реальной государственной промышленности
  </h1>
  <div class="md:mt-14 mt-4 relative sm:flex items-center justify-center">
    <img src="https://i.ibb.co/KjrPCyW/map.png" alt="world map image" class="w-full xl:h-full h-96 object-cover sm:block hidden" />
    <img src="https://i.ibb.co/SXKj9Mf/map-bg.png" alt="mobile-image" class="sm:hidden -mt-10 block w-full h-96 object-cover absolute z-0" />

    <div class="shadow-lg xl:p-6 p-4 sm:w-auto w-full bg-white sm:absolute relative z-20 sm:mt-0 mt-4 left-0 xl:ml-56 sm:ml-12 xl:-mt-40 sm:-mt-12">
      <p class="text-3xl font-semibold text-gray-800">20K+</p>
      <p class="text-base leading-4 xl:mt-4 mt-2 text-gray-600">Недавно выставленная недвижимость</p>
    </div>
    <div class="shadow-lg xl:p-6 p-4 w-48 sm:w-auto w-full bg-white sm:absolute relative z-20 sm:mt-0 mt-4 xl:mt-80 sm:mt-56 xl:-ml-0 sm:-ml-12">
      <p class="text-3xl font-semibold text-gray-800">8K+</p>
      <p class="text-base leading-4 xl:mt-4 mt-2 text-gray-600">Активное слушание</p>
    </div>
    <div class="shadow-lg xl:p-6 p-4 sm:w-auto w-full bg-white sm:absolute relative z-20 md:mt-0 sm:-mt-5 mt-4 right-0 xl:mr-56 sm:mr-24">
      <p class="text-3xl font-semibold text-gray-800">15K+</p>
      <p class="text-base leading-4 xl:mt-4 mt-2 text-gray-600">Недавно проданные земли</p>
    </div>
  </div>

</div>