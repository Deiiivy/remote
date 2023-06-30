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

  // $matriculas = mysqli_fetch_array($query);

  // var_dump($matriculas);
  /* while ($row = mysqli_fetch_array($query)) {
    var_dump($row);
  }  */
  foreach ($_POST as $key => $value) {
    echo "Clave: $key, Valor: $value <br/>";
  }

  echo "Matricula creada<br/>";

  // crear iformacion del estudiante
  mysqli_query(connection(), "
  INSERT INTO matricula_estudiante
  (
    p_apellido, 
    s_apellido, 
    p_nombre, 
    s_nombre, 
    grado,

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

  echo "informacion del estudiante<br/>";

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

  echo "informacion del ubicación<br/>";

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

  echo "informacion del acudiente<br/>";

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
      '$_POST[m_nombres]',
      '$_POST[m_apellidos]',
      '$_POST[m_ultimo_grado]',
      '$_POST[m_ocupacion]',

      '$_POST[m_documento]',
      '$_POST[m_documento_tipo]',
      '$_POST[m_documento_fecha_expedicion]',
      '$_POST[m_documento_lugar_expedicion]',

      $matriculaId
    );
  ");
  echo 'Información mamá<br/>';

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
      '$_POST[p_nombres]',
      '$_POST[p_apellidos]',
      '$_POST[p_ultimo_grado]',
      '$_POST[p_ocupacion]',

      '$_POST[p_documento]',
      '$_POST[p_documento_tipo]',
      '$_POST[p_documento_fecha_expedicion]',
      '$_POST[p_documento_lugar_expedicion]',

      $matriculaId
    );
  ");
  echo 'Información papá<br/>';
}