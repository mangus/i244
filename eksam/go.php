<?php

	if (count($_POST) != 3) {
		header('Location: .');
		die();
	}

	require('missions.php');
	$m = new MyMission($_POST['name']);
	$myMission = $m->getMyMission();

        $mysqli = new mysqli("localhost",  "test", "t3st3r123", "test");
        $stmt = $mysqli->prepare("INSERT INTO mamangus_exam_results(name, version_control, demo_url, mission, created) VALUES (?, ?, ?, ?, NOW())") or die($mysqli->error);
        $stmt->bind_param('ssss', $_POST["name"], $_POST["version_control"], $_POST["demo_url"], $myMission) or die($stmt->error);
        $stmt->execute() or die($stmt->error);

	echo "Tulemused saadetud, ait&auml;h!";
