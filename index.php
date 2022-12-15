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

    <div class="func">
        <aside class="ass">
            <div>
                <div class="clockpage">
                <span id="clock"></span>
                <span id="dayOfWeek"></span>
                </div>
            </div>
        </aside>

        <div class="div-search">
            <form method="get">
                <div class="search">
                    <input class="input-search" name="search" placeholder="search" type="search">
                    <button class="button-search" name="getinfo" id="submit" type="submit">
                        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/xfftupfv.json"
                            trigger="click"
                            style="width:45px;height:45px">
                        </lord-icon>
                    </button>
                </div>
            </form>
        </div>  
            
        <div class="managment_all">
            <ul class="managment">
                <li><a type="button" data-bs-toggle="modal" data-bs-target="#addModal">
                    <img src="img/add.svg"> 
                </a></li>
                <li><a type="button" data-bs-toggle="modal" data-bs-target="#changeModal"> 
                    <img src="img/edit.svg">
                </a></li>
                <li><a onClick="window.location.reload();">
                    <img src="img/history.svg">
                </a>
                </li>
                <li><a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal"> 
                    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/kfzfxczd.json"
                        trigger="hover"
                        style="width:40px;height:40px">
                    </lord-icon>
                </a></li>
                <li><a href="#">
                    <img src="img/small_settings.svg">
                </a></li>
            </ul>
        </div>
    </div>
    <!--modals-->
    <div>
        <!--add-->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавление актива</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="guruweba_example_form" name="feedback" method="post" action="add_info.php">
                    <div class="modal-body">
                            <div>Название</div>
                            <input type="text" name="name">
                            <div>Ценность</div>
                            <input type="number" name="price">
                            <div>Примечание</div>
                            <textarea name="something_new"></textarea>
                            <div class="guruweba_example_infofield">Категория</div>
                            <select name="theme">
                              <option value="">Выберите вариант</option>
                              <option>Автомобиль</option>
                              <option>Денежные средства</option>
                              <option>Сотрудничество</option>
                            </select>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button name="button" type="submit" class="btn btn-primary" value="Сохранить">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!--edit-->
        <div class="modal fade" id="changeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Изменение актива</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                        <form class="guruweba_example_form" name="feedback" method="POST" action="">
                            <div>Название</div>
                            <input type="text" name="name" required="required">
                            <div>Ценность</div>
                            <input type="number" name="price" required="required">
                            <div>Примечание</div>
                            <textarea name="message"></textarea>
                            <div class="guruweba_example_infofield">Категория</div>
                            <select name="theme" required="required">
                            <option value="">Выберите вариант</option>
                            <option>Автомобиль</option>
                            <option>Денежные средства</option>
                            <option>Сотрудничество</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary">Сохранить</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <!--delete-->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Удаление актива</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Вы точно хотите удалить "название"
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
        <!--settings-->
        <div class="modal fade" id="settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Настройки</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class = "main_wrap">
        <?php
        $sort_list = array(
            'id_asc'  => '`id`',
            'id_desc' => '`id` DESC',
            'name_asc'   => '`name`',
            'name_desc'  => '`name` DESC',
            'price_asc'  => '`price`',
            'price_desc' => '`price` DESC',  
            'date_of_asc'   => '`date_of`',
            'date_of_desc'  => '`date_of` DESC',
            'author_asc'   => '`author`',
            'author_desc'  => '`author` DESC',
            'something_new_asc'   => '`something_new`',
            'something_new_desc'  => '`something_new` DESC',
        );

        $sort = @$_GET['sort'];
            if (array_key_exists($sort, $sort_list)) {
                $sort_sql = $sort_list[$sort];
            } else {
                $sort_sql = reset($sort_list);
        }

        function sort_link_th($title, $a, $b) {
            $sort = @$_GET['sort'];
         
            if ($sort == $a) {
                return '<a class="active" href="?sort=' . $b . '">' . $title . ' <i>▲</i></a>';
            } elseif ($sort == $b) {
                return '<a class="active" href="?sort=' . $a . '">' . $title . ' <i>▼</i></a>';  
            } else {
                return '<a href="?sort=' . $a . '">' . $title . '</a>';  
            }
        }

        $zapros = "SELECT * FROM `aktiv(main)` ORDER BY {$sort_sql}";
        $list = mysqli_query($db, $zapros)
        ?>
        <div class="scroll-table">
            <table cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th class="active">
                            <input type="checkbox" class="select-all checkbox" name="select-all" />
                        </th>          
                        <th><?php echo sort_link_th('id', 'id_asc', 'id_desc'); ?></th>
                        <th><?php echo sort_link_th('Название', 'name_asc', 'name_desc'); ?></th>
                        <th><?php echo sort_link_th('Ценность', 'price_asc', 'name_desc'); ?></th>
                        <th><?php echo sort_link_th('Дата', 'date_of_asc', 'date_of_desc'); ?></th>
                        <th><?php echo sort_link_th('Автор', 'author_asc', 'author_desc'); ?></th>
                        <th><?php echo sort_link_th('Примечание', 'something_new_asc', 'something_new_desc'); ?></th>
                    </tr>
                </thead>
            </table>	
            <div class="scroll-table-body">
                <table class="table" cellspacing="0" width="100%">
                    <tbody>
                        <?php foreach ($list as $row): ?>
                        <tr>
                            <td class="active">
                                <input type="checkbox" class="select-item checkbox" name="select-item[]" value="selected1[]"/>
                            </td>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['price'];?></td>
                            <td><?php echo $row['date_of'];?></td>
                            <td><?php echo $row['author'];?></td>
                            <td><?php echo $row['something_new'];?></td>
                        </tr>
                        <?php endforeach; ?>  
                    </tbody>
                </table>
            </div>
        </div>
                
    </section>

    <footer class="fixed-footer">
        <h5>
            vsem privet
        </h5>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            //button select all or cancel
            $("#select-all").click(function () {
                var all = $("input.select-all")[0];
                all.checked = !all.checked
                var checked = all.checked;
                $("input.select-item").each(function (index,item) {
                    item.checked = checked;
                });
            });
            //column checkbox select all or cancel
            $("input.select-all").click(function () {
                var checked = this.checked;
                $("input.select-item").each(function (index,item) {
                    item.checked = checked;
                });
            });
            //check selected items
            $("input.select-item").click(function () {
                var checked = this.checked;
                var all = $("input.select-all")[0];
                var total = $("input.select-item").length;
                var len = $("input.select-item:checked:checked").length;
                all.checked = len===total;
            });
            
        });  
    </script>
    <script>
        function clockTimer()
            {
            var date = new Date();
            
            var time = [date.getHours(),date.getMinutes(),date.getSeconds()]; // |[0] = Hours| |[1] = Minutes| |[2] = Seconds|
            var dayOfWeek = ["Вс","Пн","Вт","Ср","Чт","Пт","Сб"]
            var days = date.getDay();
            
            if(time[0] < 10){time[0] = "0"+ time[0];}
            if(time[1] < 10){time[1] = "0"+ time[1];}
            if(time[2] < 10){time[2] = "0"+ time[2];}
            
            var current_time = [time[0],time[1],time[2]].join(':');
            var clock = document.getElementById("clock");
            var day = document.getElementById("dayOfWeek");
            
            clock.innerHTML = current_time;
            day.innerHTML = dayOfWeek[days];
            setTimeout("clockTimer()", 1000);
            }
    </script>
</body>
</html>