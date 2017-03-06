<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I244 kaugõpe: 2. praktikum</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/materialize.min.css">
    <link rel="stylesheet" href="../assets/styles/main.css">
</head>
<body>
    <div class="page-wrap container">
        <h1 class="main-heading">I244 teine praktikum</h1>
        <div class="divider"></div>
        <div class="section">
            <h3>Kirjeldus</h3>
            <p>
                Tänases praktikumis lõpetame eelmise praktikumi töö -- et tekiks ülevaade kõikidest tehnoloogiatest mis kasutame. Seejärel vaatame kõiki teemasid lähemalt -- valideerime HTML-i, CSS-i, saame lahti JavaScript-i ja PHP hoiatustest. Proovime MySQL andmebaasiga suhtluse käima saada.<br />
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
                    Veendu, et oled kasutanud <em>HTML</em>-i, <em>CSS</em>-i, <em>JavaScript</em>-i, <em>PHP</em>-d, <em>MySQL</em>-i ja <em>Git</em>-i.
                </li>
                <li>
                    Pane <em>HTML</em>-i, <em>CSS</em>-i, <em>JavaScript</em>-i ja <em>PHP</em> kõik eraldi failidesse ning vajadusel ka eraldi kataloogi.
                </li>
                <li>Veendu, et HTML kood oleks korrektne (aitab <a href="http://validator.w3.org/">HTML validaator</a>).</li>
                <li>Kontrolli CSS-i korrektsust läbi <a href="http://jigsaw.w3.org/css-validator/">CSS validaatori</a>.</li>
                <li>Lisa on PHP koodi algusesse <a href="https://duckduckgo.com/?q=php+show+all+errors+warnings&t=ffab&ia=qa">read, mis näitavad välja kõiki vigu ja hoiatusi</a>.</li>
                <li>Paranda ära ka kõik <em>JavaScript</em>-i ja <em>PHP</em> vead ja hoiatused.</li>
                <li>Hakka <em>MySQL</em> andmebaasi andmeid salvestama. Funktsionaalsus mõtle ise välja: salvesta IP-aadresse või lase kasutajatel teksti postitada vms.</li>
            </ol>

            <?php require('../lisaylesanded.tpl') ?>
        </div>
    </div>
</body>
</html>
