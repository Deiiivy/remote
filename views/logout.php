<?php
session_start();

$_SESSION['id_admin'] = null;
$_SESSION['id_user'] = null;

session_destroy();
header('location:../');