<?php
include 'services/DatabaseServices.php';

$database = new Database();
$sql = "INSERT INTO posts (title, content) VALUES ('" . $_POST['title'] . "', '" . $_POST['content'] . "')";
$database->insert($sql);

?>

<div class="container">
    <div class="alert alert-success" role="alert">
        Create Succesful
    </div>
    <a href="/">Back to home</a>
</div>

