<?php

  function add_users_db($tables, $cols, $value){

    global $connect;

    $query = "INSERT INTO `$tables` $cols VALUES $value";
    $result = mysqli_query($connect, $query);

    if(!$result){
      die("Ошибка");
    } else {
      echo "Пользователь успешно зарегестрирован!";
    }

    return $result;
  }

  function redirect_to($local){
    header("Location: $local");
  }

  function clear_field($field){
    return trim(htmlspecialchars($field));
  }

  function select_all_users($table){

    global $connect;

    $query = "SELECT * FROM `{$table}`";

    $result = mysqli_query($connect, $query);
    if (!$result) {
        die('Не получилось сделать запрос!');
    }

    return $result;


  }