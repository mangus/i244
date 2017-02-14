<!DOCTYPE html>
<html lang="et">
<head>
    <meta http-equiv="content-type" name="viewport" content="text/html; charset=UTF-8; width=device-width, initial-scale=1.0">
    <title>I244 kaugõpe: 5. praktikum</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/materialize.min.css">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <script src="../assets/js/timer.js"></script>
    <script>
        var end = new Date('04/08/2017 4:30 PM');
        var timer = setInterval(function () { showRemaining(end, "countdown"); }, 1000);
    </script>
</head>
<body>
    <div class="page-wrap container">
        <h1 class="main-heading">I244 viies praktikum</h1>
        <div class="divider"></div>
        <h2><span id="countdown" class="timer"></span></h2>
        <div class="divider"></div>
        <div class="section">
            <h3>Kirjeldus</h3>
            <p>
                Tänases praktikumis proovime leida tehtud veebirakendustes turvaauke (ja teenida selle käigus palju lisapunkte!).
            </p>
        </div>
        <div class="section">
            <h2>Ülesanded</h2>
            <ol>
                <li>Postita oma töötava rakenduse (ükskõik kas kodutöö, praktikumide tulemus vm) URL ja viide versioonihaldusele <a href="nimekiri.php">siin</a> (funktsionaalselt töötava rakenduse eest +2 punkti)</li>
                <li>
                    <ul>
                        <li>Vaata teiste tehtud rakendusi ja püüa leida seal turvaauke (XSS, SQL-i süstimine, XSRF, include probleemid jne).</li>
                        <li>Kui leiad mõne turvaaugu, siis tule klassi ette ja esitle seda ka teistele (+1 punkt).</li>
                        <li>Kui oskad, siis selgita ka, mida halba selle nõrkusega teha saab ja kuidas selliseid turvaauke vältida (+1 punkt).</li>
                    </ul>
            </ol>
        </div>
    </div>
</body>
</html>
