<?php 
session_start();
require_once(str_replace('\views\admin', '\database.php', __DIR__));

error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['admin_id'] == null) {
  header('location:../../');
}

$users = mysqli_query(connection(), "
  SELECT id, name FROM users;
");
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
      <h2 class="text-2xl font-bold text-white">ADMIN</h2>
      <nav>
        <ul class="flex">
          <li class="mx-4">
            <a class="text-white underline hover:text-sky-500" href="#">
              Usuarios
            </a>
          </li>
          <li class="mx-4">
            <a class="text-white hover:text-sky-500" href="./matriculas.php">
              Matriculas
            </a>
          </li>
        </ul>
      </nav>
      <a class="text-white border border-white px-4 py-2 rounded" href="../logout.php">Cerrar sesión</a>
    </div>
  </header>
  <div class="w-11/12 mx-auto mt-16 mb-5">
    <h1 class="text-4xl font-bold text-center mb-8">Panel de administración</h1>
    <div class="w-1/3 mx-auto">
      <h2 class="text-2xl font-bold mb-4 text-center">Lista de usuarios:</h2>
      <section class="border border-gray-500 h-96 rounded px-4 py-8 overflow-y-auto">
        <?php while($user = mysqli_fetch_array($users)): ?>
          <article class="rounded bg-sky-500 mb-4">
            <h3>
              <a href=<?= "./usuario_matriculas.php?user=$user[id]&name=$user[name]"  ?>
                class="text-white block p-2"
              >
                <?= $user['name'] ?>
              </a>
            </h3>
          </article>
        <?php 
        endwhile;
        mysqli_close(connection());
        ?>
      </section>
    </div>
  </div>
</body>

</html>