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
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
    <!-- BS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>UCMverse | Upraviť profil</title>

</head>

<body>
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
                        <div class="dropdown shadow-sm">
                            <button class="menu-list dropdown-toggle bg-transparent fw-bold c-black" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Oman Gulvi
                            </button>
                            <!-- LIST -->
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                                <!-- 1 -->
                                <li>
                                    <a href="#" onclick="btnColor('background')" class="c-black ms-3 shadow-sm">
                                        Switch mode
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
            <div class="mt-3 col-12 col-md-12 col-lg-9 me-lg-3 m-lg-auto me-xxl-auto col-xxl-8">
                <!-- Profil menu -->
                <div class="profil-bar d-flex justify-content-center">
                    <!-- 1.  -->
                    <a class="menu-bg" href="profil.php">
                        <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                            <h3 class="bi bi-person me-sm-3"></h3>
                            <h3 class="fs-5 d-none d-sm-inline">Môj profil</h3>
                        </div>
                    </a>
                    <!-- 2.  -->
                    <a class="menu-bg" href="edit_profil.php">
                        <div class="d-flex align-content-center align-items-center mb-lg-4 px-3">
                            <h3 class="bi bi-pencil-square me-sm-3 c-darkprimary"></h3>
                            <h3 class="fs-5 d-none d-sm-inline c-darkprimary">Upraviť profil</h3>
                        </div>
                    </a>
                </div>
                <!-- Zmena osobný údajov - meno , priezvisko , dátum narodenia , profilová fotka-->
                <div class="edit-container-up">
                    <div class="profil_photo w-auto">
                        <img class="img-profile rounded-circle" src="assets/img/profile_pic.png" alt="profilova_fotka">
                    </div>
                    <div class="edit-mpd">
                        <h1> Osobné údaje </h1>
                        <form action="profile_script.php" method="POST" enctype="multipart/form-data">
                            <input class="" type="text" name="name" id="name" placeholder="Meno" maxlength="15" required>
                            <input class="mb-4 " type="text" name="vorname" id="priezvisko" placeholder="Priezvisko" maxlength="25" required>
                            <input class="mb-4 " type="email" name="email" id="email" placeholder="E-mail" maxlength="35" required>
                            <input type="date" name="birthday" class="mb-4 p-2 me-2">

                            <div class="edit-photo">
                                <label for="inputTag">
                                    Select Image <br />
                                    <i class="fa fa-2x fa-camera"></i>
                                    <input id="inputTag" name="picture" type="file" value="" multiple="" />
                                    <br />
                                    <span id="imageName"></span>
                                </label>
                            </div>
                            <!-- Uplode profilovej fotky -->
                            <script>
                                let input = document.getElementById("inputTag");
                                let imageName = document.getElementById("imageName")
                                input.addEventListener("change", () => {
                                    let inputImage = document.querySelector("input[type=file]").files[0];
                                    imageName.innerText = inputImage.name;
                                })
                            </script>
                            <div class="d-flex justify-content-around col-12 mt-4">
                                <a class="menu-list" href="">
                                    <button class="fw-semibold mb-4 btn-submit px-5 shadow-sm" type="submit">Uložiť</button>
                                </a>
                                <a class="menu-list" href="home.php">
                                    <button class="fw-semibold btn-fg-pw mb-4 px-4 shadow-sm">Vrátiť zmeny</button>
                                </a>
                              </div>
                               
                            </div>
                        </form>
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