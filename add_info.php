<?php
    require('databaseconnect.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $something_new = $_POST['something_new'];
        $sql = "INSERT INTO `aktiv(main)`(`name`, `price`,  `author`, `something_new`) 
        VALUES ('$name','$price','','$something_new')";
        if (mysqli_query($db, $sql)) {
            echo "New record has been added successfully !";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($db);
        }
        header('Location: '.'index.php');
    } 
?>  