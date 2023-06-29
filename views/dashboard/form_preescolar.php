<?php
session_start();
require_once(str_replace('/views/dashboard', '/database.php', __DIR__));

error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['user_id'] == null) {
  header('location:../../');
}

$id = $_SESSION['user_id'];

$user = mysqli_fetch_array(mysqli_query(connection(), "
  SELECT id, name FROM users WHERE id = $id;
"));

require_once('./controllers/controllerFormPreescolar.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario preescolar</title>
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

  <main class="w-11/12 mx-auto flex flex-col items-center my-8">
    <img src="../../assets/logo.png" alt="ie la independencia" srcset="">
    <h1 class="mb-5 font-bold italic text-xl">INSTITUCIÓN EDUCATIVA LA INDEPENDENCIA</h1>

    <form action="#" method="post" class="border border-black">
      <!-- STUDENT INFORMATION -->
      <?php
      $values = ['Preescolar']; 
      require_once('../inputs/studentInformation.php');
      ?>

      <!-- IDENTITY DOCUMENT -->
      <?php //require_once('../inputs/identityDocument.php') ?>

      <!-- BORN INFORMATION -->
      <?php //require_once('../inputs/bornInformation.php') ?>

      <!-- UBICATION INFORMATION -->
      <?php //require_once('../inputs/ubicationInformation.php') ?>

      <!-- ATTENDANT INFORMATION -->
      <?php //require_once('../inputs/attendantInformation.php') ?>

      <!-- MOTHER INFORMATION -->
      <?php
      $message = 'Informacion de la mamá';
      //require('../inputs/ancestryInformation.php');
      ?>

      <!-- FATHER INFORMATION  -->
      <?php
      $message = 'Informacion del papá';
      //require('../inputs/ancestryInformation.php');
      ?>

      <!-- INDIVIDUAL INFORMATION STUDENT -->
      <?php //require_once('../inputs/individualInformationStudent.php') ?>

      <!-- HOME FEATURES -->
      <?php //require_once('../inputs/homeFeatures.php') ?>
      
      <!-- SCHOOL CAREER -->
      <?php //require_once('../inputs/schoolCareer.php') ?>

      <!-- STRATEGY STUDENT -->
      <?php //require_once('../inputs/strategyStudent.php') ?> 

      <div class="px-5 my-4">
        <button 
          type="submit" 
          class="text-white bg-sky-700 py-2 px-4 rounded hover:bg-sky-600"
        >
          Guardar matricula
        </button>
      </div>
    </form>
  </main>
</body>

</html>