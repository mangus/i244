<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I244 kaugõpe: 1. praktikum</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/materialize.min.css">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <script src="../assets/js/timer.js"></script>
    <script>
        var end = new Date('02/11/2017 4:30 PM');
        var timer = setInterval(function () { showRemaining(end, "countdown"); }, 1000);
    </script>
</head>
<body>
    <div class="page-wrap container">
        <h1 class="main-heading">I244 esimene praktikum</h1>
        <div class="divider"></div>
        <h2>
            <span id="countdown" class="timer"></span>
        </h2>
        <div class="divider"></div>
        <div class="section">
            <h3>Kirjeldus</h3>
            <p>
                Tänases praktikumis püüame tööle panna kõik vajaliku, et saaks kodus iseseisva tööga jätkata.<br />
                Liigume teemadega edasi väga kiiresti, kodus päevaõppe materjalide abiga saad pikemalt süveneda ja sisulisemalt õppida.<br />
                Kui jääd hätta, siis otsi abi internetist, küsi kaastudengitelt ja tülita õppejõudu.
            </p>
        </div>
        <div class="section">
            <h3>Abimaterjalid</h3>
            <p>
                Kuidas kooli serveri (enos) failidele ja MySQL andmebaasile ligipääseda?
                <a href="https://moodle.hitsa.ee/mod/page/view.php?id=430425">Tutorial</a>
            </p>
        </div>
        <div class="section">
            <h3 id="need">Ülesanded</h3>
            <ol>
                <li>
                    Loo oma arvutis lihtne <em>HTML</em> lehekülg. Lisa lehele ka mõni pilt.
                </li>
                <li>
                    Laadi leht ülesse <em>enos.itcollege.ee</em> serverisse.
                </li>
                <li>
                    Lisa lehele <em>CSS</em> fail ja muuda loodud lehekülg ilusamaks.
                </li>
                <li>
                    Võta kasutsele <em>PHP</em>. Muuda <em>HTML</em> fail <em>PHP</em> failiks ning pane see kuvama serveris kasutatavat <em>PHP</em> versiooni (näiteks läbi <a href="http://php.net/manual/en/function.phpversion.php">phpversion()</a> meetodi).
                </li>
                <li>
                    Logi sisse <em>MySQL</em> serverisse ja loo seal üks lihtne tabel.
                </li>
                <li style="text-decoration: underline">Pane kogu oma kirjutatud kood versioonihaldusesse. (Väga oluline punkt!)</li>
                <li>
                    Tee lehele midagi huvitavat kasutades <em>Javascript</em>-i. Näiteks tee kell, mis loendab, mitu sekundit on praktikumi lõpuni vms :)
                </li>
            </ol>

            <?php require('../lisaylesanded.tpl') ?>
        </div>
    </div>
</body>
</html>
