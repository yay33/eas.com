<?php
    require('databaseconnect.php');
    if(isset($_POST["change"])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $something_new = $_POST['something_new'];
        $sql = "UPDATE `aktiv(main)` SET `name`='$name',`price`='$price',`author`='123', 
        `something_new`= '$something_new' WHERE id = '".$_POST["id1"]."'";
        
        if (mysqli_query($db, $sql)) {
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($db);
        }
        header('Location: '.'index.php');
    } 
?>  