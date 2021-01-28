<php
echo "<!DOCTYPE html>
<link rel="stylesheet" href="css/owplayer.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php 
    include("db_conn1.php");
    include("menu.php");
    $id = $_GET['id'];
    $sql_select = "SELECT * FROM main WHERE id =".$id;
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>


    