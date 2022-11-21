<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="nofollow">
    <meta name="Author" content="UCMverse">
    <meta name="Description" content="UCMverse">
    <meta name="Keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<body>
    <div id="wrapper">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="container-fluid d-flex justify-content-center flex-column col-md-10 col-lg-7 col-xl-6 col-xxl-4">
                <img src="assets/img/logo.png" style="width:5rem" alt="UCMverse logo" class="mx-auto d-block m-3">
                <h1 class="fw-semibold mb-4 shadow-sm">Vytvorte si účet</h1>
                <form action="includes/signup.inc.php" method="post">
                    <input class="mb-4 shadow-sm" type="text"  name="name" id="name" placeholder="Meno+Priezvisko" maxlength="50" required>
                    <br>
                    <input class="mb-4 shadow-sm" type="email" name="email" id="email" placeholder="E-mail" maxlength="35" required>
                   
                    
                   
                    <!-- child/last -->
                    
                    <p class="fw-semibold c-darkgrey shadow-sm"></p>
                    <input class="mb-4 shadow-sm" type="password" name="password" id="password" placeholder="Heslo" required maxlength="40">
                    <input class="mb-4 ms-sm-2 shadow-sm" type="password" name="passwordrpt" id="passwordrpt" placeholder="Potvrdenie hesla" required
                        maxlength="40">
                    <br>
                    <a class="menu-list">
                        <button class="fw-semibold btn-submit px-4 shadow-sm" type="submit" name="submit">Zaregistrovať sa</button>
                    </a>
                </form>

                <?php
                    if (isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput") {
                            echo "<p> Vypln vsetky polia! </p>";
                        }
                        else if ($_GET["error"] == "invalidemail"){
                            echo "<p> Vyber spravny email! </p>";
                        }
                        else if ($_GET["error"] == "passwordsdontmatch"){
                            echo "<p> Hesla sa nezhoduju! </p>";
                        }
                        else if ($_GET["error"] == "stmtfailed"){
                            echo "<p> Nieco sa pokazilo! </p>";
                        }
                        else if ($_GET["error"] == "none"){
                            echo "<p> Bol si prihlaseny! </p>";
                        }
                    }
                ?>


            </div>
        </div>
    </div>
    <script src="assets/js/app.js"></script>
</body>

</html>