<?php
function connection() {
  $host = $_ENV['HOST']??'containers-us-west-163.railway.app';
  $user = $_ENV['USER']??'root';
  $password = $_ENV['PASSWORD']??'qqoR1S9nP2zPFnCkoE0l';
  $database = $_ENV['DATABASE']??'railway';
  $port = $_ENV['PORT']??'6289';

  return mysqli_connect($host, $user, $password, $database, $port);
}