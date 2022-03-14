<?php

    session_start();
    ob_start();

?>

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
            #pages
            case 'about':
                include "./layout/nav.php";
                include "./pages/about.php";
                break;
            case 'contacts':
                include "./layout/nav.php";
                include "./pages/contacts.php";
                break;

            #posts|pages
            case 'blog':
                include "./layout/nav.php";
                include "./pages/blog.php";
                break;
            case 'post':
                include "./layout/nav.php";
                include "./pages/post.php";
                break;

            #admin menu
            case 'add-user':
                include "./layout/nav.php";
                include "./pages/add-user.php";
                break;
            case 'add-posts':
                include "./layout/nav.php";
                include "./pages/add-posts.php";
                break;
            case 'auth':
                include "./layout/nav.php";
                include "./pages/auth.php";
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


     <?php ob_flush(); ?>
    <?php include "./layout/footer.php"; ?>
</div>