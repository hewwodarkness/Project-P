<php
echo "<!DOCTYPE html>
<link rel="stylesheet" href="css/csplayerlist.css">
<link rel="stylesheet" href="css/csplayer.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<?php
    include("menu.php");
    include("db_conn1.php");
    $sql_select = "SELECT * FROM main";
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="smallinfo">
    <div class="p50perc1">
        <img src="img/3.svg" height="10px" vspace="5" hspace="5">
            <a href="csplayerlist.php">Player list</a>
    </div>
</div>

<div class="intro">
    <div class="csfeatures">
        <?php foreach($row as $row): ?>
            <div class="csplayers">
                <img class="csplayersimg" src="uploads/<?=$row['img']?>" alt="">
                <a href="csplayer.php?id=<?=$row['id']?>"><h1 class="csplayerlisttitle"><?=$row['name']?></h1></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>