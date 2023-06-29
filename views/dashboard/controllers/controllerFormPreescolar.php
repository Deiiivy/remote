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

  // crear iformacion del estudiante
  mysqli_query(connection(), "
  INSERT INTO matricula_estudiante
  (
    p_apellido, 
    s_apellido, 
    p_nombre, 
    s_nombre, 
    grado,
    matricula_id
  )
  VALUES
  (
    '$_POST[estudiante_p_apellido]',
    '$_POST[estudiante_s_apellido]',
    '$_POST[estudiante_p_nombre]',
    '$_POST[estudiante_s_nombre]',
    '$_POST[estudiante_grado]',
    $matriculaId
  )
  ");
}