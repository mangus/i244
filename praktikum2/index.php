<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I244 kaugõpe: 2. praktikum</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/materialize.min.css">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <script src="../assets/js/timer.js"></script>
    <script>
        var end = new Date('03/04/2017 4:30 PM');
        var timer = setInterval(function () { showRemaining(end, "countdown"); }, 1000);
    </script>
</head>
<body>
    <div class="page-wrap container">
        <h1 class="main-heading">I244 teine praktikum</h1>
        <div class="divider"></div>
        <h2>
            <span id="countdown" class="timer"></span>
        </h2>
        <div class="divider"></div>
        <div class="section">
            <h3>Kirjeldus</h3>
            <p>
                Tänases praktikumis lõpetame eelmise praktikumi töö (et tekiks ülevaade kõikidest tehnoloogiastest mis kasutame) ning proovime lähemalt tuttavaks saada <em>CSS</em>-i ja <em>Javascript</em>-iga.
                Teeme paarisprogrammeerimist. See tähendab, et ühe arvuti taga on 2 tudengit ja kordamööda (~15 minutiliste vahedega) kirjutate koodi.
            </p>
        </div>
        <div class="section">
            <h2>Ülesanded</h2>
            <ol>
                <li>
                    Tee lõpuni kõik <a href="../praktikum1/#need">eelmise praktikumi ülesanded</a>.
                </li>
                <li>
                    Veendu, et oled kasutanud <em>HTML</em>-i, <em>CSS</em>-i, <em>Javascript</em>-i, <em>PHP</em>-d, <em>MySQL</em>-i ja <em>Git</em>-i.
                </li>
                <li>
                    Pane <em>HTML</em>-i, <em>CSS</em>-i, <em>Javascript</em>-i ja <em>PHP</em> kõik eraldi failidesse ning vajadusel ka eraldi kataloogi.
                </li>
                <li>Saame CSS-ga rohkem tutavamaks: teeme oma lehele CSS-ga animatsiooni!</li>
                <li>
                    Mõtle välja ja realiseeri <em>Javascript</em>-iga lihtne mäng <small>(näiteks ussimäng, mingi klikkimise mäng või midagi sellist)</small>.
                    <br />Alusta millestki väga lihtsast, võimalusel seo <em>CSS</em> animatsioonid <em>Javascript</em>-i mänguga.
                </li>
            </ol>

            <?php require('../lisaylesanded.tpl') ?>
        </div>
    </div>
</body>
</html>
