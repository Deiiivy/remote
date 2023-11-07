<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matricula La Independencia</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
</head>

<body class="h-screen bg-[url('./assets/colegio.jpg')] bg-no-repeat bg-cover">
  <header  class="barra">
    <nav>
      <ul class="flex justify-center">
        <li><a class="text-white hover:text-sky-500" href="./views/login.php">INGRESAR</a></li>
        <li><a class="text-white mx-8 hover:text-sky-500" href="#" >INICIO</a></li>
        <li><a class="text-white hover:text-sky-500" href="./views/register.php">REGISTRARSE</a></li>
      </ul>
    </nav>
  </header>
  <div class="h-full bg-gradient-to-l from-blue-400/50 to-slate-900/50">
    <div class="pt-16 flex flex-col items-center">
      <img class="w-40 mb-8" src="./assets/logo.png" alt="logo">
      <h1 class="tracking-wide text-center text-4xl font-bold text-white mb-8">LA INDEPENDENCIA</h1>
      <p class="text-white text-center w-1/2 italic mb-10"">
        "Saber mas, para ser mejor"
      </p>
      <a href="./views/login.php" class="bg-sky-600 text-white px-4 py-2 hover:bg-sky-500 rounded">
        Matricular Ahora
      </a>
    </div>
  </div>
</body>
<style>
  .barra{
    letter-spacing: 12px;
    background-color: rgba(0, 0, 0, 0.349);
    padding: 20px;
  }
</style>
</html>