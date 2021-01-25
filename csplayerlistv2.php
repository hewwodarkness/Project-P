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
        <div class="list">

            <div class="space">
                
            </div>    
        
            <div class="country_column">
                Country
            </div>

            <div class="space">
                
            </div>  

            <div class="space">
                
            </div> 

            <div class="nickname_column">
                Main game
            </div>

            <div class="nickname_column">
                DPI
            </div>

            <div class="nickname_column">
                HZ
            </div>
        </div>
        <?php foreach($row as $row): ?>
            <a href="csplayer.php?id=<?=$row['id']?>">
                <div class="csplayers" href="csplayer.php?id=<?=$row['id']?>">

                    <div class="id">
                        <div>
                            #<?=$row['id']?>
                        </div>
                    </div>

                    <div class="country">
                        <img class="pfp" src="https://www.flaticon.com/svg/vstatic/svg/940/940279.svg?token=exp=1611571322~hmac=767456eae30e34d83f3178c4b3b2be72" alt="">
                    </div>

                    <div class="pfp1">
                        <img class="pfp" src="uploads/<?=$row['img']?>" alt="">
                    </div>

                    <div class="nickname">
                        <div>
                            <?=$row['name']?>
                        </div>
                    </div>

                    <div class="maingame">
                        Overwatch
                    </div>
                    
                    <div class="dpi">
                        <?=$row['dpi']?>
                    </div>

                    <div class="hz">
                        <?=$row['hz']?>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>