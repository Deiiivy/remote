<?php
$admin = [
  'name' => $_ENV['ADMIN_NAME']??'admin',  
  'password' => $_ENV['ADMIN_PASSWORD']??'admin'
];

function connection() {
  $host = $_ENV['HOST']??'localhost';
  $user = $_ENV['USER']??'root';
  $password = $_ENV['PASSWORD']??'';
  $database = $_ENV['DATABASE']??'proyecto';
  $port = $_ENV['PORT']??null;

  return mysqli_connect($host, $user, $password, $database, $port);
}

// CREATE ADMIN TABLE
mysqli_query(connection(), "
  CREATE TABLE IF NOT EXISTS admin(
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    password VARCHAR(500)
  );
");

// CREATE USER TABLE
mysqli_query(connection(), "
  CREATE TABLE IF NOT EXISTS user(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(120),
    password VARCHAR(500)
  );
");

// CREATE ADMIN
$createdAdmin = mysqli_fetch_array(mysqli_query(connection(), "
  SELECT * FROM admin;
"));

if ($createdAdmin == null) {
  mysqli_query(connection(), "
    INSERT INTO admin(name, password) VALUES ('$admin[name]', '$admin[password]');
  ");
}