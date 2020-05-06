<?php
session_start();

$_SESSION[ 'validUser' ] = false;

session_unset();
session_destroy();

header( "location:login.php" );
?>
