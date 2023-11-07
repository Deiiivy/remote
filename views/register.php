<?php 
session_start();
require_once(str_replace('/views', '/database.php', __DIR__));

error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['user_id'] || $_SESSION['admin_id']) {
  if ($_SESSION['user_id']) {
    header('location:./dashboard');
  }
  else {
    header('location:./admin');
  }
}

$passNotEqual = false;

if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirm-password'];

  if ($password !== $confirmPassword) {
    $passNotEqual = true;
  }
  else {
    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
    mysqli_query(connection(), "
      INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$passwordHashed');
    ");
    mysqli_close(connection());
    header('location:./login.php');
  }
  mysqli_close(connection());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
</head>

<body>
  <header class="bg-black/30 py-6" >
    <nav>
      <ul class="flex justify-center">
        <li><a class="text-white hover:text-sky-500" href="./login.php">INGRESAR</a></li>
        <li><a class="text-white mx-8 hover:text-sky-500 " href="../">INICIO</a></li>
        <li><a class="text-white hover:text-sky-500" href="#">REGISTRARSE</a></li>
      </ul>
    </nav>
  </header>
  <div class="h-screen bg-gradient-to-l from-blue-400/50 to-slate-900/50">
    <h1 class="text-4xl font-bold text-center mb-8">Registrarse</h1>
    <div class="flex justify-center">
      <form class="border-2 border-gray-600 rounded p-4 w-1/3 flex flex-col bg-white" action="#" method="post">
        <div class="mb-4">
          <label for="name">Nombre</label>
        </div>
        <input class="border border-gray-600 rounded p-1 mb-5" type="text" name="name" required>

        <div class="mb-4">
          <label for="name">Correo Electronico</label>
        </div>
        <input class="border border-gray-600 rounded p-1 mb-5" type="email" name="email" required>

        <div class="mb-4">
          <label for="name">Contraseña</label>
        </div>
        <input class="border border-gray-600 rounded p-1 mb-5" type="password" name="password" required>

        <div class="mb-4">
          <?php if($passNotEqual): ?>
            <h6 class="text-red-500">Las contraseñas no coinciden</h6>
          <?php endif ?>
          <label for="name">Confirmar contraseña</label>
        </div>
        <input class="border border-gray-600 rounded p-1 mb-5" type="password" name="confirm-password" required>

        <div class="flex justify-center">
          <button class="bg-sky-600 px-4 py-2 rounded text-white" type="submit">
            REGISTRARSE
          </button>
        </div>
      </form>
    </div>
  </div>
  
</body>
<style>
    body{
    background-image: url("../assets/colegio.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
    }
    form label {
      color:black;
      
    }
    ul{
    letter-spacing: 12px;
  }
  </style>

</html>