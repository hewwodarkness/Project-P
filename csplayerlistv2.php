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

            <div class="space1">
                
            </div> 

            <div class="nickname_column gray">
                Main game
            </div>

            <div class="nickname_column">
                DPI
            </div>

            <div class="nickname_column gray">
                HZ
            </div>

            <div class="devices_column">
                Mouse
            </div>

            <div class="devices_column gray">
                Keyboard
            </div>

            <div class="devices_column">
                GPU
            </div>

            <div class="devices_column gray">
                CPU
            </div>

        </div>
        <?php foreach($row as $row): ?>
            <a href="csplayer?id=<?=$row['id']?>">
                <div class="csplayers" href="csplayer?id=<?=$row['id']?>">

                    <div class="id">
                        <div>
                            #<?=$row['id']?>
                        </div>
                    </div>

                    <div class="country">
                        <img class="pfp" src="https://www.freeiconspng.com/thumbs/germany-flag/icons-of-germany-flag-fatherland-icon-png-3.png" alt="">
                    </div>

                    <div class="pfp1">
                        <img class="pfp" src="uploads/<?=$row['img']?>" alt="">
                    </div>

                    <div class="nickname">
                        <div>
                            <?=$row['name']?>
                        </div>
                    </div>

                    <div class="maingame gray">
                        Overwatch
                    </div>
                    
                    <div class="dpi">
                        <?=$row['dpi']?>
                    </div>

                    <div class="hz gray">
                        <?=$row['hz']?>
                    </div>

                    <div class="devices">
                        Logitech G305
                    </div>
                    
                    <div class="devices gray">
                        Corsair K70
                    </div>

                    <div class="devices">
                        NVIDIA GTX 1060   
                    </div>

                    <div class="devices gray">
                        Intel Core i7 6700 
                    </div>

                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>