<?php
    include 'services/DatabaseServices.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = new Database();
    $sql = "SELECT `first_name`, `last_name`, `password`, `email` FROM users WHERE password = '" . $password . "' AND email = '".$email."'";
    $result = $db->query($sql);
    $_SESSION["login_info"] = $result[0];
    
    $message = '';
    if (count($result) == 1) {
        $message = "Login success! Welcome back " . $result[0]['first_name'] . " " . $result[0]['last_name'];
    } else {
        $message = "Invalid email or password";
    }
?>

<div class="container">
    <div class="alert alert-success" role="alert">
        <?php echo $message ?>
    </div>
    <a href="/">Back to home</a>
</div>