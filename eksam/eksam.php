<?php

if (!isset($_POST['name'])) {
    header('Location: .');
    die();
}

require('missions.php');
$m = new MyMission($_POST['name']);

?><!DOCTYPE html>
<html lang="et"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>I244 kaugõpe: eksam</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="centerExam">

  <h1 class="centerTitle">Võrgurakendused I eksam</h1>
  <p>Kõikide vahendite (välja arvatud sõbrad ja tuttavad) kasutamine on lubatud.</p>
  <p>Ülesande juures on kõige olulisem funktsionaalsus tööle saada. Kui jääb aega, siis võid ka ilusamaks teha, kuid see ei ole nii oluline.</p>

  <h2>Sinu ülesanne</h2>
  <p><?php echo $m->getMyMission(); ?></p>

  <h2>Tulemuse esitamine</h2>
  <p>Tulemuse kood peab olema versioonihalduses ning töötav lahendus kuskil avalikult ligipääsetavas serveris (näiteks enoses).</p>
  <form method="POST" action="go.php">
  <table>
    <tr>
      <td>Sinu nimi:</td>
      <td><input type="text" name="name" value="<?=$_POST['name']?>" required readonly /></td>
    </tr>
    <tr>
      <td>Viide töö versioonihaldusele:</td>
      <td><input type="url" name="version_control" size="50" required /></td>
    </tr>
    <tr>
      <td>Link töötavale rakendusele:</td>
      <td><input type="url" name="demo_url" size="50" required /></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="Esitan eksami tulemused!" /></td>
    </tr>
  </table>
  </form>

</div>

</body></html>
