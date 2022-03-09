<div class="wrapper">
    <?php

        $request_url = rtrim(ltrim(urldecode(parse_url($_SERVER['REQUEST_URI'],5)), '/'), '/');
        $params = array_filter(explode("/", $request_url));
        if (count($params) == 2) {
            $dynamic_routes = [
                'offers' =>  'pages/offer.php',
            ];
            if (isset($dynamic_routes[$params[0]])) {
                $get = $params[1];
                require_once $dynamic_routes[$params[0]];
            }
            else require_once ('pages/404.php');
        }
        elseif (count($params) < 2) {
            $routes = [
                '' => 'pages/main.php',
                'about' => 'pages/about.php',
                'blog' => 'pages/blog.php',
                'contacts' => 'pages/contacts.php',
            ];
            if (isset($routes[$request_url])) require_once $routes[$request_url];
            else require_once ('pages/404.php');
        }
        else require_once ('pages/404.php');
    ?>
</div>