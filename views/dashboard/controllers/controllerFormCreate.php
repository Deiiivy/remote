<?php 
if ($_POST) {
  // crear matricula
  mysqli_query(connection(), "
    INSERT INTO matriculas(fecha_creacion, user_id) VALUES 
    (CURRENT_TIMESTAMP(), $user[id]);
  ");

  // obtener id de la matricula
  $query = mysqli_query(connection(), 
  "
    SELECT m.id 
    FROM users u 
    JOIN 
    matriculas m ON u.id = user_id 
    WHERE u.id = $id 
    ORDER BY m.id DESC LIMIT 1;
  ");

  $matriculaId = mysqli_fetch_array($query)['id'];

  /* foreach ($_POST as $key => $value) {
    echo "Clave: $key, Valor: $value <br/>";
  } */

  // echo "Matricula creada<br/>";

  // crear iformacion del estudiante
  mysqli_query(connection(), "
  INSERT INTO matricula_estudiante
  (
    p_apellido, 
    s_apellido, 
    p_nombre, 
    s_nombre, 
    grado,
    subsidios,

    documento,
    documento_tipo,
    documento_fecha_expedicion,
    documento_lugar_expedicion,
    
    nacimiento_lugar,
    nacimiento_municipio,
    nacimiento_departamento,
    nacimiento_pais,

    matricula_id
  )
  VALUES
  (
    '$_POST[estudiante_p_apellido]',
    '$_POST[estudiante_s_apellido]',
    '$_POST[estudiante_p_nombre]',
    '$_POST[estudiante_s_nombre]',
    '$_POST[estudiante_grado]',
    '$_POST[subsidios]',

    '$_POST[documento]',
    '$_POST[documento_tipo]',
    '$_POST[documento_fecha_expedicion]',
    '$_POST[documento_lugar_expedicion]',

    '$_POST[nacimiento_lugar]',
    '$_POST[nacimiento_municipio]',
    '$_POST[nacimiento_departamento]',
    '$_POST[nacimiento_pais]',

    $matriculaId
  )
  ");

  // echo "informacion del estudiante<br/>";

  // crear información de ubicación
  mysqli_query(connection(), "
    INSERT INTO matricula_ubicacion
    (
      direccion,
      telefono,
      correo,
      numero_telefonico,
      estrato,
      sisben,
      eps,
      tipo_sangre,
      victima,
      matricula_id
    )
    VALUES 
    (
      '$_POST[direccion]',
      '$_POST[telefono]',
      '$_POST[correo]',
      '$_POST[numero_telefonico]',
      '$_POST[estrato]',
      '$_POST[sisben]',
      '$_POST[eps]',
      '$_POST[tipo_sangre]',
      '$_POST[victima]',
      $matriculaId
    )
  ");

  // echo "informacion del ubicación<br/>";

  // crear información del acudiente
  mysqli_query(connection(),"
    INSERT INTO matricula_acudiente 
    (
      p_apellido,
      s_apellido,
      p_nombre,
      s_nombre,
      ultimo_grado,
      parentesco,
      ocupacion,

      documento,
      documento_tipo,
      documento_fecha_expedicion,
      documento_lugar_expedicion,

      matricula_id
    )
    VALUES
    (
      '$_POST[a_p_apellido]',
      '$_POST[a_s_apellido]',
      '$_POST[a_p_nombre]',
      '$_POST[a_s_nombre]',
      '$_POST[a_ultimo_grado]',
      '$_POST[parentesco]',
      '$_POST[a_ocupacion]',

      '$_POST[a_documento]',
      '$_POST[a_documento_tipo]',
      '$_POST[a_documento_fecha_expedicion]',
      '$_POST[a_documento_lugar_expedicion]',

      $matriculaId
    )
  ");

  // echo "informacion del acudiente<br/>";

  $_POST['m_nombres'] = strlen($_POST['m_nombres']) === 0 ? "Null" : "'$_POST[m_nombres]'";
  $_POST['m_apellidos'] = strlen($_POST['m_apellidos']) === 0 ? "Null" : "'$_POST[m_apellidos]'";
  $_POST['m_ultimo_grado'] = $_POST['m_nombres'] === "Null" ? "Null" : "'$_POST[m_ultimo_grado]'";
  $_POST['m_ocupacion'] = strlen($_POST['m_ocupacion']) === 0 ? "Null" : "'$_POST[m_ocupacion]'";
  $_POST['m_documento'] = strlen($_POST['m_documento']) === 0 ? "Null" : "'$_POST[m_documento]'";
  $_POST['m_documento_tipo'] = $_POST['m_nombres'] === "Null" ? "Null" : "'$_POST[m_documento_tipo]'";
  $_POST['m_documento_fecha_expedicion'] = strlen($_POST['m_documento_fecha_expedicion']) === 0 ? "Null" : "'$_POST[m_documento_fecha_expedicion]'";
  $_POST['m_documento_lugar_expedicion'] = strlen($_POST['m_documento_lugar_expedicion']) === 0 ? "Null" : "'$_POST[m_documento_lugar_expedicion]'";

  // crear información de mamá
  mysqli_query(connection(),"
    INSERT INTO matricula_ancestro
    (
      ancestro,
      nombres,
      apellidos,
      ultimo_grado,
      ocupacion,

      documento,
      documento_tipo,
      documento_fecha_expedicion,
      documento_lugar_expedicion,

      matricula_id
    )
    VALUES 
    (
      'mamá',
      $_POST[m_nombres],
      $_POST[m_apellidos],
      $_POST[m_ultimo_grado],
      $_POST[m_ocupacion],

      $_POST[m_documento],
      $_POST[m_documento_tipo],
      $_POST[m_documento_fecha_expedicion],
      $_POST[m_documento_lugar_expedicion],

      $matriculaId
    );
  ");
  // echo 'Información mamá<br/>';

  $_POST['p_nombres'] = strlen($_POST['p_nombres']) === 0 ? "Null" : "'$_POST[p_nombres]'";
  $_POST['p_apellidos'] = strlen($_POST['p_apellidos']) === 0 ? "Null" : "'$_POST[p_apellidos]'";
  $_POST['p_ultimo_grado'] = $_POST['p_nombres'] === "Null" ? "Null" : "'$_POST[p_ultimo_grado]'";
  $_POST['p_ocupacion'] = strlen($_POST['p_ocupacion']) === 0 ? "Null" : "'$_POST[p_ocupacion]'";
  $_POST['p_documento'] = strlen($_POST['p_documento']) === 0 ? "Null" : "'$_POST[p_documento]'";
  $_POST['p_documento_tipo'] = $_POST['p_nombres'] === "Null" ? "Null" : "'$_POST[p_documento_tipo]'";
  $_POST['p_documento_fecha_expedicion'] = strlen($_POST['p_documento_fecha_expedicion']) === 0 ? "Null" : "'$_POST[p_documento_fecha_expedicion]'";
  $_POST['p_documento_lugar_expedicion'] = strlen($_POST['p_documento_lugar_expedicion']) === 0 ? "Null" : "'$_POST[p_documento_lugar_expedicion]'";

  // crear información de papá
  mysqli_query(connection(),"
    INSERT INTO matricula_ancestro
    (
      ancestro,
      nombres,
      apellidos,
      ultimo_grado,
      ocupacion,

      documento,
      documento_tipo,
      documento_fecha_expedicion,
      documento_lugar_expedicion,

      matricula_id
    )
    VALUES 
    (
      'papá',
      $_POST[p_nombres],
      $_POST[p_apellidos],
      $_POST[p_ultimo_grado],
      $_POST[p_ocupacion],

      $_POST[p_documento],
      $_POST[p_documento_tipo],
      $_POST[p_documento_fecha_expedicion],
      $_POST[p_documento_lugar_expedicion],

      $matriculaId
    );
  ");
  // echo 'Información papá<br/>';

  // crear información individual del estudiante
  mysqli_query(connection(), "
    INSERT INTO matricula_estudiante_individual
    (
      vive_solo,
      embarazo,
      m_p_aternidad,
      victima_discriminacion,
      victima_agresion,
      victima_a,
      desea_estudiar,
      matricula_id
    )
    VALUES
    (
      '$_POST[vive_solo]',
      '$_POST[embarazo]',
      '$_POST[m_p_aternidad]',
      '$_POST[victima_discriminacion]',
      '$_POST[victima_agresion]',
      '$_POST[victima_de]',
      '$_POST[desea_estudiar]',
      $matriculaId
    );
  ");
  // echo "información indivual estudiante<br/>";

  // crear información de vivienda
  mysqli_query(connection(), "
    INSERT INTO matricula_vivienda
    (
      tipo_vivienda,
      vivienda,
      personas,
      matricula_id
    )
    VALUES
    (
      '$_POST[tipo_vivienda]',
      '$_POST[vivienda]',
      $_POST[personas],
      $matriculaId
    );
  ");

  // echo "información vivienda<br/>";

  // crear informacion carrera escolar
  mysqli_query(connection(), "
    INSERT INTO matricula_carrera_escolar
    (
      educacion_preescolar,
      preescolar_years,
      retiro_escolar,
      tiempo_fuera,
      abandonos,
      years_repetidos,
      repitiendo_year,
      antecedentes,
      asistencia,
      alteraciones,
      modalidad_inicio,
      asignaturas_p,
      asignaturas_s,

      matricula_id
    )
    VALUES
    (
      '$_POST[educacion_preescolar]',
      $_POST[preescolar_years],
      '$_POST[retiro_escolar]',
      $_POST[tiempo_fuera],
      '$_POST[abandonos]',
      $_POST[years_repetidos],
      '$_POST[repitiendo_year]',
      '$_POST[antecedentes]',
      '$_POST[asistencia]',
      '$_POST[alteraciones]',
      '$_POST[modalidad_inicio]',
      '$_POST[asignaturas_p]',
      '$_POST[asignaturas_s]',

      $matriculaId
    );
  ");

  // echo "Información carrera escolar";

  header('location:./');
}