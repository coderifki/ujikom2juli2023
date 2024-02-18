<?php

/**
 * using mysqli_connect for database connection
 */
$databaseHost = 'localhost';
$databaseName = 'ujikom35_010823_mohammad_rifki_ramadhan_arsjad';
$databaseUsername = 'root';
$databasePassword = '';
$password = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
