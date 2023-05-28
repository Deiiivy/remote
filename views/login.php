<?php
session_start();
require_once(str_replace('/views', '/database.php', __DIR__));

error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['user_id']??false || $_SESSION['admin_id']??false) {
  if ($_SESSION['user_id']??false) {
    header('location:./dashboard');
  }
  else {
    header('location:./admin');
  }
}

$invalidData = false;

if ($_POST) {
  $name = $_POST['name'];
  $password = $_POST['password'];

  $query = mysqli_fetch_array(mysqli_query(connection(), "
    SELECT * FROM admin WHERE name = '$name' AND password = '$password';
  "));

  if ($query ?? false) {
    $_SESSION['admin_id'] = $query['admin_id'];

    header('location:./admin');
  } else {
    $query = mysqli_fetch_array(mysqli_query(connection(), "
    SELECT * FROM user WHERE name = '$name';
    "));

    if (password_verify($password, $query['password'])) {
      $_SESSION['user_id'] = $query['user_id'];

      header('location:./dashboard');
    }
  }

  $invalidData = true;
  mysqli_close(connection());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
</head>

<body>
  <header class="bg-black py-1">
    <nav>
      <ul class="flex justify-center">
        <li><a class="text-white hover:text-sky-500" href="#">INGRESAR</a></li>
        <li><a class="text-sky-500 mx-8 hover:text-white" href="../">INICIO</a></li>
        <li><a class="text-white hover:text-sky-500" href="./register.php">REGISTRARSE</a></li>
      </ul>
    </nav>
  </header>
  <div class="w-11/12 mx-auto mt-12">
    <h1 class="text-4xl font-bold text-center mb-8">Iniciar Sesión</h1>
    <div class="flex justify-center">
      <form class="border-2 border-gray-600 rounded p-4 w-1/3 flex flex-col" action="#" method="post">
        <?php if ($invalidData) : ?>
          <h6 class="text-red-500">Datos invalidos.</h6>
        <?php endif ?>
        <div class="mb-4">
          <label for="name">Nombre</label>
        </div>
        <input class="border border-gray-600 rounded p-1 mb-5" type="text" name="name" required>

        <div class="mb-4">
          <label for="name">Contraseña</label>
        </div>
        <input class="border border-gray-600 rounded p-1 mb-5" type="password" name="password" required>

        <div class="flex justify-center">
          <button class="bg-sky-600 px-4 py-2 rounded text-white" type="submit">
            INGRESAR
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>