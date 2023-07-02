<?php

/**
 * using mysqli_connect for database connection
 */
$databaseHost = 'localhost';
$databaseName = 'ujikom2juli';
$databaseUsername = 'root';
$databasePassword = '';
$password = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
