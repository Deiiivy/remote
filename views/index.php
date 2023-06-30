<?php
session_start();

if ($_SESSION['user_id'] !== null || $_SESSION['admin_id'] !== null) {
  if ($_SESSION['user_id']) {
    header('location:./dashboard');
  }
  else {
    header('location:./admin');
  }
}
else {
  header('location:../');
}