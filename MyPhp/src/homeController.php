<?php
include 'src/services/databaseServices.php';
$database = new Database();
$sql = "SELECT id, title, content FROM test_posts";
$data = $database->query($sql);




$sql = "   INSERT INTO users(`firstname`, `lastname`, `password`) values('phu', 'bui', '12312')   ";


?>