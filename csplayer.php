<php
echo "<!DOCTYPE html>
<link rel="stylesheet" href="css/csplayer.css">
<link rel="stylesheet" href="css/main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<?php 
    include("db_conn1.php");
    include("menu.php");
?>  
<?php
    $id = $_GET['id'];
    $sql_select = "SELECT * FROM main WHERE id =".$id;
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<div class="intro">
    <div class="features">
        <div class="features__item">
            <img class="features__icon" src="uploads/<?=$row['img']?>" alt="">
            <h1 class="features__title"><?=$row['name']?></h1>
            <div class="features__text">An average player</div>

            <div>
                <i>
                    <a href="" target="_blank"><img class="two_icons" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111630.svg"></a>
                </i>
                <i>
                    <a href="" target="_blank"><img class="two_icons" src="https://www.flaticon.com/svg/static/icons/svg/733/733635.svg"></a>
                </i>
            </div>
        </div>
        <div class="mouse_settings">
            <img class="settings_icon" src="https://www.flaticon.com/svg/static/icons/svg/709/709586.svg" alt="" align="left">

                <h1 class="settings__title">DPI</h1>
                <?php if($row['dpi'] == 0): ?>
                    <h4 class="setth4">None</h4>
                <?php else:?>
                    <h4 class="setth4"><?=$row['dpi']?></h4>
                <?php endif?>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Sensitivity</h1> 
            <?php if($row['sensitivity'] == 0): ?>
                <h4 class="setth4">None</h4>
            <?php else:?>
                <h4 class="setth4"><?=$row['sensitivity']?></h4>
            <?php endif?>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Zoom Sensitivity</h1>
            <h4 class="setth4"><?=$row['zoom']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">HZ</h1>
            <h4 class="setth4"><?=$row['hz']?></h4>
        </div>
        <div class="mouse_settings">
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Mouse Accel</h1>
            <h4 class="setth4"><?=$row['mouseaccel']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Windows Sensitivity</h1>
            <h4 class="setth4"><?=$row['windowssens']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Raw input</h1> 
            <h4 class="setth4"><?=$row['rawinput']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">eDPI</h1> 
            <h4 class="setth4"><?=$row['edpi']?></h4>
        </div>
        
    </div>

    <!-- Alert -->

    <?php if($row['crosshair'] == 0): ?>
        <?php else:?>
            <div>
                <div class="alert alert-info" role="alert">
                <span class="alert-title">
                    Crosshair
                </span>
                <span class="alert-description" id="testtext">  
                <?=$row['crosshair']?>

                <button class="jsbtn" id="cp_btn"><i class="fa fa-home"></i>Copy</button>

                <script lang="JavaScript">
                    document.getElementById("cp_btn").addEventListener("click", copy_password);

                    function copy_password() {
                        var copyText = document.getElementById("testtext");
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
    <?php endif?>
    <div>
        <div class="alert alert-info" role="alert">
			<span class="alert-title">
                Viewmodel
            </span>
				<span class="alert-description" id="testtext1">  
                    <?=$row['viewmodel']?>
                </span>

                <button class="jsbtn" id="cp_btn1"><i class="fa fa-home"></i>Copy</button>
            
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
    <div>
        <div class="alert alert-info" role="alert">
			<span class="alert-title">
                CL_BOB
            </span>
				<span class="alert-description" id="testtext2">  
                <?=$row['cl_bob']?>
                </span>

                <button class="jsbtn" id="cp_btn2"><i class="fa fa-home"></i>Copy</button>
            
                <script lang="JavaScript">
                    document.getElementById("cp_btn2").addEventListener("click", copy_password);
    
                    function copy_password() {
                        var copyText = document.getElementById("testtext2");
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