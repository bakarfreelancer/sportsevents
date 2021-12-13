<?php

$sql = "SELECT award.*, player.PName, game.GName FROM award INNER JOIN player ON award.PNic = player.PNic INNER JOIN game ON award.GId = game.GId ORDER BY award.AwardName DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$awards = $stmt->fetchAll();
