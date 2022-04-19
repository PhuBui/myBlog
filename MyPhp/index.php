<?php
function debug($param)
{
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
}

// debug($_SERVER);
$path;
if (isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
} else {
    $path = '/home';
}

$pageName = '';
if ($path == '/home' || $path == '/') {
    $pageName = 'home';
    include 'src/homeController.php';

} elseif ($path == '/post/create') {
    $pageName = 'post.create';

} elseif ($path == '/post/create/save') {
    include 'src/createPostController.php';
    $pageName = 'post/create.success';

} elseif ($path == '/about') {
    $pageName = 'about';

} else {
    $pageName = '404';
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php'; ?>

<body>
    <?php include 'layout/header.php'; ?>

    <?php
        include 'pages/' . $pageName . '.php';
    ?>

    <?php include 'layout/footer.php'; ?>
</body>

</html>