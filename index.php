<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="nofollow">
    <meta name="Author" content="UCMverse">
    <meta name="Description" content="UCMverse">
    <meta name="Keywords" content="UCMverse">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- BS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- EMOJI -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/emoji/css/emoji.css" rel="stylesheet">
    <script src="assets/emoji/js/config.min.js"></script>
    <script src="assets/emoji/js/util.min.js"></script>
    <script src="assets/emoji/js/jquery.emojiarea.min.js"></script>
    <script src="assets/emoji/js/emoji-picker.min.js"></script>
    <title>UCMverse</title>
</head>

<body>
<?php
  error_reporting(-1);
  ini_set('display_errors', 'On');

  $mysqli= new mysqli('localhost','root','root','databaza_pal') or die($mysqli->connect_error);
     $p_table ='posts';
     $l_table ='likes';
     $k_table ='comments';

$result= $mysqli->query("SELECT * FROM $table WHERE 1 ORDER BY time DESC") or die($mysqli->error);

?>
    <!-- PRELOADER CONTAINER -->
    <div class="loader-wrapper overflow-hidden">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--MAIN BACKGROUND -->
    <div id="background">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg sticky-top pe-auto bd-primary shadow-sm">
            <div class="container d-flex justify-content-lg-between">
                <!-- LOGO -->
                <a href="home.html">
                    <img class="logo navbar-brand menu-list" src="assets/img/UCMverse_logo.png" alt=""></a>
                <button type="button" class="navbar-toggler custom-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- HAMBURGER -->
                <div class="navbar collapse navbar-collapse justify-content-between flex-column flex-md-row align-content-md-center align-items-md-center"
                    id="navbarCollapse">
                    <!-- SEARCH -->
                    <div class="flex-grow-1 d-flex">
                        <form class="form-inline flex-nowrap mx-lg-auto">
                            <div class="input-group mx-0 d-flex align-items-center">
                                <input type="text" class="search rounded-pill px-4 mr-sm-2 bd-purple shadow-sm" placeholder="#Hladať" maxlength="15"
                                    required>
                                <!-- SEARCH ICON -->
                                <a class="menu-list ms-2">
                                    <i class="bi-search shadow-sm"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                    <!-- DROPDOWN -->
                    <div class="d-flex align-items-center mt-3 mt-md-0 mt-lg-0">
                        <!-- USER FOTO -->
                        <img class="mx-3 shadow-sm" src="assets/img/Ellipse 3.png" alt="">
                        <div class="dropdown shadow-sm" onclick="event.stopPropagation()" aria-labelledby="triggerId">
                            <button class="menu-list dropdown-toggle bg-transparent fw-bold c-black" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Oman Gulvi
                            </button>
                            <!-- LIST -->
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                                <!-- 1 -->
                                <li>
                                    <a id="toggleMode" href="#!" onclick="btnColor('background')" class="c-black ms-3 shadow-sm">
                                        Dark mode
                                    </a>
                                </li>
                                <!-- 2 -->
                                <li>
                                    <a class="c-black ms-3 shadow-sm" href="index.html">Odhlásiť sa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- MAIN CONTAINER -->
        <div class="container-fluid mt-5 mt-lg-5 px-xxl-5 m-lg-auto">
            <!-- LEFT BAR -->
            <div class="left-bar container d-flex flex-lg-column h-100 col-md-12 col-lg-2 justify-content-md-between justify-content-lg-start justify-content-between
             float-lg-start col-xxl-2 col-xl-2">
                <!-- 1.  -->
                <a class="menu-bg active" href="home.html">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-house-fill me-md-3 c-darkprimary"></h3>
                        <h3 class="fs-5 d-none d-lg-inline c-darkprimary">Domov</h3>
                    </div>
                </a>
                <!-- 2.  -->
                <a class="menu-bg" href="popular.html">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bar-chart me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Populárne</h3>
                    </div>
                </a>
                <!-- 3.  -->
                <a class="menu-bg" href="#">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-binoculars me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Preskúmať</h3>
                    </div>
                </a>
                <!-- 4.  -->
                <a class="menu-bg" href="#">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bell me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Notifikácie</h3>
                    </div>
                </a>
                <!-- 5.  -->
                <a class="menu-bg" href="#">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bookmark me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Uložené</h3>
                    </div>
                </a>
                <!-- 6.  -->
                <a class="menu-bg" href="#">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-person me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Profil</h3>
                    </div>
                </a>
            </div>
            <!-- RIGHT BAR -->
            <div class="container my-3 px-0 float-lg-end col-md-12 col-lg-3 my-lg-0 col-xxl-3 m-lg-auto shadow-sm">
                <div class="p-4 rounded-3 d-flex flex-column m-md-auto flex-lg-column w-auto post-bg-color bd-black">
                    <h4 class="mb-3">Novinky</h4>
                    <!-- 1 -->
                    <div class="d-flex mt-1">
                        <img class="img-thumbnail w-25 h-auto" src="assets/img/udalosti/banners/banner_tyzden_vedy.jpg" style="object-fit: cover;" alt="">
                        <div class="mx-3 d-flex flex-column justify-content-center">
                            <h5 class="fw-300 fw-bold c-darkgrey fs-6">Týžden vedy a techniky</h5>
                            <p class="fw-300 fs-6 mb-1">1.11 12:15</p>
                            <a class="fw-300 c-darkprimary fs-6 udalosti" target="_blank" href="https://tyzdenvedy.sk/">Viac info <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- LINE -->
                    <hr class="c-black">
                    <!-- 2 -->
                    <div class="d-flex mt-1 ">
                        <img class="img-thumbnail w-25 h-auto" src="assets/img/udalosti/banners/images.jfif" style="object-fit: cover;" alt="">
                        <div class="mx-3 d-flex flex-column justify-content-center">
                            <h5 class="fw-300 fw-bold c-darkgrey fs-6 mb-1">Prednáška Romana Boču</h5>
                            <p class="fw-300 fs-6 mb-0">30.10 16:10</p>
                            <a class="fw-300 c-darkprimary fs-6 udalosti" target="_blank" href="http://fpv.ucm.sk/sk/odborna-prednaska-romana-bocu">Viac info <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- LINE -->
                    <hr class="c-black">
                    <!-- 3 -->
                    <div class="d-flex mt-1">
                        <img class="img-thumbnail w-25 h-auto" src="assets/img/udalosti/banners/banner_DOD.jpg" style="object-fit: cover;" alt="">
                        <div class="mx-3 d-flex flex-column justify-content-center">
                            <h5 class="fw-300 fw-bold c-darkgrey fs-6 mb-1">Deň otvorených dverí na FPV</h5>
                            <p class="fw-300 fs-6 mb-0">14.10 10:30</p>
                            <a class="fw-300 c-darkprimary fs-6 udalosti" target="_blank" href="http://fpv.ucm.sk/sk/dod-2022">Viac info <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- LINE  -->
                    <hr class="c-black">
                </div>
            </div>
            <!-- CENTER MENU-->
            <div
                class="container m-lg-auto p-lg-4 p-md-4 p-sm-3 p-3 rounded-3 col-md-12 col-lg-5 user-post-bg-color order-2 order-lg-3 bd-purple shadow-sm">
                <form action="script.php" method="POST" enctype="multipart/form-data">
                <!-- CONTAINER -->
                <div class="d-flex align-items-center align-content-center justify-content-between col-12">
                    <!-- USER FOTO -->
                    <img class="me-3" src="assets/img/Ellipse 3.png" alt="">
                    <!-- MSG -->
                    <div class="col-6 col-xxl-8 col-md-8">
                        <!-- EMOJI -->
                        <p class="emoji-picker-container">
                            <textarea class="c-darkgrey border-0 prosim" placeholder="O čom chceš informovať UCM, Oman?" type="text" name="msg"
                                id="msg" maxlength="250" row="2" data-emojiable="true" data-emoji-input="unicode" required></textarea>
                        </p>
                    </div>
                    <!-- SUBMIT BUTTON-->
                    <button type="submit" class="bg-purple px-4 py-2 rounded-3 menu-list fw-bold shadow-sm">Odoslať</button>
                </div>
                <!-- LINE -->
                <hr class="c-black">
                <!-- ATTACH FOTO -->
                <a class="menu-list" onclick="toggler('fotodiv');">
                    <h5 class="bi bi-image-fill d-inline c-darkprimary"></h5>
                </a>
                <!--
                        <a onclick="toggler('zvukdiv');"><img src="assets/img/Group 15.png" alt="Vlozit zvuk">
                            <p class="d-inline me-3 c-darkgrey">Zvuk</p>
                        </a>
                        <img src="assets/img/Group 16.png" alt="Vlozit video"> 
                        <p class="d-inline me-3 c-darkgrey">Video</p>-->
                <div id="fotodiv" class="hidden">
                    <div class="d-flex justify-content-between align-items-center">
                        <input type="file" class="form-control bg-black border-0 h-25 mt-3 my-2 w-100 fs-6 rounded-3"  name="userfile[]" value="" multiple=""/>
                    </div>
                </div>
            </form>
                <!-- CENTER MENU
                    <div id="zvukdiv" class="hidden">
                        <div class="form">
                            <form>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type='file' class="form-control bg-black border-0 h-25 mt-3 my-2 w-50 fs-6 rounded-3" accept="audio/*">
                                    <button type="submit" class="btn btn-dark border-0 border w-25 bg-purple h-25 rounded-3">Odoslať</button>
                                </div>
                            </form>
                        </div>
                    </div>-->
            </div>
            <!-- POST CONTAINER -->
            <?php /*
            <div class="container m-auto p-lg-4 p-md-3 p-sm-3 mt-3 rounded-3 bd-black col-md-12 col-lg-5 py-sm-3 post-bg-color shadow-sm">
                <!-- TOP CONTAINER -->
                <div class="py-2 d-flex flex-row">
                    <!-- USER FOTO -->
                    <img class="me-3 shadow-sm" src="assets/img/Ellipse 3.png" alt="">
                    <!-- CONTAINER -->
                    <div class="d-flex flex-column">
                        <!-- USER NAME -->
                        <p class="text-light mb-0">Matúš Moťovský</p>
                        <!-- POST UPLOAD DATE-->
                        <p class="mb-0 c-black">Včera, 11:34</p>
                    </div>
                </div>
                <!-- LINE -->
                <hr class="c-black">
                <!-- POST TEXT-->
                <h5 class="d-inline c-darkgrey">Ahojte UCM</h5>
                <!-- CONTAINER-->
                <div class="my-3">
                    <!-- LIKE ICON-->
                    <a class="menu-list" href="#!" aria-disabled="true">
                        <h4 class="likeToggle bi bi-hand-thumbs-up d-inline c-darkblack"></h4>
                    </a>
                    <p class="d-inline me-3 c-darkgrey">6</p>
                    <!-- COMMENTS ICON-->
                    <a class="menu-list" href="#!">
                        <h4 class="commentToggle bi bi-chat d-inline c-darkblack"></h4>
                    </a>
                    <p class="d-inline me-3 c-darkgrey">3</p>
                    <!-- SHARE ICON-->
                    <a class="menu-list" href="#!">
                        <h4 class="shareToggle bi bi-share d-inline c-darkblack"></h4>
                    </a>
                    <p class="d-inline me-3 c-darkgrey">4</p>
                    <!-- BOOKMARK ICON-->
                    <a class="menu-list float-end" href="#!">
                        <h4 class="saveToggle bi bi-bookmark d-inline c-darkblack"></h4>
                    </a>
                </div>
            </div>*/?>

            <!-- POST CONTAINER -->
            <?php 
            while ($data= $result->fetch_assoc()){
            echo "<div class='container m-auto p-lg-3 p-md-3 p-sm-3 mt-3 rounded-3 bd-black col-md-12 col-lg-5 py-sm-3 post-bg-color shadow-sm'>
                <!-- TOP CONTAINER -->
                <div class='py-2 d-flex flex-row'>
                    <!-- USER FOTO -->
                    <img class='me-3 shadow-sm' src='assets/img/Ellipse 3.png' alt=''>
                    <!-- CONTAINER -->
                    <div class='d-flex flex-column'>
                        <!-- USER NAME -->
                        <p class='text-light mb-0'>Matúš Moťovský</p>
                        <!-- POST UPLOAD DATE-->
                        <p class='mb-0 c-black'>{$data['time']}</p>
                    </div>
                </div>
                <!-- LINE -->
                <hr class='c-black'>
                <!-- POST TEXT-->
                <h5 class='d-inline c-darkgrey'>Prihláste sa čo najskôr, kým je miesto!</h5>
                <!-- POST IMAGE-->";
                if($data['img_dir']!='images/web/'){
                echo "<div class='d-flex justify-content-center my-3'>
                    <img class='img-fluid' src='assets/img/Virtualny_letak_BIO.jpg' alt=''>
                </div>";}
                echo"
                <!-- CONTAINER-->
                <div class='my-3'>
                    <!-- LIKE ICON-->
                    <a class='menu-list' href='#!'>
                        <h4 class='likeToggle bi bi-hand-thumbs-up d-inline c-darkblack'></h4>
                    </a>
                    <p class='d-inline me-3 c-darkgrey'>6</p>
                    <!-- COMMENTS ICON-->
                    <a class='menu-list' href='#!'>
                        <h4 class='commentToggle bi bi-chat d-inline c-darkblack'></h4>
                    </a>
                    <p class='d-inline me-3 c-darkgrey'>3</p>
                    <!-- SHARE ICON-->
                    <a class='menu-list' href='#!'>
                        <h4 class='shareToggle bi bi-share d-inline c-darkblack'></h4>
                    </a>
                    <p class='d-inline me-3 c-darkgrey'>4</p>
                    <!-- BOOKMARK ICON-->
                    <a class='menu-list float-end' href='#!'>
                        <h4 class='saveToggle bi bi-bookmark d-inline c-darkblack'></h4>
                    </a>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
    <!-- PRELOADER SCRIPT-->
    <script>
        $(window).on("load", function () {
            $(".loader-wrapper").fadeOut(1000);
        });
    </script>
    <script src="assets/js/app.js"></script>
</body>

</html>