<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario preescolar</title>
</head>

<body>
  <main class="w-11/12 mx-auto flex flex-col items-center">
    <img src="./descarga.jpg" alt="ie la independencia" srcset="">
    <h1 class="mb-5 font-bold italic text-xl">INSTITUCIÓN EDUCATIVA LA INDEPENDENCIA</h1>

    <form action="" method="post" class="border border-black">
      <section class="mb-8">
        <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion del estudiante</h2>
        <div class="px-5">
          <input class="border border-black" name="txtApellido1" type="text" id="txtApellido1" placeholder="Primer Apellido" size="20" font="" required="">
          <input class="border border-black" type="text" class="textbox" id="txtApellido2" placeholder="Segundo Apellido" size="20" font="">
          <input class="border border-black" type="text" class="textbox" id="txtNombre1" placeholder="Primer Nombre" size="20" font="" required="">
          <input class="border border-black" type="text" class="textbox" id="txtNombre2" placeholder="Segundo Nombre" size="20" font="" required>
        </div>
      </section>
      <section class="mb-4">
        <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Documento identidad</h2>
        <div class="px-5 flex flex-col">
          <select class="border border-black mb-3 w-11/12">
            <option value="">Seleccione el documento</option>
            <option value="">cedula de ciudadania</option>
            <option value="">tarjeta de identidad</option>
            <option value="">cedula de estranjeria</option>
            <option value="">registro civil de nacimiento</option>
            <option value="">PPI</option>
            <option value="">PEP</option>
          </select>
          <input class="mb-3 border border-black w-11/12" type="text" placeholder="numero de documento">
          <input class="mb-3 border border-black w-11/12" type="text" placeholder="lugar de expedición del documento">
          <label>Fecha de expedicon del documento</label>
          <input class="mb-3 border border-black w-11/12" type="date">
        </div>
        <section class="mb-4">
          <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion de ubicación</h2>

          <div class="px-5 flex flex-col">
            <input class="mb-3 border border-black w-11/12" placeholder="lugar de nacimiento" type="text">
            <input class="mb-3 border border-black w-11/12" type="text" placeholder="municipio de nacimiento">
            <input class="mb-3 border border-black w-11/12" type="text" placeholder="departamento">
            <input class="mb-3 border border-black w-11/12" type="text" placeholder="pais">
          </div>
        </section>
        <section class="mb-4">
          <h2 class="bg-sky-700 text-center text-white p-4 mb-5">informacion de ubicación</h2>

          <div class="px-5 flex flex-col">
            <input class="mb-3 border border-black w-11/12" type="text" placeholder="dirección de la residencia">
            <input class="mb-3 border border-black w-11/12" type="text" placeholder="telefono Fijo">
            <input class="mb-3 border border-black w-11/12" type="text" placeholder="Correo electronico">
            <input class="mb-3 border border-black w-11/12" type="text" placeholder="numero Celular">

            <label class="italic mb-3">Seleccione Estracto</label>
            <select class="border border-black w-11/12 mb-3">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>

            <label class="italic mb-3 ">sisben</label>
            <select class="border border-black w-11/12 mb-3">
              <option>Si</option>
              <option>No</option>
            </select>

            <label class="italic mb-3">EPS</label>
            <select class="border border-black w-11/12 mb-3">
              <option>Si</option>
              <option>No</option>
            </select>

            <label class="italic mb-3">Tipo de sangre</label>
            <select class="border border-black w-11/12 mb-3">
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>AB+</option>
              <option>AB-</option>
              <option>O+</option>
              <option>O-</option>
            </select>

            <label class="italic mb-3">
              ¿El estudiante ha sido victima de conflicto armado
              o desplazamiento?
            </label>
            <select class="border border-black w-11/12 mb-3">
              <option>si</option>
              <option>No</option>
            </select>
          </div>

        </section>
        <section>

          <section class="mb-8">
            <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion del acudiente</h2>
            <div class="px-5">
              <input class="border border-black" name="txtApellido1" type="text" id="txtApellido1" placeholder="Primer Apellido" size="20" font="" required="">
              <input class="border border-black" type="text" class="textbox" id="txtApellido2" placeholder="Segundo Apellido" size="20" font="">
              <input class="border border-black" type="text" class="textbox" id="txtNombre1" placeholder="Primer Nombre" size="20" font="" required="">
              <input class="border border-black" type="text" class="textbox" id="txtNombre2" placeholder="Segundo Nombre" size="20" font="" required>
            </div>
          </section>
          <section class="mb-4">
            <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Documento identidad</h2>
            <div class="px-5 flex flex-col">
              <select class="border border-black mb-3 w-11/12">
                <option value="">Seleccione el documento</option>
                <option value="">cedula de ciudadania</option>
                <option value="">tarjeta de identidad</option>
                <option value="">cedula de estranjeria</option>
                <option value="">registro civil de nacimiento</option>
                <option value="">PPI</option>
                <option value="">PEP</option>
              </select>
              <input class="mb-3 border border-black w-11/12" type="text" placeholder="numero de documento">
              <input class="mb-3 border border-black w-11/12" type="text" placeholder="lugar de expedición del documento">
              <label>Fecha de expedicon del documento</label>
              <input class="mb-3 border border-black w-11/12" type="date">
              <label>Ocupacion</label>
              <input class="mb-3 border border-black w-11/12" placeholder="ocupacion" type="text">
              <label>Ultimo grado cursado</label>
              <select class="border border-black mb-3 w-11/12">
                <option value="">Seleccione el ultimo grado cursado</option>
                <option value="">primero</option>
                <option value="">segundo</option>
                <option value="">tercero</option>
                <option value="">cuarto</option>
                <option value="">quinto</option>
                <option value="">sexto</option>
                <option value="">septimo</option>
                <option value="">octavo</option>
                <option value="">noveno</option>
                <option value="">decimo</option>
                <option value="">once</option>

              </select>
              <label>parentesco del acudiente con el estudiante</label>
              <select class="border border-black mb-3 w-11/12">
                <option>parentesco</option>
                <option>Mama</option>
                <option>papa</option>
                <option>hermano(@)</option>
                <option>Tio(@)</option>
                <option>Abuelo(@)</option>
                <option>otro:</option>
              </select>
            </div>
            <section class="mb-4">
              <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion de la mamá</h2>

              <div class="px-5 flex flex-col">
                <input class="mb-3 border border-black w-11/12" placeholder="nombres" type="text">
                <input class="mb-3 border border-black w-11/12" type="text" placeholder="apellidos">
                <input class="mb-3 border border-black w-11/12" type="text" placeholder="numero de documento">
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Seleccione el documento</option>
                  <option value="">cedula de ciudadania</option>
                  <option value="">tarjeta de identidad</option>
                  <option value="">cedula de estranjeria</option>
                  <option value="">registro civil de nacimiento</option>
                  <option value="">PPI</option>
                  <option value="">PEP</option>
                </select>

                <h3 class="font-bold">Fecha de expedición del documento</h3>
                <input class="mb-3 border border-black w-11/12" type="date">
                <label>Ocupacion</label>
                <input class="mb-3 border border-black w-11/12" placeholder="ocupacion" type="text">
                <label>Ultimo grado cursado</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Seleccione el ultimo grado cursado</option>
                  <option value="">primero</option>
                  <option value="">segundo</option>
                  <option value="">tercero</option>
                  <option value="">cuarto</option>
                  <option value="">quinto</option>
                  <option value="">sexto</option>
                  <option value="">septimo</option>
                  <option value="">octavo</option>
                  <option value="">noveno</option>
                  <option value="">decimo</option>
                  <option value="">once</option>
                </select>
              </div>

            </section>

            <section class="mb-4">
              <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion del papa</h2>

              <div class="px-5 flex flex-col">
                <input class="mb-3 border border-black w-11/12" placeholder="nombres" type="text">
                <input class="mb-3 border border-black w-11/12" type="text" placeholder="apellidos">
                <input class="mb-3 border border-black w-11/12" type="text" placeholder="numero de documento">
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Seleccione el documento</option>
                  <option value="">cedula de ciudadania</option>
                  <option value="">tarjeta de identidad</option>
                  <option value="">cedula de estranjeria</option>
                  <option value="">registro civil de nacimiento</option>
                  <option value="">PPI</option>
                  <option value="">PEP</option>
                </select>

                <h3 class="font-bold">Fecha de expedición del documento</h3>
                <input class="mb-3 border border-black w-11/12" type="date">
                <label>Ocupacion</label>
                <input class="mb-3 border border-black w-11/12" placeholder="ocupacion" type="text">
                <label>Ultimo grado cursado</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Seleccione el ultimo grado cursado</option>
                  <option value="">primero</option>
                  <option value="">segundo</option>
                  <option value="">tercero</option>
                  <option value="">cuarto</option>
                  <option value="">quinto</option>
                  <option value="">sexto</option>
                  <option value="">septimo</option>
                  <option value="">octavo</option>
                  <option value="">noveno</option>
                  <option value="">decimo</option>
                  <option value="">once</option>
                </select>

              </div>

            </section>

            <section class="mb-4">

              <h2 class="bg-sky-500 text-center text-white p-4 mb-5">Informacion individual del estudiante</h2>
              <div class="px-5 flex flex-col">
                <label>¿el estudiante vive solo? </label>
                <select class="border border-black w-11/12 mb-3">
                  <option>si</option>
                  <option>No</option>
                </select>
                <label>¿embarazo?</label>
                <select class="border border-black w-11/12 mb-3">
                  <option>si</option>
                  <option>No</option>
                </select>
                <label>¿maternidad o paternidad a temprana edad?</label>
                <select class="border border-black w-11/12 mb-3">
                  <option>si</option>
                  <option>No</option>
                </select>
                <label>¿Ha sido victima de discriminacion, agresiones</br> fisicas o agresiones verbales en razon sus expresio</br>nes de genero, su orientacion o identidad sexual?(Para poblacion LGBTI)</label>

                <select class="border border-black w-11/12 mb-3">
                  <option>si</option>
                  <option>No</option>
                </select>
                <label>¿ha sido victima de agresiones fisicas , verbales o sexuales por parte de alguien de su</br>entorno educativo o familiar?</label>

                <select class="border border-black w-11/12 mb-3">
                  <option>si</option>
                  <option>No</option>
                </select>

                <label>¿Refiere que ha sido victima de discriminacion en razon a:</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Seleccione</option>
                  <option value="">Discapacidad</option>
                  <option value="">Ritmo de aprendizaje</option>
                  <option value="">Apariencia Fisica</option>
                  <option value="">Religion</option>
                  <option value="">Pertenencia etnica</option>
                  <option value="">Caracteristicas familiares</option>
                  <option value="">Otra</option>

                </select>
                <input class="mb-3 border border-black w-11/12" placeholder="¿Que desea estudiar?" type="text">
              </div>
            </section>
            <section>
              <h2 class="bg-sky-500 text-center text-white p-4 mb-5">Informacion familiar</h2>
              <div class="px-5 flex flex-col">
                <input class="mb-3 border-black mb-3 w-11/12" placeholder="Numero de personas que viven en el hogar">

              </div>
            </section>
            <section>
              <h2 class="bg-sky-500 text-center text-white p-4 mb-5">Caracteristicas de vivienda</h2>
              <div class="px-5 flex flex-col">
                <label>El tipo de vivienda es</label>
                <select class="border border-black mb-3 w-11/12">

                  <option value="">Casa</option>
                  <option value="">Apartamento</option>
                  <option value="">Cuartos</option>
                  <option value="">otro</option>

                </select>
                <label>La vivienda es:</label>
                <select class="border border-black mb-3 w-11/12">

                  <option value="">Propia</option>
                  <option value="">Alquilada</option>
                  <option value="">Propia con credito</option>
                </select>

              </div>
            </section>
            <section>
              <h2 class="bg-sky-500 text-center text-white p-4 mb-5">Trayectoria escolar</h2>
              <div class="px-5 flex flex-col">
                <label>¿Tuvo educacion preescolar?</label>
                <select class="border border-black mb-3 w-11/12">

                  <option value="">Si</option>
                  <option value="">No</option>
                </select>
                <input class="mb-3 border border-black w-11/12" placeholder="Años en educacion preescolar" type="text">
                <label>¿Alguna vez se ha retirado del establecimiento educativo sin terminar el año escolar?</label>
                <select class="border border-black mb-3 w-11/12">

                  <option value="">Si</option>
                  <option value="">No</option>
                </select>
                <input class="mb-3 border border-black w-11/12" placeholder="¿Cuanto tiempo, en meses, estuvo por fuera del sistema educativo?" type="text">
                <label>Abandonos temporales(año lectivo actual)</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Si</option>
                  <option value="">No</option>
                </select>
                <input class="mb-3 border border-black w-11/12" placeholder="Numero de veces que ha repetido Años" type="text">
                <label>¿Esta repitiendo el grado actual?</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Si</option>
                  <option value="">No</option>
                </select>
                <label>Antecedentes disciplinarios de la vida academica</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">LLamados de atencion</option>
                  <option value="">Suspenciones</option>
                  <option value="">Llamados de atencion y suspenciones</option>
                  <option value="">No aplica</option>
                </select>
                <label>Asistencia promedio del año anterior</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Alta (80% o mas)</option>
                  <option value="">Media (entre el 50% y menor al 80%)</option>
                  <option value="">baja (menor al 50%)</option>
                  <option value="">No aplica</option>
                </select>
                <label>¿Presenta alteraciones en el desarrollo o dificultades de aprendizaje diagnosticas por un especialista?</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Si</option>
                  <option value="">No</option>
                </select>
                <label>Estuvo vinculado a una modalidad de educacion inical antes de ingresar a preescolar?</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Si</option>
                  <option value="">No</option>

                </select>
                <input class="mb-3 border border-black w-11/12" placeholder="¿Cual o cuales asignaturas no esta aprobando en el periodo 1" type="text">
                <input class="mb-3 border border-black w-11/12" placeholder="¿Cual o cuales asignaturas no esta aprobando en el periodo 2" type="text">

              </div>
            </section>
            <section>
              <h2 class="bg-sky-500 text-center text-white p-4 mb-5">Estrategias que deberia tener el estudiante</h2>
              <div class="px-5 flex flex-col">
                <label>subsidios condicionados a la asistencia escolar jornada escolar complementaria</label>
                <select class="border border-black mb-3 w-11/12">
                  <option value="">Utiles escolares</option>
                  <option value="">Atencion escolar</option>
                  <option value="">vestuario escolar</option>
                  <option value="">Transporte escolar</option>
                  <option value="">PAE-emergencia</option>
                </select>
            </section>
            </div>
    </form>

  </main>
</body>

</html>