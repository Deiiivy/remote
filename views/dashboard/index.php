<?php 
session_start();
require_once(str_replace('/views/dashboard', '/database.php', __DIR__));

if ($_SESSION['user_id'] == null) {
  header('location:../../');
}

$id = $_SESSION['user_id'];

$user = mysqli_fetch_array(mysqli_query(connection(), "
  SELECT user_id, name FROM user WHERE user_id = $id;
"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel administrativo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="../../assets/logo.png" type="image/x-icon">
</head>

<body>
  <header class="bg-sky-700 py-2">
    <div class="w-11/12 mx-auto flex justify-between items-center">
      <h2 class="text-2xl font-bold text-white"><?= $user['name'] ?></h2>
      <a class="text-white border border-white px-4 py-2 rounded" href="../logout.php">Cerrar sesión</a>
    </div>
  </header>
  <div class="w-11/12 mx-auto">
    <h1 class="text-4xl font-bold text-center">Mis matriculas</h1>
  </div>
</body>

</html>