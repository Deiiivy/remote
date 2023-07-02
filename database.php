<?php
function connection() {
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'matriculas';
  $port = null;

  return mysqli_connect($host, $user, $password, $database, $port);
}