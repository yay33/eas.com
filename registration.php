<?php
    session_start();
    require('databaseconnect.php');
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email=:$email";
        $result = mysqli_query($db, $query);
        if ($result > 0) {
            echo '<p class="error">Этот изображение уже занято!</p>';
        }
        if ($result == 0) {
            $query = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')";
            $result = mysqli_query($db, $query);
            if ($result) {
                echo '<p class="success">Регистрация прошла успешно!</p>';
            } else {
                echo '<p class="error">Неверные данные!</p>';
            }
        }
    }
?>