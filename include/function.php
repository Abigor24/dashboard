<?php

  function redirect_to($locate){
    return header("Location: $locate");
  }

  function clear_field($field){
    return trim(htmlspecialchars($field));
  }

  function create_user_in_db($tables, $cols, $values){

    global $connect;

    $request = "INSERT INTO `$tables` $cols VALUES $values";
    $result = mysqli_query($connect, $request);

    if (!$result) { ?>

      <div class="bg-red-100 p-5 w-full rounded max-w-6xl m-auto mt-10">
        <div class="flex space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-none fill-current text-red-500 h-4 w-4">
            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z"></path></svg>
          <div class="leading-tight flex flex-col space-y-2">
            <div class="text-sm font-medium text-red-700">Не получилось сделать запрос!</div>
          </div>
        </div>
      </div>

   <?php } else { ?>

      <div class="bg-green-100 p-5 w-full rounded max-w-6xl m-auto mt-10">
        <div class="flex justify-between">
          <div class="flex space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-none fill-current text-green-500 h-4 w-4">
              <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z"></path></svg>
            <div class="flex-1 leading-tight text-sm text-green-700 font-medium">Пользователь успешно добавлен</div>
          </div>
        </div>
      </div>

   <?php }

    return $result;
  }


  function select_all_users($table){

    global $connect;

    $query = "SELECT * FROM `{$table}`";

    $result = mysqli_query($connect, $query);

    if(!$result){ ?>

      <div class="bg-red-100 p-5 w-full rounded max-w-6xl m-auto mt-10">
        <div class="flex space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-none fill-current text-red-500 h-4 w-4">
            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z"></path></svg>
          <div class="leading-tight flex flex-col space-y-2">
            <div class="text-sm font-medium text-red-700">Не получилось сделать запрос!</div>
          </div>
        </div>
      </div>


   <?php } 

    return $result;

  }

  function select_all_admins($table, $role){
    global $connect;
    $query = "SELECT * FROM `{$table}` WHERE role = $role";

    $result = mysqli_query($connect, $query);

    if(!$result){ ?>

      <div class="bg-red-100 p-5 w-full rounded max-w-6xl m-auto mt-10">
        <div class="flex space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-none fill-current text-red-500 h-4 w-4">
            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z"></path></svg>
          <div class="leading-tight flex flex-col space-y-2">
            <div class="text-sm font-medium text-red-700">Не получилось сделать запрос!</div>
          </div>
        </div>
      </div>


   <?php } 

    return $result;
  }