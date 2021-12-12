<?php

$sql = "SELECT * FROM player";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$players = $stmt->fetchAll();
