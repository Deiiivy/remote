<?php
session_start();
require_once(str_replace('/views/admin', '/database.php', __DIR__));

error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['admin_id'] == null) {
  header('location:../../');
}

$matriculas = mysqli_query(connection(), "
  SELECT m.id, m.fecha_creacion, me.p_nombre, me.s_nombre, u.id as userId
  FROM users u
  JOIN matriculas m ON u.id = m.user_id
  JOIN matricula_estudiante me ON m.id = me.matricula_id
  ORDER BY m.id DESC;
");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matriculas</title>
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
            <a class="text-white hover:text-sky-500" href="./">
              Usuarios
            </a>
          </li>
          <li class="mx-4">
            <a class="text-white hover:text-sky-500 underline" href="#">
              Matriculas
            </a>
          </li>
        </ul>
      </nav>
      <a class="text-white border border-white px-4 py-2 rounded" href="../logout.php">Cerrar sesión</a>
    </div>
  </header>
  <div class="w-11/12 mx-auto">
    <h1 class="text-center text-4xl font-bold my-16">Matriculas</h1>

    <main>
      <section class="border border-gray-500 h-96 rounded px-4 py-8 overflow-y-auto">
        <?php while ($matricula = mysqli_fetch_array($matriculas)) : ?>
          <article class="border-2 border-gray-500 rounded p-2 mb-3 flex justify-between items-center">
            <div>
              <time class="mb-4 italic text-sm" datetime=<?= $matricula['fecha_creacion'] ?>>
                <?= $matricula['fecha_creacion'] ?>
              </time>
              <h4 class="font-semibold"><?= "$matricula[p_nombre] $matricula[s_nombre]" ?></h4>
            </div>
            <a 
              href=<?= "./matricula.php?matricula_id=$matricula[id]&user=$matricula[userId]" ?> 
              class="text-white bg-sky-500 px-4 py-2 rounded hover:bg-sky-600"
            >
              Ver matricula
            </a>
          </article>
        <?php endwhile ?>
      </section>
    </main>
  </div>
</body>

</html>