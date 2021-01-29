<php
echo "<!DOCTYPE html>
<link rel="stylesheet" href="css/csplayerlist.css">
<link rel="stylesheet" href="css/csplayer.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

<?php
    include("menu.php");
    include("db_conn1.php");
    // $sql_select = "SELECT * FROM main";
    // $result = mysqli_query($conn, $sql_select);
    // $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // $sql_select1 = "SELECT * FROM main ORDER BY id LIMIT 5";
    // $result1 = mysqli_query($conn, $sql_select1);
    // $row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);

    $page = isset($_GET['page']) ? $_GET['page']: 1;
    $limit = 12;
    $offset = $limit * ($page - 1);

    $sql_select = "SELECT * FROM main ORDER BY id LIMIT $limit OFFSET $offset";
    $result = mysqli_query($conn, $sql_select);
    $row1 = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sql_select1 = "SELECT * FROM main ORDER BY id LIMIT $limit OFFSET $offset";    
    $result1 = mysqli_query($conn, $sql_select1);
    $row = mysqli_fetch_all($result1, MYSQLI_ASSOC);
?>
<body>
<div class="smallinfo">
    <div class="p50perc1">
        <img class="imgup" src="img/3.svg" height="10px" vspace="5" hspace="5">
            <a href="csplayerlist.php">Player list</a>
    </div>
</div>

