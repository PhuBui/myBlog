<?php
include 'services/DatabaseServices.php';

$database = new Database();
$sql = "SELECT id, title, content FROM posts";
$data = $database->query($sql);

?>

<div class="container">
    <h1>Home</h1>
    <div>
        <ul class="list-group">
            <?php
                foreach ($data as $key => $post) {
                    echo '<li class="list-group-item">'. $post['title'] . "</li>";
                }
            ?>
        </ul>
    </div>
</div>