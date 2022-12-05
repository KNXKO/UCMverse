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
    <!-- TITLE -->
    <title>UCMverse | Registrujte sa</title>
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
    <div id="wrapper">
        <div class="container-fluid mt-5">
            <div class="container flex-column d-flex align-items-center align-content-center"">
             <!-- LOGO -->
                <img src=" assets/img/logo.png" style="width:5rem" alt="UCMverse logo" class="mx-auto d-block m-2">
                <!-- NADPIS -->
                <h1 class="fw-semibold mb-4 shadow-sm">Vytvorte si účet</h1>
                <!-- FORM -->
                <form action="includes/signup.inc.php" method="post">
                    <!-- MENO -->
                    <input class="mb-4 shadow-sm" type="text" name="name" id="name" placeholder="Meno" maxlength="50" minlength="3" required>
                    <!-- PRIEZVISKO -->
                    <input class="mb-4 shadow-sm" type="text" name="lname" id="lname" placeholder="Priezvisko" maxlength="50" minlength="3" required>
                    <br>
                    <!-- EMAIL -->
                    <input class="mb-4 shadow-sm" type="email" name="email" id="email" placeholder="E-mail" maxlength="35" required>
                    <p class="fw-semibold c-darkgrey shadow-sm">Dátum narodenia</p>
                    <!-- DATUM NARODENIA -->
                    <input type="date" name="bdate" id="bdate" class="mb-4 p-2 me-2 shadow-sm" min='1920-01-01' max='2005-01-01' required>
                    <p class="fw-semibold c-darkgrey shadow-sm">Škola</p>
                    <!-- SELECT VYBER FAKULTY -->
                    <select class="combo-a mb-2 p-2 shadow-sm" data-nextcombo=".combo-b">
                        <option value="" disabled selected hidden>Fakulta</option>
                        <option value="1" data-id="1" data-option="-1">Fakulta masmediálnej komunikácie</option>
                        <option value="2" data-id="2" data-option="-1">Fakulta prírodných vied</option>
                        <option value="3" data-id="3" data-option="-1">Filozofická fakulta</option>
                        <option value="4" data-id="4" data-option="-1">Fakulta sociálnych vied</option>
                        <option value="4" data-id="5" data-option="-1">Fakulta zdravotníckych vied</option>
                        <option value="5" data-id="6" data-option="-1">Inštitút manažmentu</option>
                    </select>
                    <br>
                    <!-- SELECT VYBER STUPNA -->
                    <select class="combo-b mb-2 p-2 shadow-sm" data-nextcombo=".combo-c" disabled>
                        <option value="" disabled selected hidden>Stupeň</option>
                        <option value="1" data-id="1" data-option="1">1. Bc</option>
                        <option value="2" data-id="2" data-option="1">2. Mgr</option>
                        <option value="3" data-id="3" data-option="1">3. PhDr</option>
                        <!--  -->
                        <option value="4" data-id="4" data-option="2">1. Bc</option>
                        <option value="5" data-id="5" data-option="2">2. Mgr</option>
                        <option value="6" data-id="6" data-option="2">3. PhDr</option>
                        <!--  -->
                        <option value="7" data-id="7" data-option="3">1. Bc</option>
                        <option value="8" data-id="8" data-option="3">2. Mgr</option>
                        <option value="9" data-id="9" data-option="3">3. PhDr</option>
                        <!--  -->
                        <option value="10" data-id="10" data-option="4">1. Bc</option>
                        <option value="11" data-id="11" data-option="4">2. Mgr</option>
                        <option value="12" data-id="12" data-option="4">3. PhDr</option>
                        <!--  -->
                        <option value="13" data-id="13" data-option="5">1. Bc</option>
                        <option value="14" data-id="14" data-option="5">2. Mgr</option>
                        <option value="15" data-id="15" data-option="5">3. PhDr</option>
                        <!--  -->
                        <option value="16" data-id="16" data-option="6">1. Bc</option>
                    </select>
                    <br>
                    <!-- SELECT VYBER ODBORU -->
                    <select class="combo-c mb-2 p-2 col-lg-7 col-12 col-md-7 col-xl-8 shadow-sm" disabled>
                        <option value="" disabled selected hidden>Odbor</option>
                        <!-- FMK -->
                        <option value="17" data-id="17" data-option="1">Masmediálna komunikácia</option>
                        <option value="18" data-id="18" data-option="2">Masmediálna komunikácia</option>
                        <option value="19" data-id="19" data-option="3">Masmediálna komunikácia</option>
                        <option value="20" data-id="20" data-option="1">Marketingová komunikácia</option>
                        <option value="21" data-id="21" data-option="2">Marketingová komunikácia</option>
                        <option value="22" data-id="22" data-option="3">Marketingová komunikácia</option>
                        <option value="23" data-id="23" data-option="1">Teória digitálnych hier (TEDI)</option>
                        <option value="24" data-id="24" data-option="2">Teória digitálnych hier (TEDI)</option>
                        <option value="25" data-id="25" data-option="3">Teória digitálnych hier (TEDI)</option>
                        <option value="26" data-id="26" data-option="1">Aplikované mediálne štúdiá (AMES)/ mediálne a informačné kompetencie (MIK)
                        </option>
                        <option value="27" data-id="27" data-option="2">Aplikované mediálne štúdiá (AMES)/ mediálne a informačné kompetencie (MIK)
                        </option>
                        <option value="28" data-id="28" data-option="3">Aplikované mediálne štúdiá (AMES)/ mediálne a informačné kompetencie (MIK)
                        </option>
                        <option value="29" data-id="29" data-option="1">Vzťahy s médiami (VZME)</option>
                        <!-- FPV -->
                        <option value="30" data-id="30" data-option="4">Aplikovaná informatika</option>
                        <option value="31" data-id="31" data-option="4">Chémia</option>
                        <option value="32" data-id="32" data-option="4">Biotechnológie</option>
                        <option value="33" data-id="33" data-option="4">Aplikovaná biológia</option>
                        <option value="34" data-id="34" data-option="4">Aplikovaná analytická chémia</option>
                        <option value="35" data-id="35" data-option="4">Ochrana a obnova životného prostredia</option>
                        <!--  -->
                        <option value="36" data-id="36" data-option="5">Aplikovaná informatika</option>
                        <option value="37" data-id="37" data-option="5">Aplikovaná biológia</option>
                        <option value="38" data-id="38" data-option="5">Aplikovaná chémia</option>
                        <option value="39" data-id="39" data-option="5">Biotechnológie</option>
                        <!--  -->
                        <option value="40" data-id="40" data-option="6">Aplikovaná analytická chémia</option>
                        <option value="41" data-id="41" data-option="6">Aplikovaná biológia</option>
                        <option value="42" data-id="42" data-option="6">Biotechnológie</option>
                        <!-- FF -->
                        <option value="43" data-id="43" data-option="7">Anglický jazyk a kultúra v odbornej komunikácii</option>
                        <option value="44" data-id="44" data-option="7">Etnológia a mimoeurópske štúdiá</option>
                        <option value="45" data-id="45" data-option="7">Filozofia a aplikovaná filozofia</option>
                        <option value="46" data-id="46" data-option="7">Nemecký jazyk a kultúra v odbornej komunikácii</option>
                        <option value="47" data-id="47" data-option="7">História a aplikovaná história v kyberpriestore</option>
                        <option value="48" data-id="48" data-option="7">Anglický jazyk a literatúra - učiteľský základ</option>
                        <option value="49" data-id="49" data-option="7">Učiteľstvo francúzskeho jazyka a
                            literatúry (v kombinácii) - učiteľský základ</option>
                        <option value="50" data-id="50" data-option="7">Učiteľstvo histórie (v kombinácii) - učiteľský základ</option>
                        <option value="51" data-id="51" data-option="7">Učiteľstvo nemeckého jazyka a
                            literatúry (v kombinácii) - učiteľský základ</option>
                        <option value="52" data-id="52" data-option="7">Učiteľstvo ruského jazyka a
                            literatúry (v kombinácii) - učiteľský základ</option>
                        <option value="53" data-id="53" data-option="7">Učiteľstvo slovenského jazyka a
                            literatúry (v kombinácii) - učiteľský základ</option>
                        <option value="54" data-id="54" data-option="7">Učiteľstvo výchovy k občianstvu
                            (v kombinácii) - učiteľský základ</option>
                        <option value="55" data-id="55" data-option="7">Psychológia</option>
                        <option value="56" data-id="56" data-option="7">Ruský jazyk a kultúra v odbornej komunikácii</option>
                        <option value="57" data-id="57" data-option="8">Anglický jazyk a kultúra v odbornej komunikácii</option>
                        <option value="58" data-id="58" data-option="8">Etnológia a mimoeurópske štúdiá</option>
                        <option value="59" data-id="59" data-option="8">Filozofia a aplikovaná filozofia</option>
                        <option value="60" data-id="60" data-option="8">Nemecký jazyk a kultúra v odbornej komunikácii</option>
                        <option value="61" data-id="61" data-option="8">História a aplikovaná história v kyberpriestore</option>
                        <option value="62" data-id="62" data-option="8">Anglický jazyk a literatúra - učiteľský základ</option>
                        <option value="63" data-id="63" data-option="8">Učiteľstvo francúzskeho jazyka a
                            literatúry (v kombinácii) - učiteľský základ</option>
                        <option value="64" data-id="64" data-option="8">Učiteľstvo histórie (v kombinácii) učiteľský základ</option>
                        <option value="65" data-id="65" data-option="8">Učiteľstvo nemeckého jazyka a literatúry
                            (v kombinácii) učiteľský základ</option>
                        <option value="66" data-id="66" data-option="8">Učiteľstvo ruského jazyka a literatúry
                            (v kombinácii) učiteľský základ</option>
                        <option value="67" data-id="67" data-option="8">Učiteľstvo ruského jazyka a
                            literatúry (v kombinácii) - učiteľský základ</option>
                        <option value="68" data-id="68" data-option="8">Učiteľstvo slovenského jazyka a
                            literatúry (v kombinácii) - učiteľský základ</option>
                        <option value="69" data-id="69" data-option="8">Učiteľstvo výchovy k občianstvu
                            (v kombinácii) - učiteľský základ</option>
                        <option value="70" data-id="70" data-option="8">Psychológia</option>
                        <option value="71" data-id="71" data-option="8">Ruský jazyk a kultúra v odbornej komunikácii</option>
                        <option value="72" data-id="72" data-option="9">Etnológia a mimoeurópske štúdiá</option>
                        <option value="73" data-id="73" data-option="9">Systematická filozofia</option>
                        <option value="74" data-id="74" data-option="9">Unemecký jazyk a kultúra v odbornej komunikácii</option>
                        <option value="75" data-id="75" data-option="9">Pomocné vedy historické</option>
                        <option value="76" data-id="76" data-option="9">Všeobecná a experimentálna psychológia</option>
                        <option value="77" data-id="77" data-option="9">Ruský jazyk a kultúra v odbornej komunikácii</option>
                        <!-- FSV  -->
                        <option value="78" data-id="78" data-option="10">Verejná správa</option>
                        <option value="79" data-id="79" data-option="10">Európske štúdiá a politiky</option>
                        <option value="80" data-id="80" data-option="10">Sociálne služby a poradenstvo</option>
                        <option value="81" data-id="81" data-option="11">Verejná správa</option>
                        <option value="82" data-id="82" data-option="11">Európske štúdiá a politiky</option>
                        <option value="83" data-id="83" data-option="11">Sociálne služby a poradenstvo</option>
                        <option value="84" data-id="84" data-option="12">Verejná správa a verejná politika</option>
                        <option value="85" data-id="85" data-option="12">Európske štúdiá a politiky</option>
                        <option value="86" data-id="86" data-option="12">Sociálna politika</option>
                        <!-- FSV  -->
                        <option value="87" data-id="87" data-option="13">Fyzioterapia</option>
                        <option value="88" data-id="88" data-option="13">Rádiologická technika</option>
                        <option value="89" data-id="89" data-option="14">Fyzioterapia</option>
                        <option value="90" data-id="90" data-option="15">Fyzioterapia</option>
                        <!-- IM  -->
                        <option value="91" data-id="91" data-option="16">Manažment v turizme a hotelierstve</option>
                    </select>
                    <p class="fw-semibold c-darkgrey shadow-sm"></p>
                    <!-- HESLO -->
                    <input class="mb-4 shadow-sm" type="password" name="password" id="password" placeholder="Heslo" required maxlength="40" minlength="8">
                    <!-- POTVRDIT HESLO -->
                    <input class="mb-4 ms-sm-2 shadow-sm" type="password" name="passwordrpt" id="passwordrpt" placeholder="Potvrdenie hesla" required maxlength="40" minlength="8">
                    <br>
                    <!-- BUTTON 1. -->
                    <div class="d-flex justify-content-center">
                         <a class="menu-list" href="#">
                        <button class="fw-semibold btn-submit px-4 shadow-sm mb-3" type="submit" name="submit">Zaregistrovať sa</button>
                    </a>
                    
                    </div>
                   
                </form>
                <a class="menu-list" href="index.php">
                        <button class="fw-semibold btn-fg-pw mb-4 px-4 shadow-sm">Mám už účet</button>
                    </a>
                
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo '<p class="fw-semibold c-primary shadow-sm">Vyplň všetky polia!</p>';
                    } else if ($_GET["error"] == "invalidemail") {
                        echo '<p class="fw-semibold c-primary shadow-sm">Vyber správny email!</p>';
                    } else if ($_GET["error"] == "passwordsdontmatch") {
                        echo '<p class="fw-semibold c-primary shadow-sm">Hesla sa nezhodujú!</p>';
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo '<p class="fw-semibold c-primary shadow-sm">Niečo sa pokazilo!</p>';
                    } else if ($_GET["error"] == "none") {
                        echo '<p class="fw-semibold c-primary shadow-sm">Bol si prihlásený!</p>';
                    } else if ($_GET["error"] == "userexists") {
                        echo '<p class="fw-semibold c-primary shadow-sm">Email je už zabraný!</p>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- PRELOADER SCRIPT-->
    <script>
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut(1000);
        });
    </script>
    <script src="assets/js/app.js"></script>
</body>

</html>