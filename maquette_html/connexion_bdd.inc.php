<?php
$DSN = 'mysql:host=localhost;dbname=parisonline';
$user = 'root';
$mdp = '';
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];
$parisonline = new PDO($DSN,$user,$mdp,$options);


