<h1>Home</h1>
<div>
    <ul>
        <?php 
            //  echo "<li>". $data[1]['title']."</li>";
            foreach($data as $key => $post){
                echo "<li>" . $key . " - ". $post['title']."</li>";
            }
        ?>
    </ul>
</div>
