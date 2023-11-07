<?php
session_start();
require_once(str_replace('\views\dashboard', '\database.php', __DIR__));

error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['user_id'] == null) {
  header('location:../../');
}

$id = $_SESSION['user_id'];

$user = mysqli_fetch_array(mysqli_query(connection(), "
  SELECT id, name FROM users WHERE id = $id;
"));

$matriculas = mysqli_query(connection(), "
  SELECT m.id, m.fecha_creacion, me.p_nombre, me.s_nombre  
  FROM users u
  JOIN matriculas m ON u.id = m.user_id
  JOIN matricula_estudiante me ON m.id = me.matricula_id
  WHERE u.id = $id;
");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel administrativo</title>
  <link rel="shortcut icon" href="../../assets/logo.png" type="image/x-icon">
  <script src="../../js/grades.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header class="bg-sky-700 py-2">
    <div class="w-11/12 mx-auto flex justify-between items-center">
      <h2 class="text-2xl font-bold text-white"><a href="./"><?= $user['name'] ?></a></h2>
      <a class="text-white border border-white px-4 py-2 rounded" href="../logout.php">Cerrar sesión</a>
    </div>
  </header>
  <div class="w-11/12 mx-auto mt-12 relative">
    <h1 class="text-4xl font-bold text-center">Mis matriculas</h1>
    <div class="mb-2 mt-8">
      <button id="btn-choose-grade" class="px-4 py-2 bg-sky-500 text-white rounded hover:bg-sky-600">
        Crear una nueva matricula
      </button>
    </div>
    <section class="hidden mb-2 border-2 border-gray-500 p-3" id="grades">
      <a href="./form.php" id="btn-choose" class="mr-4 px-4 py-2 bg-sky-500 text-white rounded hover:bg-sky-600">
        Grado preescolar
      </a>

      <a href="./form.php?grado=primero_once" id="btn-choose" class="px-4 py-2 bg-sky-500 text-white rounded hover:bg-sky-600">
        Grado primero a once
      </a>
    </section>
    <section class="border border-gray-500 h-96 rounded px-4 py-8 overflow-y-auto">
      <?php while ($matricula = mysqli_fetch_array($matriculas)): ?>
        <article 
          class="border-2 border-gray-500 rounded p-2 mb-3 flex justify-between items-center"
        >
          <div>
            <time 
              class="mb-4 italic text-sm"
              datetime=<?= $matricula['fecha_creacion'] ?>
            >
              <?= $matricula['fecha_creacion'] ?>
            </time>
            <h4 class="font-semibold"><?= "$matricula[p_nombre] $matricula[s_nombre]" ?></h4>
          </div>
          <a 
            href=<?= "./matricula.php?matricula_id=$matricula[id]" ?> 
            class="text-white bg-sky-500 px-4 py-2 rounded hover:bg-sky-600"
          >
            Ver matricula
          </a>
        </article>
      <?php endwhile ?>
    </section>
  </div>
</body>

</html>
<?php mysqli_close(connection()) ?>