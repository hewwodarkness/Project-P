<php
echo "<!DOCTYPE html>
<link rel="stylesheet" href="css/csplayer.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<?php 
    include("db_conn1.php");
    include("menu.php");
    $id = $_GET['id'];
    $sql_select = "SELECT * FROM main WHERE id =".$id;
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<div class="smallinfo">
    <div class="p50perc1">
        <img src="img/3.svg" height="10px" vspace="5" hspace="5">
            <a href="csplayerlist.php">Player list</a>
        <img src="img/3.svg" height="10px" vspace="5" hspace="5">
            <a href="csplayerlist.php">CS:GO Players</a>
        <img src="img/3.svg" height="10px" vspace="5" hspace="5">
            <a class="aaa"><?=$row['name']?></a>
    </div>

</div>

<div class="intro">
    <div class="features">
        <div class="features__item">
            <img class="features__icon" src="uploads/<?=$row['img']?>" alt="">
            <h1 class="features__title"><?=$row['name']?></h1>
            <?php if ($row['id'] == 1): ?>
                    <div class="features__text">Creator</div>
            <?php endif ?>
            <?php if ($row['id'] == 2): ?>
                <div class="features__text">Designer</div>
            <?php endif ?>
            <?php if ($row['id'] != 1 && $row['id'] != 2): ?>
                <div class="features__text">An average player</div>
            <?php endif ?>
            <div class="iconss">
                <i>
                    <a href="" target="_blank"><img class="two_icons" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111630.svg"></a>
                </i>
                <i>
                    <a href="" target="_blank"><img class="two_icons" src="https://www.flaticon.com/svg/static/icons/svg/733/733635.svg"></a>
                </i>
            </div>
        </div>
        <div class="features__item1">
            <div class="item50">
                <div class="p50perc">
                    <img class="settings_icon" src="img/3.svg" vspace="5" hspace="5">
                    <div class="texticon">
                        <p class="htitle">DPI</p>
                        <p class="htitle1"><?=$row['dpi']?></p>
                    </div>
                </div>
                <div class="p50perc">
                    <img class="settings_icon" src="img/3.svg" vspace="5" hspace="5">

                    <div class="texticon">
                        <p class="htitle">Mouse Accel</p>
                        <p class="htitle1"><?=$row['mouseaccel']?></p>
                    </div>
                </div>
            </div>
            <div class="item50gray">
                <div class="p50perc">
                    <img class="settings_icon" src="img/3.svg" vspace="5" hspace="5">
                    <div class="texticon">  
                        <p class="htitle">Sensitivity</p>
                        <p class="htitle1"><?=$row['sensitivity']?></p>
                    </div>
                </div>
                <div class="p50perc">
                    <img class="settings_icon" src="img/3.svg" vspace="5" hspace="5">
                    <div class="texticon">
                        <p class="htitle">Windows Sensitivity</p>
                        <p class="htitle1"><?=$row['windowssens']?></p>
                    </div>
                </div>
            </div>
            <div class="item50">
                <div class="p50perc">
                    <img class="settings_icon" src="img/3.svg" vspace="5" hspace="5">
                    <div class="texticon">
                        <p class="htitle">Zoom Sensitivity</p>
                        <p class="htitle1"><?=$row['zoom']?></p>
                    </div>
                </div>
                <div class="p50perc">
                    <img class="settings_icon" src="img/3.svg" vspace="5" hspace="5">
                    <div class="texticon">
                        <p class="htitle">Raw Input</p>
                        <p class="htitle1"><?=$row['rawinput']?></p>
                    </div>
                </div>
            </div>
            <div class="item50gray">
                <div class="p50perc">
                    <img class="settings_icon" src="img/3.svg" vspace="5" hspace="5">
                    <div class="texticon">
                        <p class="htitle">HZ</p>
                        <p class="htitle1"><?=$row['hz']?></p>
                    </div>
                </div>
                <div class="p50perc">
                    <img class="settings_icon" src="img/3.svg" vspace="5" hspace="5">
                    <div class="texticon">
                        <p class="htitle">eDPI</p>
                        <p class="htitle1"><?=$row['edpi']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alert -->

    <div class="alertt">
        <div class="alert alert-info" role="alert">
			<span class="alert-title">
                Crosshair
            </span>
			<span class="alert-description" id="testtext1">  
                <?=$row['crosshair']?>
            </span>
        </div>
        <div class="buttonalert">
            <button class="jsbtn" id="cp_btn1">
                <img src="https://www.flaticon.com/svg/static/icons/svg/748/748107.svg" height="50px">
                <br>
                <i class="fa fa-home"></i>Copy
            </button>

            <script lang="JavaScript">
                document.getElementById("cp_btn1").addEventListener("click", copy_password);

                function copy_password() {
                    var copyText = document.getElementById("testtext1");
                    var textArea = document.createElement("textarea");
                    textArea.value = copyText.textContent;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand("Copy");
                    textArea.remove();
                }
            </script>

            <script>
                var blockHeight = $("alertt").height();
                $("jsbtn").css('height',blockHeight);
            </script>

        </div>
    </div>
    
    <div class="alertt">
        <div class="alert alert-info" role="alert">
			<span class="alert-title">
                Viewmodel
            </span>
			<span class="alert-description" id="testtext1">  
                <?=$row['viewmodel']?>
            </span>
        </div>
        <div class="buttonalert">
            <button class="jsbtn" id="cp_btn1">
                <img src="https://www.flaticon.com/svg/static/icons/svg/748/748107.svg" height="50px">
                <br>
                <i class="fa fa-home"></i>Copy
            </button>

            <script lang="JavaScript">
                document.getElementById("cp_btn1").addEventListener("click", copy_password);

                function copy_password() {
                    var copyText = document.getElementById("testtext1");
                    var textArea = document.createElement("textarea");
                    textArea.value = copyText.textContent;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand("Copy");
                    textArea.remove();
                }
            </script>
        </div>
    </div>
    
    <div class="alertt">
        <div class="alert alert-info" role="alert">
			<span class="alert-title">
                CL_BOB
            </span>
			<span class="alert-description" id="testtext1">  
                <?=$row['cl_bob']?>
            </span>
        </div>
        <div class="buttonalert">
            <button class="jsbtn" id="cp_btn1">
                <img src="https://www.flaticon.com/svg/static/icons/svg/748/748107.svg" height="50px">
                <br>
                <i class="fa fa-home"></i>Copy
            </button>

            <script lang="JavaScript">
                document.getElementById("cp_btn1").addEventListener("click", copy_password);

                function copy_password() {
                    var copyText = document.getElementById("testtext1");
                    var textArea = document.createElement("textarea");
                    textArea.value = copyText.textContent;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand("Copy");
                    textArea.remove();
                }
            </script>
        </div>
    </div>