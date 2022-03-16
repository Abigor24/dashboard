<?php
require_once "./include/config.php";
require_once "./include/function.php";

if (!isset($_SESSION['is_auth'])) {
  redirect_to('/?page=404');
}



?>


<div class="max-w-6xl m-auto mt-10">
  <div class="border-l-2 border-l-indigo-500 pl-2 mb-10 text-2xl font-bold">Добавить новость</div>
  <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="multipart/form-data">
      <div class="overflow-hidden sm:rounded-2xl border border-slate-200">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">

            <div class="col-span-6 sm:col-span-3">
              <label for="title" class="block text-sm font-medium text-gray-700">Заголовок</label>
              <input type="text" name="title" id="title" autocomplete="given-title" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="intro" class="block text-sm font-medium text-gray-700">Краткое описание</label>
              <input type="text" name="intro" id="intro" autocomplete="family-name" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

            <div class="col-span-6 sm:col-span-6">
              <label for="quotes" class="block text-sm font-medium text-gray-700">Цитата дня</label>
              <input type="text" name="quotes" id="quotes" autocomplete="family-name" class="mt-1 block w-full sm:text-sm border border-slate-200 py-3 px-3 rounded-xl outline-none focus:border-indigo-500 transition-all duration-500">
            </div>

            <div class="col-span-6 mb-5">
              <label class="block text-sm font-medium text-gray-700"> Баннер </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600 justify-center">
                    <label for="image_url" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Загрузить файл</span>
                      <input id="image_url" name="image_url" type="file" class="sr-only">
                    </label>
                  </div>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-8">
            <label class="text-xl text-gray-600">Полное описание</label></br>
            <textarea name="text" class="border-gray-500 focus:border-indigo-500 transition-all duration-500 outline-none px-3 py-3 border border-slate-200/80 block w-full sm:text-sm rounded-xl">
              </textarea>
          </div>
        </div>
      </div>
  </div>

  <div class="px-4 py-3 bg-gray-800 text-right sm:px-6">
    <button type="submit" name="add-post" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Создать</button>
  </div>

</div>
</form>
</div>
</div>




<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('text');
</script>