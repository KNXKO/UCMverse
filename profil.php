<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

	$user_data = check_login($conn);

?>
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
    <title>UCMverse | Profil</title>
</head>

<body>
<?php
error_reporting(-1);
ini_set('display_errors', 'On');

  $mysqli= new mysqli('localhost','root','','ucm_verse') or die($mysqli->connect_error);
     $table ='users';
     $user_id=$_SESSION['userid'];
     
     $result= $mysqli->query("SELECT * FROM $table WHERE usersId LIKE '%$user_id%'") or die($mysqli->error);
     $data = $result->fetch_assoc();

     $r_age=$mysqli->query("SELECT YEAR(CURRENT_TIMESTAMP) - YEAR(usersBdate) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(usersBdate, 5)) as age 
     FROM $table WHERE usersId LIKE '%$user_id%' ;");
     $age = $r_age->fetch_assoc();

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
    <!-- BACKGROUND-->
    <div id="background">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg sticky-top pe-auto bd-primary shadow-sm">
            <div class="container d-flex justify-content-lg-between">
                <!-- LOGO -->
                <a href="home.php">
                    <img class="logo navbar-brand menu-list" src="assets/img/UCMverse_logo.png" alt=""></a>
                <button type="button" class="navbar-toggler custom-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- HAMBURGER -->
                <div class="navbar collapse navbar-collapse justify-content-between flex-column flex-md-row align-content-md-center align-items-md-center"
                    id="navbarCollapse">
                    <div class="w-50"> </div>
                    <!-- DROPDOWN -->
                    <div class="d-flex align-items-center mt-3 mt-md-0 mt-lg-0">
                        <!-- USER FOTO -->
                        <img class="img-avatar-user mx-3 shadow-sm " src="<?php echo"{$data['usersImgdir']}";?>" alt="User avatar">
                        <div class="dropdown shadow-sm">
                            <button class="dropdown-toggle bg-transparent fw-bold c-black" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo"{$data['usersName']} ";?><?php echo"{$data['usersLastname']}";?>
                            </button>
                            <!-- LIST -->
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                                <!-- 1 -->
                                <li>
                                    <a href="#" onclick="btnColor('background')" class="c-black ms-3 shadow-sm">
                                        Dark mode
                                    </a>
                                </li>
                                <!-- 2 -->
                                <li>
                                    <a class="c-black ms-3 shadow-sm" href="/includes/logout.inc.php">Odhlásiť sa</a></li>
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
                <a class="menu-bg" href="home.php">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-house me-lg-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Domov</h3>
                    </div>
                </a>
                <!-- 2.  -->
                <a class="menu-bg" href="popular.php">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bar-chart me-lg-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Populárne</h3>
                    </div>
                </a>
                <!-- 3.  -->
                <a class="menu-bg" href="blank.html">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-binoculars me-lg-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Preskúmať</h3>
                    </div>
                </a>
                <!-- 4.  -->
                <a class="menu-bg" href="blank.html">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bell me-lg-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Notifikácie</h3>
                    </div>
                </a>
                <!-- 5.  -->
                <a class="menu-bg" href="savedposts.php">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bookmark me-lg-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Uložené</h3>
                    </div>
                </a>
                <!-- 6.  -->
                <a class="menu-bg" href="profil.php">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-person me-lg-3 c-darkprimary"></h3>
                        <h3 class="fs-5 d-none d-lg-inline c-darkprimary">Profil</h3>
                    </div>
                </a>
            </div>
            <!-- PROFIL -->
            <div
                class="p-3 bd-purple post-bg-color shadow-sm rounded-3 col-12 col-lg-9 mt-3 col-xl-9 col-xxl-9 m-xx-auto m-auto me-lg-2 me-xl-2">
                <!-- Profil menu -->
                <div class="profil-bar d-flex justify-content-sm-center
                justify-content-around justify-content-lg-start">
                    <!-- 1.  -->
                    <a class="menu-bg" href="profil.php">
                        <div class="d-flex align-content-center align-items-center px-sm-4">
                            <h3 class="bi bi-person me-sm-3 c-darkprimary"></h3>
                            <h3 class="fs-5 d-none d-sm-inline c-darkprimary">Môj profil</h3>
                        </div>
                    </a>
                    <!-- 2.  -->
                    <a class="menu-bg" href="edit_profil.php">
                        <div class="d-flex align-content-center align-items-center px-sm-4">
                            <h3 class="bi bi-pencil-square me-sm-3"></h3>
                            <h3 class="fs-5 d-none d-sm-inline">Upraviť profil</h3>
                        </div>
                    </a>
                </div>
                <!-- Profil info -->
                <div class="profil-info flex-column flex-md-row d-flex col-12">
                    <!-- Profil picture - Likes - Coments - Posts -->
                    <div class="profile-left d-flex flex-column col-12 justify-content-center col-md-4">
                        <!-- Profilva fotka-->
                        <div class="mb-3">
                            <?php
                            echo"<img src='{$data['usersImgdir']}' class='m-auto d-flex rounded-circle img-profile' alt=''>";
                            ?>
                        </div>
                        
                    </div>
                    <!-- Profil info -->
                    <div class="profil-right col-12 col-lg-7 col-md-7 col-xl-6">
                        <!-- Meno , Priezvisko , E-mail, dátum naordenia , fakulta ,  stupen odbor -->
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <h1><?php echo"{$data['usersName']} ";?><?php echo"{$data['usersLastname']}";?></h1>
                        </div>
                        <hr class="ms-md-2 col-12 col-md-10 col-lg-10 col-xl-11">
                        
                        
                        <div class="d-flex flex-column  align-items-center align-items-md-start">
                            <div class="mb-1 d-flex flex-row align-items-center">
                                <h2 class="bi bi-calendar4 c-darkblack fs-4 me-2"></h2>
                                <p class="c-darkgrey mt-1"><?php echo"{$age['age']} ";?> rokov</p>
                            </div>
                            <div class="mb-1 d-flex flex-row align-items-center">
                                <h2 class="bi bi-envelope c-darkblack fs-4 me-2"></h2>
                                <p class="c-darkgrey mt-1"><?php echo"{$data['usersEmail']} ";?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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