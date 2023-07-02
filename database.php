<?php
function connection() {
  $host = $_ENV['HOST']??'localhost';
  $user = $_ENV['USER']??'root';
  $password = $_ENV['PASSWORD']??'';
  $database = $_ENV['DATABASE']??'matriculas';
  $port = $_ENV['PORT']??null;

  return mysqli_connect($host, $user, $password, $database, $port);
}