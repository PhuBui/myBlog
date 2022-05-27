<?php
session_start();

function debug($param)
{
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
    <?php include 'layout/header.php'; ?>

    <?php
        // Get request info
        $method = $_SERVER['REQUEST_METHOD'];
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        } else {
            $path = '/home';
        }

        // Include pages
        if ($path == '/home' || $path == '/') {
            include 'pages/home.php';

        } elseif ($path == '/post/create' && $method == 'GET') {
            include 'pages/post/create_form.php';

        } elseif ($path == '/post/create' && $method == 'POST') {
            include 'pages/post/create.php';

        } elseif ($path == '/about' && $method == 'GET') {
            include 'pages/about.php';

        } elseif ($path == '/login' && $method == 'GET') {
            include 'pages/login/login_form.php';

        } elseif ($path == '/login' && $method == 'POST') {
            include 'pages/login/login.php';

        } elseif ($path == '/logout' && $method == 'GET') {
            include 'pages/login/logout.php';

        } else {
            include 'pages/404.php';

        }
    ?>

    <?php include 'layout/footer.php'; ?>

    <script src="/assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>

</html>