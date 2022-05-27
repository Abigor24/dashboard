<?php

  require_once "./include/config.php";
  require_once "./include/function.php";

  if (!isset($_SESSION['is_auth'])) {
    redirect_to('/?page=404');
  }


  // $user_query = "SELECT * FROM users AS users INNER JOIN roles AS roles ON users.id = roles.id";
  $user_query = "SELECT * FROM `users`";
  $result = mysqli_query($connect, $user_query);


?>

<div class="max-w-6xl m-auto mt-10">
  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden border border-slate-200 sm:rounded-xl">
          <table class="min-w-full">
            <thead class="bg-gray-900 text-white">
              <tr>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left uppercase dark:text-gray-400">
                  Фио
                </th>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left uppercase dark:text-gray-400">
                  Почта
                </th>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left uppercase dark:text-gray-400">
                  Роль
                </th>
                <!-- <th scope="col" class="relative py-3 px-6">
                  <span class="sr-only">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                  </span>
                </th> -->
              </tr>
            </thead>
            <tbody>

            <?php while ($users = mysqli_fetch_assoc($result)): ?>

              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  <?= $users['username'] ?>
                </td>
                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                  <?= $users['email'] ?>
                </td>
                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                  <?= $users['id_roles'] ?>
                </td>
                <!-- <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                  <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                  </a>
                </td> -->
              </tr>
              <?php endwhile ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>