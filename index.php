<?php

    $url = null;
    if (isset($_GET['page'])) {
        $url = urlencode($_GET['page']);
    }

?>

<div class="wrapper">
    <?php include "./layout/header.php"; ?>

    <?php
    if ($url) {
        switch ($url) {
            case 'about':
                include "./layout/nav.php";
                include "./pages/about.php";
                break;
            case 'blog':
                include "./layout/nav.php";
                include "./pages/blog.php";
                break;
            case 'contacts':
                include "./layout/nav.php";
                include "./pages/contacts.php";
                break;

            case 'post':
                include "./layout/nav.php";
                include "./pages/post.php";
                break;
            
            default:
                include "./pages/404.php";
                break;
        }

    } else {
        include "./layout/nav.php";
        include "./pages/main.php";
     }
    ?>

    <?php include "./layout/footer.php"; ?>
</div>