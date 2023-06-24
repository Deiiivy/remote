<?php
require_once('./database.php');

$admin = [
  'name' => $_ENV['ADMIN_NAME']??'admin',  
  'password' => $_ENV['ADMIN_PASSWORD']??'admin'
];


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

echo 'migrate successful';