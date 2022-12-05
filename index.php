<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include_once 'header.php'
?>


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
    <div id="wrapper">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="container-fluid mt-5 col-md-8 col-12  col-xxl-8 ">
                <div class="container col-12 col-md-10 col-lg-8 col-xl-6 d-flex flex-column align-content-center align-items-center">
                    <img src="assets/img/logo.png" alt="UCMverse logo" class="img-fluid mb-3" style="width:5rem">
                    <div class="col-8 col-xxl-7">
                        <h1 class="fw-semibold mb-4 shadow-sm">Prihláste sa na <br> <span class="c-primary shadow-sm">UCMverse</span></h1>
                    </div>
                    <form class="d-flex flex-column justify-content-center align-items-center col-10 col-lg-11 col-xxl-9" action="includes/login.inc.php" method="POST">
                        <input class="mb-4 w-75 shadow-sm" type="email" name="email" id="email" placeholder="E-mail" required maxlength="35">
                        <input class="mb-4 w-75 shadow-sm" type="password" name="password" id="password" placeholder="Heslo" required maxlength="40">
                        <a class="menu-list" href="">
                            <button class="fw-semibold mb-4 btn-submit px-5 shadow-sm" type="submit" name="submit">Prihlásiť sa</button>
                        </a>
                    </form>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p> Vypln vsetky polia! </p>";
                        } else if ($_GET["error"] == "wronglogin") {
                            echo "<p> Nespravne prihlasovacie udaje! </p>";
                        }
                    }
                    ?>
                    <p class="color-grey">Nemáte účet?
                        <a class="c-primary" href="signup.php"> Zaregistrujte sa</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut(1000);
        });
    </script>
    <script src="assets/js/app.js"></script>
</body>

</html>