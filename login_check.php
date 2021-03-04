<?php

include_once "database.php";

$email = $_POST['email'];
$email = $_POST['pass'];

if(!empty($email) && !empty($pass)){

    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);

    if($stmt->rowCount() == 1) {
        $user = $stmt->fetch(); // $user['first_name'], $user['last_name'], $user['id'], $user['pass']...

        if (password_verify($pass,$user['pass'])) {

            header("location: index.php");
            die();
        }
    }
}
header("location: login.php");
die();
?>