<?php
require('databaseconnect.php');
$a = $_COOKIE['login'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
</head>
<body onload="clockTimer();">
    <section class="header_wrap">
        <header class="header">
            <a href="index.php">
                <img src="img/logo.svg" class="logo">              
            </a>
            <nav>
                <ul class="menu1">
                   <li><a href="index.php">
                        Учёт активов
                   </a></li>
                    <li><a href="news.php">
                        Новости
                    </a></li>
                    <li><a href="about.php">
                        О нас
                    </a></li> 
                </ul>
            </nav>
            <nav>
                <ul class="menu2">
                <?php if ($a!=null):?>
                    <li><a type="button" data-bs-toggle="modal" data-bs-target="#settings"> 
                        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/hwuyodym.json"
                            trigger="hover"
                            colors="primary:#f8fafc"
                            style="width:65px;height:65px">
                        </lord-icon>
                    </a></li>
                    <li>
                        <div class="dropdown1">
                            <button class="dropbtn1">
                                <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                                <lord-icon
                                    src="/img/46-notification-bell-outline-edited.json"
                                    trigger="hover"
                                    colors="primary:#f8fafc"
                                    style="width:65px;height:65px">
                                </lord-icon>
                            </button>
                            <div class="dropdown-content1">
                              <a href="#">мяу</a>
                            </div>
                          </div>
                    </li>
                    <?php endif; ?>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn"> 
                                <img src="img/profile.svg"> 
                                <div class="text_profile"><?php echo($a)?></div>
                            </button>
                            <div class="dropdown-content">
                                
                                
                                <?php 
                                if ($a==null):?>
                                    <a href="reg.php">Вход</a>
                                <?php endif; ?>
                                <?php if ($a!=null):?>
                                    <a href="#">Выход
                                        <?php
                                            $_COOKIE['login']=null;
                                        ?>
                                    </a>

                                <?php endif; ?>
                            </div>
                          </div>
                    </li>
                </ul>
            </nav>
        </header>
    <section>

    <section class = "main_wrap">
       
        <p>
            123
        </p>   
        <p>
            123
        </p> 
    </section>

    <footer class="fixed-footer">
        <h5>
            vsem privet
        </h5>
    </footer>
</body>
</html>