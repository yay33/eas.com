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
                                    <a href="logout.php">Выход</a>
                                <?php endif; ?>
                            </div>
                          </div>
                    </li>
                </ul>
            </nav>
        </header>
    <section>
        
    <section class = "main_wrap">
        <div class="container-xxl my-md-4 bd-layout">
            <aside class="bd-sidebar">
              <ul>
                <li><a href="https://discord.gg/4WQrFKPNPJ" target="_blank" rel="noopener">Наш дискорд</a></li>
                <li><a href="https://vk.com/saas321" target="_blank" rel="noopener">Мой ВК</a></li>
                <li><a href="https://github.com/yay33" target="_blank" rel="noopener">Мой гитхаб</a></li>
              </ul>
            </aside>
        
            <main class="bd-main order-1">
              <div class="bd-intro ps-lg-4">
                <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
                  <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/yay33/eas.com" title="View and edit this file on GitHub" target="_blank" rel="noopener">Проект на гитхабе</a>
                  <h1 class="bd-title" id="content">Обо мне</h1>
                </div>
                <p class="bd-lead">Послушайте занимательную историю, как я сел за этот проект и как я почти реализовал ВКР за 4 дня</p>

              </div>        
              <div class="bd-content ps-lg-4">
                <h2 id="team">Команда<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#team" style="padding-left: 0.375em;"></a></h2>
                <p>Да я на самом деле был один. Мы совместно работали и изучали языки для фронд- и бэкэнда совместно с Майоровым Никитой, а так тут всё написано полностью мной.</p>
                <h2 id="history">История<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#history" style="padding-left: 0.375em;"></a></h2>
                <p>Ну кароче родился я 23 сентября 2001 года, рос взрослел, посещал садик и школу №3 города Осы. Кстати, не моего родного города.</p>
                <p>А так, более-менее человеком я стал уже во время студенчества, начал изучать языки программирования, совершенствовался как специалист. Стал углубляться в различные сферы ИТ.</p>
                <p>Я старался все свои проекты и наработки заливать на <a href="https://github.com/yay33">гитхаб</a>. Можете заходить туда иногда :)</p>
                <p>Ещё я договорился на практику с классной компанией, думаю будет круто в следующем триместре!</p>
                <p>Весь дизайн разработан мной, все картинки и .svg переработаны также мной. Все права защищены.</p>
                <p>Ещё у меня слетело часть стилей, как только я начал работать с php.</p>
              </div>
            </main>
          </div>
    </section>

    <footer class="fixed-footer">
        <h5>
            @yay33. Все права защищены.
        </h5>
    </footer>
    
</body>
</html>