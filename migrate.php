<?php
require_once('./database.php');

$admin = [
  'name' => $_ENV['ADMIN_NAME']??'admin',  
  'password' => $_ENV['ADMIN_PASSWORD']??'admin'
];

// CREATE ADMIN TABLE
mysqli_query(connection(), "
  CREATE TABLE IF NOT EXISTS admin(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    password VARCHAR(500)
  );
");

// CREATE USER TABLE
mysqli_query(connection(), "
  CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
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

// CREATE MATRICULAS TABLE
mysqli_query(connection(), "
CREATE TABLE IF NOT EXISTS matriculas ( 
  id INT AUTO_INCREMENT PRIMARY KEY, 
  fecha_creacion TIMESTAMP, 
  user_id INT, 
  FOREIGN KEY (user_id) REFERENCES users(id) 
);
");

// CREATE MATRICULAS_ESTUDIANTE TABLE
mysqli_query(connection(), "
  CREATE TABLE IF NOT EXISTS matricula_estudiante (
    id INT AUTO_INCREMENT PRIMARY KEY,
    p_apellido VARCHAR(60),
    s_apellido VARCHAR(60),
    p_nombre VARCHAR(60),
    s_nombre VARCHAR(60),
    grado VARCHAR(15),

    documento VARCHAR(15),
    documento_tipo VARCHAR(35),
    documento_fecha_expedicion DATE,
    documento_lugar_expedicion VARCHAR(50),

    nacimiento_lugar VARCHAR(70),
    nacimiento_municipio VARCHAR(70),
    nacimiento_departamento VARCHAR(50),
    nacimiento_pais VARCHAR(20),

    matricula_id INT,
    FOREIGN KEY (matricula_id) REFERENCES matriculas(id)
  );
");

mysqli_query(connection(), "
  CREATE TABLE IF NOT EXISTS matricula_ubicacion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    direccion VARCHAR(40),
    telefono VARCHAR(13),
    correo VARCHAR(40),
    numero_telefonico VARCHAR(13),
    estrato VARCHAR(2),
    sisben VARCHAR(2),
    eps VARCHAR(2),
    tipo_sangre VARCHAR(4),
    victima VARCHAR(2),

    matricula_id INT,
    FOREIGN KEY (matricula_id) REFERENCES matriculas(id)
  );
");

echo 'migrate successful';