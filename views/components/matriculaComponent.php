<main class="px-4">
  <h1 class="text-center text-4xl font-bold mb-16">Matricula</h1>
  <div class="border border-black w-4/5 mx-auto mb-6">
    <!-- Mostrar información de la matricula -->
    <?php
    $matriculaInfo = mysqli_fetch_row( mysqli_query(connection(), "
    SELECT fecha_creacion FROM matriculas WHERE id = $matriculaId; 
    "));
    ?>
    <section class="mb-4">
      <h2 class="bg-sky-700 p-3 mb-4 text-center text-white">
        Información de la matricula
      </h2>
      <div class="px-4">
        <h3 class="mb-1 font-medium text-sky-700">Creado por: </h3>
        <address class="italic">
          <p>
            <span class="font-medium">Ususario:</span> 
            <?= $user['name'] ?>
          </p>
          <p>
            <span class="font-medium">Correo electronico:</span> 
            <?= $user['email'] ?>
          </p>
          <p>
            <span class="font-medium">Fecha de creación:</span> 
            <?= $matriculaInfo[0] ?>
          </p>
        </address>
      </div>
    </section>

    <!-- Información del estudiante -->
    <section class="mb-4">
      <?php 
      $estudianteInfo = mysqli_fetch_array(mysqli_query(connection(), "
        SELECT e.*  
        FROM matricula_estudiante e
        JOIN matriculas m ON m.id = e.matricula_id
        WHERE m.id = $matriculaId;
      "));
      ?>

      <h2 class="bg-sky-700 p-3 mb-4 text-center text-white">
        Información del estudiante
      </h2>
      <div class="px-4">
        <h3 class="mb-1 font-medium text-sky-700">Información personal: </h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">Primer Apellido:</span> 
            <?= $estudianteInfo['p_apellido'] ?>
          </p>
          <p>
            <span class="font-medium">Segundo Apellido:</span> 
            <?= $estudianteInfo['s_apellido'] ?>
          </p>
          <p>
            <span class="font-medium">Primer nombre:</span> 
            <?= $estudianteInfo['p_nombre'] ?>
          </p>
          <p>
            <span class="font-medium">Segundo nombre:</span> 
            <?= $estudianteInfo['s_nombre'] ?>
          </p>

          <p>
            <span class="font-medium">Grado a cursar:</span> 
            <?= $estudianteInfo['grado'] ?>
          </p>
          <p>
            <span class="font-medium">Subsidios:</span> 
            <?= $estudianteInfo['subsidios'] ?>
          </p>
        </div>

        <h3 class="mb-1 font-medium text-sky-700">Información de documento: </h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">Número de documento:</span> 
            <?= $estudianteInfo['documento'] ?>
          </p>
          <p>
            <span class="font-medium">Tipo de documento:</span> 
            <?= $estudianteInfo['documento_tipo'] ?>
          </p>
          <p>
            <span class="font-medium">Fecha de expedición:</span> 
            <?= $estudianteInfo['documento_fecha_expedicion'] ?>
          </p>
          <p>
            <span class="font-medium">Lugar de expedición:</span> 
            <?= $estudianteInfo['documento_lugar_expedicion'] ?>
          </p>
        </div>

        <h3 class="mb-1 font-medium text-sky-700">Información de nacimiento:</h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">Lugar de nacimiento:</span> 
            <?= $estudianteInfo['nacimiento_lugar'] ?>
          </p>
          <p>
            <span class="font-medium">Municipio de nacimiento:</span> 
            <?= $estudianteInfo['nacimiento_municipio'] ?>
          </p>
          <p>
            <span class="font-medium">Departamento de nacimiento:</span> 
            <?= $estudianteInfo['nacimiento_departamento'] ?>
          </p>
          <p>
            <span class="font-medium">País de nacimiento:</span> 
            <?= $estudianteInfo['nacimiento_pais'] ?>
          </p>
        </div>

        <?php 
        $estudianteInfo = mysqli_fetch_array(mysqli_query(connection(), "
          SELECT i.*  
          FROM matricula_estudiante_individual i
          JOIN matriculas m ON m.id = i.matricula_id
          WHERE m.id = $matriculaId;
        "));
        ?>

        <h3 class="mb-1 font-medium text-sky-700">Información individual: </h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">El estudiante vive solo:</span> 
            <?= $estudianteInfo['vive_solo'] ?>
          </p>
          <p>
            <span class="font-medium">Embarazo:</span> 
            <?= $estudianteInfo['embarazo'] ?>
          </p>
          <p>
            <span class="font-medium">Maternidad o paternidad temprana:</span> 
            <?= $estudianteInfo['m_p_aternidad'] ?>
          </p>
          <p>
            <span class="font-medium">El estudiante es victima de discriminación:</span> 
            <?= $estudianteInfo['victima_discriminacion'] ?>
          </p>
          <p>
            <span class="font-medium">El estudiante es victima de discriminación a razón de:</span> 
            <?= $estudianteInfo['victima_a'] ?>
          </p>
          <p>
            <span class="font-medium">El estudiante es victima de agresión:</span> 
            <?= $estudianteInfo['victima_agresion'] ?>
          </p>
          <p>
            <span class="font-medium">El estudiante desea estudiar:</span> 
            <?= $estudianteInfo['desea_estudiar'] ?>
          </p>
        </div>
      </div>
    </section>

    <!-- Carrera trayectoria de estudiante -->
    <?php 
    $estudianteInfo = mysqli_fetch_array(mysqli_query(connection(), "
      SELECT t.*  
      FROM matricula_carrera_escolar t
      JOIN matriculas m ON m.id = t.matricula_id
      WHERE m.id = $matriculaId;
    "));
    ?>
    <section class="mb-4">
      <h2 class="bg-sky-700 p-3 mb-4 text-center text-white">Trayectoria escolar del estudiante</h2>
      <div class="px-4">
        <h3 class="mb-1 font-medium text-sky-700">Educación preescolar:</h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">Tuvo educación preescolar:</span> 
            <?= $estudianteInfo['educaion_preescolar'] ?>
          </p>
          <p>
            <span class="font-medium">Años de educación preescolar:</span> 
            <?= $estudianteInfo['preescolar_years'] ?>
          </p>
        </div>

        <h3 class="mb-1 font-medium text-sky-700">Información de los años cursados por el estudiante</h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">Alguna vez se ha retirado del establecimiento educativo, sin terminar el año escolar:</span> 
            <?= $estudianteInfo['retiro_escolar'] ?>
          </p>
          <p>
            <span class="font-medium">Tiempo en meses, que estuvo por fuera del sistema educativo:</span> 
            <?= $estudianteInfo['tiempo_fuera']. ' mes/meses' ?>
          </p>
          <p>
            <span class="font-medium">Abandonos temporales (año electivo actual):</span> 
            <?= $estudianteInfo['abandonos'] ?>
          </p>
          <p>
            <span class="font-medium">Número de años repetidos:</span> 
            <?= $estudianteInfo['years_repetidos'] ?>
          </p>
          <p>
            <span class="font-medium">El estudiante repetite el año actual:</span> 
            <?= $estudianteInfo['repitiendo_year'] ?>
          </p>
          <p>
            <span class="font-medium">Antecedentes disciplinarios:</span> 
            <?= $estudianteInfo['antecedentes'] ?>
          </p>
          <p>
            <span class="font-medium">Asistencia promedio del año anterior:</span> 
            <?= $estudianteInfo['asistencia'] ?>
          </p>
          <p>
            <span class="font-medium">Presenta alteraciones en su desarrollo o dificultades de aprendizaje:</span> 
            <?= $estudianteInfo['alteraciones'] ?>
          <p>
            <span class="font-medium">Vinculación a una modalidad de educacion inical antes de ingresar a preescolar:</span> 
            <?= $estudianteInfo['modalidad_inicio'] ?>
          </p>
        </div>

        <h3 class="mb-1 font-medium text-sky-700">Asignaturas reprobadas</h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">primer periodo:</span> 
            <?= $estudianteInfo['asignaturas_p'] ?>
          </p>
          <p>
            <span class="font-medium">segundo periodo:</span> 
            <?= $estudianteInfo['asignaturas_s'] ?>
          </p>
        </div>
      </div>
    </section>

    <!-- Información del acudiente -->
    <?php 
    $acudienteInfo = mysqli_fetch_array(mysqli_query(connection(), "
      SELECT a.*  
      FROM matricula_acudiente a
      JOIN matriculas m ON m.id = a.matricula_id
      WHERE m.id = $matriculaId;
    "));
    ?>

    <section class="mb-4">
      <h2 class="bg-sky-700 p-3 mb-4 text-center text-white">Información del acudiente</h2>
      <div class="px-4">
        <h3 class="mb-1 font-medium text-sky-700">Información personal:</h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">Primer Apellido:</span> 
            <?= $acudienteInfo['p_apellido'] ?>
          </p>
          <p>
            <span class="font-medium">Segundo Apellido:</span> 
            <?= $acudienteInfo['s_apellido'] ?>
          </p>
          <p>
            <span class="font-medium">Primer nombre:</span> 
            <?= $acudienteInfo['p_nombre'] ?>
          </p>
          <p>
            <span class="font-medium">Segundo nombre:</span> 
            <?= $acudienteInfo['s_nombre'] ?>
          </p>
          <p>
            <span class="font-medium">Ultimo grado a cursado:</span> 
            <?= $acudienteInfo['ultimo_grado'] ?>
          </p>
          <p>
            <span class="font-medium">Parentesco:</span> 
            <?= $acudienteInfo['parentesco'] ?>
          </p>
          <p>
            <span class="font-medium">Ocupación:</span> 
            <?= $acudienteInfo['ocupacion'] ?>
          </p> 
        </div>

        <h3 class="mb-1 font-medium text-sky-700">Información de documento:</h3>
        <div class="mb-3 italic">
          <p>
            <span class="font-medium">Número de documento:</span> 
            <?= $acudienteInfo['documento'] ?>
          </p>
          <p>
            <span class="font-medium">Tipo de documento:</span> 
            <?= $acudienteInfo['documento_tipo'] ?>
          </p>
          <p>
            <span class="font-medium">Fecha de expedición:</span> 
            <?= $acudienteInfo['documento_fecha_expedicion'] ?>
          </p>
          <p>
            <span class="font-medium">Lugar de expedición:</span> 
            <?= $acudienteInfo['documento_lugar_expedicion'] ?>
          </p>
        </div>
      </div>
    </section>
  </div>
</main>