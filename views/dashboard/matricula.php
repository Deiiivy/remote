<?php 
session_start();
require_once(str_replace('/views/dashboard', '/database.php', __DIR__));

error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['user_id'] == null) {
  header('location:../../');
}

if ($_GET['matricula_id'] == null) {
  header('location:./');
}

$matriculaId = $_GET['matricula_id'];

$id = $_SESSION['user_id'];

$user = mysqli_fetch_array(mysqli_query(connection(), "
  SELECT id, name, email FROM users WHERE id = $id;
"));
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matricula</title>
  <link rel="shortcut icon" href="../../assets/logo.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header class="bg-sky-700 py-2">
    <div class="w-11/12 mx-auto flex justify-between items-center">
      <h2 class="text-2xl font-bold text-white"><a href="./"><?= $user['name'] ?></a></h2>
      <a class="text-white border border-white px-4 py-2 rounded" href="../logout.php">Cerrar sesión</a>
    </div>
  </header>
  <div class="w-11/12 mx-auto mt-16">
    <?php require_once('../components/matriculaComponent.php') ?>
  </div>
</body>
</html>