<div class="intro1">
    <div class="smallinfo11">
        <?php foreach($row1 as $row1): ?>
            <div class="everyperson">
                <div class="leftside">
                    <img class="imgup" src="img/3.svg" height="10px" vspace="5" hspace="5">
                    <a href="csplayer.php?id=<?=$row1['id']?>">
                        <?=$row1['name']?>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="csfeatures">
        <?php foreach($row as $row): ?>
            <div class="csplayers">
                <a href="csplayer.php?id=<?=$row['id']?>">
                    <div class="try">
                        <div>
                            <div>
                                <a href="csplayer.php?id=<?=$row['id']?>">
                                    <img class="csplayersimg" src="uploads/<?=$row['img']?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="try1">
                            <a href="csplayer.php?id=<?=$row['id']?>">
                                <h1 class="csplayerlisttitle">
                                    <?=$row['name']?>
                                </h1>
                            </a>
                            <?php if ($row['id'] == 1): ?>
                                    <h1 class="csplayerlisttitle1">
                                        Creator
                                    </h1>
                            <?php endif ?>
                            <?php if ($row['id'] == 2): ?>
                                    <h1 class="csplayerlisttitle1">
                                        Designer
                                    </h1>
                            <?php endif ?>
                            <div>
                                <div id="parent" class="parent">
                                    <svg class="socials" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="instagram_small-3a4738a1--sprite"><path d="M12.003 6.797c-2.822 0-5.161 2.298-5.161 5.161a5.146 5.146 0 005.161 5.161c2.863 0 5.161-2.338 5.161-5.16 0-2.823-2.338-5.162-5.16-5.162zm0 8.468a3.321 3.321 0 01-3.306-3.307 3.321 3.321 0 013.306-3.306 3.321 3.321 0 013.306 3.306 3.321 3.321 0 01-3.306 3.307zm5.36-7.418a1.17 1.17 0 100-2.34 1.17 1.17 0 000 2.34z" fill="currentColor"></path><path d="M20.387 3.653C19.338 2.565 17.847 2 16.153 2H7.846C4.338 2 2 4.339 2 7.847v8.266c0 1.734.564 3.226 1.693 4.314C4.782 21.476 6.233 22 7.887 22h8.225c1.734 0 3.186-.564 4.234-1.573C21.435 19.38 22 17.887 22 16.153V7.847c0-1.694-.565-3.145-1.613-4.194zm-.162 12.5c0 1.25-.443 2.258-1.169 2.944-.726.685-1.734 1.048-2.944 1.048H7.887c-1.21 0-2.218-.363-2.944-1.048-.726-.726-1.089-1.734-1.089-2.984V7.847c0-1.21.363-2.218 1.09-2.944.685-.685 1.733-1.048 2.943-1.048h8.306c1.21 0 2.218.363 2.944 1.089.685.725 1.088 1.733 1.088 2.903v8.306z" fill="currentColor"></path></svg>
                                    <svg class="socials" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="vk_small-cfefe5df--sprite"><path d="M21.891 16.837a1.685 1.685 0 00-.072-.137c-.364-.657-1.06-1.463-2.088-2.42l-.022-.022-.01-.01-.01-.012h-.013c-.466-.445-.76-.744-.885-.898-.226-.292-.277-.587-.153-.887.087-.226.415-.704.984-1.434.3-.387.535-.697.71-.93 1.261-1.68 1.808-2.753 1.64-3.22l-.065-.11c-.043-.065-.156-.126-.338-.18-.183-.055-.416-.064-.7-.028l-3.15.022a.408.408 0 00-.218.006l-.142.033-.055.027-.043.033a.482.482 0 00-.12.115.747.747 0 00-.11.19 17.89 17.89 0 01-1.17 2.465c-.27.453-.517.845-.744 1.178a5.66 5.66 0 01-.568.733 4.03 4.03 0 01-.416.378c-.123.095-.218.135-.284.12a7.83 7.83 0 01-.186-.043.727.727 0 01-.246-.27 1.199 1.199 0 01-.125-.426 4.626 4.626 0 01-.039-.443 9.045 9.045 0 01.006-.526c.007-.226.01-.38.01-.46 0-.277.006-.58.017-.903l.027-.772c.008-.19.011-.391.011-.603a2.503 2.503 0 00-.038-.498 1.704 1.704 0 00-.115-.35.59.59 0 00-.224-.263 1.262 1.262 0 00-.366-.148c-.386-.088-.878-.135-1.476-.142-1.356-.015-2.227.073-2.613.262a1.47 1.47 0 00-.416.329c-.13.16-.15.248-.054.263.437.065.747.222.93.47l.065.132c.05.095.102.263.153.504.05.24.084.507.098.799.036.533.036.99 0 1.369-.036.38-.07.675-.104.887a1.777 1.777 0 01-.279.755.187.187 0 01-.054.055.816.816 0 01-.296.055c-.102 0-.226-.051-.37-.153a2.622 2.622 0 01-.455-.422 5.632 5.632 0 01-.53-.75c-.223-.37-.427-.75-.613-1.14L6.392 9.1a29.24 29.24 0 01-.448-.892c-.19-.39-.357-.77-.503-1.134a.722.722 0 00-.262-.35l-.055-.033a.748.748 0 00-.175-.093 1.16 1.16 0 00-.25-.071l-2.997.022c-.306 0-.514.07-.623.208l-.044.066a.355.355 0 00-.033.175c0 .08.022.179.066.295.437 1.03.913 2.023 1.426 2.979.514.956.96 1.727 1.34 2.31a27.84 27.84 0 001.158 1.654c.393.518.654.85.781.997.128.146.228.255.301.328l.274.263c.175.175.431.385.77.63.34.244.715.485 1.127.723.412.237.89.43 1.437.58.547.15 1.08.21 1.597.18h1.257c.255-.021.448-.102.58-.24l.043-.055a.733.733 0 00.082-.203c.026-.09.038-.191.038-.3a3.61 3.61 0 01.071-.85 2.26 2.26 0 01.187-.57 1.4 1.4 0 01.42-.481.746.746 0 01.088-.038c.175-.058.38-.002.618.17.237.172.46.383.667.635.208.252.457.535.75.849.29.314.545.547.764.7l.22.132c.145.088.334.168.567.24.233.074.437.092.613.056l2.8-.044c.275 0 .491-.046.644-.137.153-.091.244-.192.273-.301a.839.839 0 00.005-.373 1.302 1.302 0 00-.075-.29z" fill="currentColor"></path></svg>
                                    <svg class="socials" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="twitter_small-ed0287d1--sprite"><path d="M22 5.923a8.193 8.193 0 01-2.356.646 4.12 4.12 0 001.803-2.268 8.271 8.271 0 01-2.607.996 4.103 4.103 0 00-6.991 3.74 11.648 11.648 0 01-8.456-4.286 4.072 4.072 0 00-.555 2.062 4.1 4.1 0 001.825 3.414 4.104 4.104 0 01-1.859-.515v.052a4.107 4.107 0 003.291 4.023 4.155 4.155 0 01-1.081.143c-.265 0-.521-.026-.772-.076a4.105 4.105 0 003.831 2.85 8.232 8.232 0 01-5.095 1.753A8.73 8.73 0 012 18.401a11.597 11.597 0 006.288 1.846c7.548 0 11.673-6.252 11.673-11.673l-.014-.531A8.192 8.192 0 0022 5.923z" fill="currentColor"></path></svg>
                                </div>
                                <div>
                                    <?php if ($row['id'] != 1 && $row['id'] != 2): ?>
                                        <div class="discord">
                                            <img class="playerdevice1" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111363.svg" alt="">
                                            <div class="discord1">
                                                #12345
                                            </div>
                                    </div>


                                <?php endif ?>
                                <!-- <img class="socialicons" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111630.svg" fill="none" viewBox="0 0 24 24" width="24px" height="24px">
                                <img class="socialicons" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111765.svg" fill="none" viewBox="0 0 24 24" width="24px" height="24px">
                                <img class="socialicons" src="https://www.flaticon.com/svg/static/icons/svg/1384/1384089.svg" fill="none" viewBox="0 0 24 24" width="24px" height="24px">
                                <img class="socialicons" src="https://www.flaticon.com/svg/static/icons/svg/733/733635.svg" fill="none" viewBox="0 0 24 24" width="24px" height="24px">
                                <?php if ($row['id'] == 1): ?>
                                    <img class="socialicons" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111363.svg" fill="none" viewBox="0 0 24 24" width="24px" height="24px">
                                <?php endif ?>
                                <?php if ($row['id'] == 2): ?>
                                    <img class="socialicons" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111363.svg" fill="none" viewBox="0 0 24 24" width="24px" height="24px">
                                <?php endif ?>
                                <?php if ($row['id'] != 1 && $row['id'] != 2): ?>
                                    <h1 class="discord">
                                        <img class="playerdevice1" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111363.svg" alt="">
                                        <div class="discord1">
                                            #12345
                                        </div>
                                    </h1>
                                <?php endif ?> -->


                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- <div class="something">
                        <h1 class="csplayerlisttitle11">
                            Main game:
                        </h1>
                        <?php if ($row['id'] == 1): ?>
                            <h1 class="csplayerlisttitle1">
                                <a href="https://playoverwatch.com/en-us/">
                                    <img class="playerdevice" src="https://upload.wikimedia.org/wikipedia/commons/5/55/Overwatch_circle_logo.svg" alt="" href="https://playoverwatch.com/en-us/">
                                </a>
                            </h1>
                        <?php endif ?>
                        <?php if ($row['id'] == 2): ?>
                            <h1 class="csplayerlisttitle1">
                                <a href="https://playoverwatch.com/en-us/">
                                    <img class="playerdevice" src="https://upload.wikimedia.org/wikipedia/commons/5/55/Overwatch_circle_logo.svg" alt="" href="https://playoverwatch.com/en-us/">
                                    <h1 class="csplayerlisttitle111">
                                        Overwatch
                                    </h1>
                                </a>
                            </h1>
                        <?php endif ?>
                        <?php if ($row['id'] == 12): ?>
                            <h1 class="csplayerlisttitle1">
                                <a href="https://playoverwatch.com/en-us/">
                                    <img class="playerdevice" src="https://pbs.twimg.com/profile_images/1267717099864104961/55xF1ahU_400x400.png" alt="">
                                    <h1 class="csplayerlisttitle111">
                                        Valorant
                                    </h1>
                                </a>
                            </h1>
                        <?php endif ?>
                        <?php if ($row['id'] != 1 && $row['id'] != 2 && $row['id'] != 12): ?>
                            <h1 class="csplayerlisttitle1">
                            <a href="https://playoverwatch.com/en-us/">
                                <img class="playerdevice" src="https://logos-download.com/wp-content/uploads/2016/04/CSGO_logo-700x700.png" alt="">
                                <h1 class="csplayerlisttitle111">
                                        CS:GO
                                    </h1>
                                </a>
                            </h1>
                        <?php endif ?>
                    </div> -->
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
