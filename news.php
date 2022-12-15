<?php
require('databaseconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAS</title>
    <link rel="stylesheet" href="news.css">
</head>
<body>
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
                              <a href="#">У вас рак</a>
                            </div>
                          </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn"> 
                                <img src="img/profile.svg"> 
                                <div class="text_profile"> max max max</div>
                            </button>
                            <div class="dropdown-content">
                              <a href="#">Выход</a>
                            </div>
                          </div>
                    </li>
                </ul>
            </nav>
        </header>
    <section>

    <div class="div-search">
        <form method="get">
            <div class="search">
                <input class="input-search" name="search" placeholder="search" type="search">
                <button class="button-search" name="getinfo" id="submit" type="submit">
                    <img src="img/Group 63.svg">
                </button>
            </div>
        </form>
    </div>  

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