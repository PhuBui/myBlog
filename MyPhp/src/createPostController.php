<?php
include 'src/services/databaseServices.php';
$database = new Database();
$sql = "INSERT INTO test_posts (title, content) VALUES ('" . $_POST['title'] . "', '" . $_POST['content'] . "')";
$database->insert($sql);

?>