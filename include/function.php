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

    if (!$result) {
      die('Не получилось сделать запрос!');
    } else {
      echo "Пользователь успешно зарегистрирован!";
    }

    return $result;
  }


  function select_all_users($table){

    global $connect;

    $query = "SELECT * FROM `{$table}`";

    $result = mysqli_query($connect, $query);

    if(!$result){
      die("Не удалось сделать запрос!");
    }

    return $result;

  }

  function select_all_admins($table, $role){
    global $connect;
    $query = "SELECT * FROM `{$table}` WHERE role = $role";

    $result = mysqli_query($connect, $query);

    if(!$result){
      die("Не удалось сделать запрос!");
    }

    return $result;

  }