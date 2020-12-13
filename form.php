<php
echo "<!DOCTYPE html>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/8.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <form name="feedback" method="POST" action="action.php" enctype="multipart/form-data">
    <?php
        include("menu.php");
    ?>
      <div class="intro">
          <div class="features">
              <div class="features__item">
                  <img class="features__icon" alt="">
                  <input type="file" name="my_image">
                  <h1 class="features__title"><input type="text" name="name"></h1>
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
                  <img class="settings_icon" src="img/10.png" alt="">
                  <h1 class="settings__title">DPI</h1>
                  <h4 class="setth4"><textarea name="dpi"></textarea></h4>
                  <img class="settings_icon" src="img/10.png" alt="">
                  <h1 class="settings__title">Sensitivity</h1> 
                  <h4 class="setth4"><textarea name="sensitivity"></textarea></h4>
                  <img class="settings_icon" src="img/10.png" alt="">
                  <h1 class="settings__title">Zoom Sensitivity</h1>
                  <h4 class="setth4"><textarea name="zoom"></textarea></h4>
                  <img class="settings_icon" src="img/10.png" alt="">
                  <h1 class="settings__title">HZ</h1>
                  <h4 class="setth4"><textarea name="hz"></textarea></h4>
              </div>
              <div class="mouse_settings">
                  <img class="settings_icon" src="img/10.png" alt="">
                  <h1 class="settings__title">Mouse Accel</h1>
                  <h4 class="setth4"><textarea name="mouseaccel"></textarea></h4>
                  <img class="settings_icon" src="img/10.png" alt="">
                  <h1 class="settings__title">Windows Sensitivity</h1>
                  <h4 class="setth4"><textarea name="windowssens"></textarea></h4>
                  <img class="settings_icon" src="img/10.png" alt="">
                  <h1 class="settings__title">Raw input</h1> 
                  <h4 class="setth4"><textarea name="rawinput"></textarea></h4>
                  <img class="settings_icon" src="img/10.png" alt="">
                  <h1 class="settings__title">eDPI</h1> 
                  <h4 class="setth4"><textarea name="edpi"></textarea></h4>
              </div>
              
          </div>
      
          <!-- Alert -->
          <div>
              <div class="alert alert-info" role="alert">
            <span class="alert-title">
                      Crosshair
                  </span>
                  <span class="alert-description" id="testtext">  
                    <input type="text" name="crosshair">
                  </span>
          </div>
          </div>
          <div>
            <div class="alert alert-info" role="alert">
            <span class="alert-title">
                      Viewmodel
                  </span>
              <span class="alert-description" id="testtext1">  
                <input type="text" name="viewmodel">
                      </span>

          </div>
          </div>
          <div>
              <div class="alert alert-info" role="alert">
            <span class="alert-title">
                      CL_BOB
                  </span>
              <span class="alert-description" id="testtext2">  
                      </span>
                      <input type="text" name="cl_bob">
          </div>
          </div>
          <input type="submit" name="send" value="Отправить">
                        </form>

      </div>
   </body>
</html>