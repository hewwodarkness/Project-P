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
                <div>
                    <img class="csplayersimg" src="uploads/<?=$row['img']?>" alt="">
                    <a href="csplayer.php?id=<?=$row['id']?>">
                        <h1 class="csplayerlisttitle">
                            <?=$row['name']?>
                        </h1>
                    </a>
                </div>
                <div>
                    <img class="csplayersimg1" src="https://www.flaticon.com/svg/static/icons/svg/847/847470.svg" alt="">
                    <a href="csplayer.php?id=<?=$row['id']?>">
                        <h1 class="csplayerlisttitle">
                            DPI
                        </h1>
                    </a>
                    <a href="csplayer.php?id=<?=$row['id']?>">
                        <h1 class="csplayerlisttitle">
                            <?=$row['dpi']?>
                        </h1>
                    </a>
                </div>
                <div>
                    <img class="csplayersimg1" src="https://www.flaticon.com/svg/static/icons/svg/3231/3231203.svg" alt="">
                    <a href="csplayer.php?id=<?=$row['id']?>">
                        <h1 class="csplayerlisttitle">
                            Sensitivity
                        </h1>
                    </a>
                    <a href="csplayer.php?id=<?=$row['id']?>">
                        <h1 class="csplayerlisttitle">
                            <?=$row['sensitivity']?>
                        </h1>
                    </a>
                </div>
                <div>
                    <img class="csplayersimg1" src="https://www.flaticon.com/svg/static/icons/svg/953/953842.svg" alt="">
                    <a href="csplayer.php?id=<?=$row['id']?>">
                        <h1 class="csplayerlisttitle">
                            HZ
                        </h1>
                    </a>
                    <a href="csplayer.php?id=<?=$row['id']?>">
                        <h1 class="csplayerlisttitle">
                            <?=$row['hz']?>
                        </h1>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>