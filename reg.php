<?php
    session_start();
    require('databaseconnect.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `users` WHERE username='$username'";
        $result = mysqli_query($db, $query);
        $result = mysqli_fetch_array($result);
        if (!$result) {
            echo '<p class="error">Неверные пароль или имя пользователя!</p>';
        } else {
            if ($password == $result['password']) {
                $_SESSION['login'] = $username;
                setcookie('login', $username, time()+60*2);
                setcookie('admin', $result['admin'], time()+60*2);
                echo '<p class="success">Поздравляем, вы прошли авторизацию!</p>';
                sleep(2);
                header('Location: '.'index.php');
            } else {
                echo '<p class="error"> Неверные пароль или имя пользователя!</p>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=q, initial-scale=1.0">
        <link rel="stylesheet" href="reg.css"> 
        <title>
            Authorization
        </title>
    </head>
<body>
    <form method="post" action="registration.php" name="signup-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>img</label>
            <input type="text" name="email" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="register" value="register">Register</button>
    </form>
    <form method="post" action="" name="signin-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
    </form>
</body>
</html>
