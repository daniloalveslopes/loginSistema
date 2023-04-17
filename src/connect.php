<?php

$pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

$sql = $pdo->query("SELECT * FROM usuarios");