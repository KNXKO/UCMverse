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
    <title>UCMverse | Uložené</title>
</head>

<body>
<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');

    $mysqli = new mysqli('localhost', 'root', '', 'ucm_verse') or die($mysqli->connect_error);
    $p_table = 'posts';
    $l_table = 'likes';
    $k_table = 'comments';
    $s_table = 'saved';
    $u_table = 'users';
    $user_id=$_SESSION['userid'];

    $r_a_info=$mysqli->query("SELECT * FROM $u_table WHERE usersId LIKE '%$user_id%' ") or die($mysqli->error);

    $a_info = $r_a_info->fetch_assoc();

    $result = $mysqli->query("SELECT $p_table.* FROM $p_table LEFT JOIN $s_table ON $p_table.ID = $s_table.post_id WHERE $s_table.value=1 AND $s_table.user_id LIKE '%$user_id%'  ORDER BY time DESC") or die($mysqli->error);

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
        <nav class="navbar navbar-expand-lg sticky-top pe-auto">
            <div class="container d-flex justify-content-lg-between">
                <!-- LOGO -->
                <a href="home.php">
                    <img class="logo navbar-brand menu-list" src="assets/img/UCMverse_logo.png"></a>
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
                        <img class="img-avatar-user mx-3 shadow-sm " src="<?php echo"{$a_info['usersImgdir']}";?>" alt="User avatar">
                        <div class="dropdown shadow-sm" onclick="event.stopPropagation()" aria-labelledby="triggerId">
                            <button class="dropdown-toggle bg-transparent fw-bold c-black" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo"{$a_info['usersName']} ";?><?php echo"{$a_info['usersLastname']}";?>
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
                                    <a class="c-black ms-3 shadow-sm" href="/includes/logout.inc.php">Odhlásiť sa</a>
                                </li>
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
                        <h3 class="bi bi-house me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Domov</h3>
                    </div>
                </a>
                <!-- 2.  -->
                <a class="menu-bg" href="popular.php">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bar-chart-fill me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Populárne</h3>
                    </div>
                </a>
                <!-- 3.  -->
                <a class="menu-bg" href="blank.html">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-binoculars me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Preskúmať</h3>
                    </div>
                </a>
                <!-- 4.  -->
                <a class="menu-bg" href="blank.html">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bell me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Notifikácie</h3>
                    </div>
                </a>
                <!-- 5.  -->
                <a class="menu-bg" href="savedposts.php">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-bookmark me-md-3 c-darkprimary"></h3>
                        <h3 class="fs-5 d-none d-lg-inline c-darkprimary">Uložené</h3>
                    </div>
                </a>
                <!-- 6.  -->
                <a class="menu-bg" href="profil.php">
                    <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                        <h3 class="bi bi-person me-md-3"></h3>
                        <h3 class="fs-5 d-none d-lg-inline">Profil</h3>
                    </div>
                </a>
            </div>
            <!-- RIGHT BAR -->
            <div class="container my-3 px-0 float-lg-end col-md-12 col-lg-3 my-lg-0 col-xxl-3 m-lg-auto shadow-sm">
                <div class="p-4 rounded-3 d-flex flex-column m-md-auto flex-lg-column w-auto post-bg-color bd-black">
                    <h3 class="mb-3">Novinky</h3>
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
                            <a class="fw-300 c-darkprimary fs-6 udalosti"  target="_blank" href="http://fpv.ucm.sk/sk/odborna-prednaska-romana-bocu">Viac info <i class="bi bi-arrow-right"></i></a>
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
           
            <!-- POST CONTAINER -->
            <?php
           
            while ($data = $result->fetch_assoc()) {
                $results = $mysqli->query("SELECT * FROM $l_table WHERE user_id LIKE '%$user_id%' AND post_id={$data['ID']}");
                $data_likes = $results->fetch_assoc();
                $like = 0;
                if (mysqli_num_rows($results) == 1) {
                    $like = $data_likes['value'];
                }
                $postid = $data['ID'];
                $likes_num=$data['likes']+1;
                $likes_num2=$data['likes']-1;

                $results_saved = $mysqli->query("SELECT * FROM $s_table WHERE user_id LIKE '%$user_id%' AND post_id={$data['ID']}");
                $data_saved = $results_saved->fetch_assoc();
                $saved = 0;
                if (mysqli_num_rows($results_saved) == 1) {
                    $saved = $data_saved['value'];
                }
                echo "<div class='container m-auto p-lg-3 p-md-3 p-sm-3 mt-3 rounded-3 bd-black col-md-12 col-lg-5 py-sm-3 post-bg-color shadow-sm'>
                <!-- TOP CONTAINER -->
                <div class='py-2 d-flex flex-row'>
                    <!-- USER FOTO -->
                    <img class='img-avatar-anotheruser me-3 shadow-sm' src='{$data['author_photo_dir']}' alt=''>
                    <!-- CONTAINER -->
                    <div class='d-flex flex-column'>
                        <!-- USER NAME -->
                        <p class='text-light mb-0'>{$data['author_name']} {$data['author_last_name']}</p>
                        <!-- POST UPLOAD DATE-->
                        <p class='mb-0 c-black'>{$data['time']}</p>
                    </div>
                </div>
                <!-- LINE -->
                <hr class='c-black'>
                <!-- POST TEXT-->
                <h5 class='d-inline c-darkgrey'>{$data['msg']}</h5>
                <!-- POST IMAGE-->";
                if ($data['img_dir'] != 'images/web/') {
                    echo "<div class='d-flex justify-content-center my-3'>
                    <img class='img-fluid' src='{$data['img_dir']}' alt=''>
                </div>";
                }
                echo "
                <!-- CONTAINER-->
                <div class='my-3'>
                    <!-- LIKE ICON-->";
            
            
                if (mysqli_num_rows($results) == 1 and $like == 1) { ?>

                <div class="togglecko d-inline">
                    <h4 class='on bi-hand-thumbs-up-fill c-darkprimary c-darkblack ' onclick='startAjax(<?php echo $data["ID"] ?>,<?php echo $user_id ?>,0);'></h4>
                    <h4 class='off bi-hand-thumbs-up  c-darkprimary c-darkblack' onclick="startAjax(<?php echo $data['ID'] ?>,<?php echo $user_id ?>,1);"></h4>
                    <p class='LIKEon me-3 c-darkgrey'><?php echo "{$data['likes']}"?></p>
                    <p class='LIKEoff me-3 c-darkgrey'><?php echo "{$likes_num2}"?></p>
                </div>
                
                <?php 
                } else 
                { ?>
                <div class="toggleckoOFF d-inline">
                    <h4 class='OFFon bi-hand-thumbs-up-fill c-darkprimary c-darkblack ' onclick='startAjax(<?php echo $data["ID"] ?>,<?php echo $user_id ?>,0);'></h4>
                    <h4 class='OFFoff bi-hand-thumbs-up  c-darkprimary c-darkblack ' onclick="startAjax(<?php echo $data['ID'] ?>,<?php echo $user_id ?>,1);"></h4>
                    <p class='LIKEOFFon me-3 c-darkgrey'><?php echo "{$likes_num}"?></p>
                    <p class='LIKEOFFoff me-3 c-darkgrey'><?php echo "{$data['likes']}"?></p>
                </div>
                <?php  }   ?>
                
                <?php
                    
                   echo" 
                    <!-- BOOKMARK ICON-->";
                 if (mysqli_num_rows($results_saved) == 1 and $saved == 1) { ?>
               <div class="SAVE d-inline float-end">
                    <h4 class='SAVEON bi bi-bookmark-fill c-darkblack ' onclick='savedAjax(<?php echo $data["ID"] ?>,<?php echo $user_id ?>,0);'></h4>
                    <h4 class='SAVEOFF bi bi-bookmark c-darkblack ' onclick='savedAjax(<?php echo $data["ID"] ?>,<?php echo $user_id ?>,1);'></h4>
                </div> 
                <?php 
                } else 
                { ?>   
                <div class="SAVEOFF d-inline float-end">
                    <h4 class='SAVEOFFON bi bi-bookmark-fill c-darkblack' onclick='savedAjax(<?php echo $data["ID"] ?>,<?php echo $user_id ?>,0);'></h4>
                    <h4 class='SAVEOFFOFF bi bi-bookmark c-darkblack' onclick='savedAjax(<?php echo $data["ID"] ?>,<?php echo $user_id ?>,1);'></h4>
               </div> 

               <?php } echo"</div>
            </div>";
            }
            ?>
        </div>
    </div>
    <script type="text/javascript">
        function startAjax(x, y, z) {
            
            $.ajax({
                type: 'POST',
                url: '/likes.php',
                data: {
                    post_id: x,
                    user_id: y,
                    value: z
                },
                
            });
           xmlhttp = new XmlHttpRequest();
            $(document).ready(startAjax);
        }
        xhr.abort()
    </script>
    <script type="text/javascript">
        function savedAjax(x, y, z) {
            
            $.ajax({
                type: 'POST',
                url: '/saved_script.php',
                data: {
                    post_id: x,
                    user_id: y,
                    value: z
                },
                
            });
           xmlhttp = new XmlHttpRequest();
            $(document).ready(startAjax);
        }
        xhr.abort()
    </script>
    <!-- PRELOADER SCRIPT-->
    <script>
        $(window).on("load", function () {
            $(".loader-wrapper").fadeOut(1000);
        });
    </script>
    <script src="assets/js/app.js"></script>
</body>

</html>