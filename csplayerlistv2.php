<php
echo "<!DOCTYPE html>
<link rel="stylesheet" href="css/csplayerlistv2.css">
<link rel="stylesheet" href="css/main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<?php
    include("menu.php");
    include("db_conn1.php");
    $sql_select = "SELECT * FROM main";
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="intro">
    <div class="csfeatures">
        <?php foreach($row as $row): ?>
            <div class="csplayers" href="csplayer.php?id=<?=$row['id']?>">
                dqwdq
            </div>
        <?php endforeach; ?>
    </div>
</div>