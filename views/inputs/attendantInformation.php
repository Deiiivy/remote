<section class="mb-8">
  <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion del acudiente</h2>
  <div class="px-5 flex flex-col">
    <input name="a_p_apellido" class="border border-black mb-3" placeholder="Primer Apellido" required>
    <input name="a_s_apellido" class="border border-black mb-3" type="text" placeholder="Segundo Apellido" required>
    <input name="a_p_nombre" class="border border-black mb-3" type="text" placeholder="Primer Nombre" required>
    <input name="a_s_nombre" class="border border-black mb-3" type="text" placeholder="Segundo Nombre" required>

    <label>Seleccione el tipo de documento</label>
    <select name="a_documento_tipo" class="border border-black mb-3">
      <option value="cedula de ciudadania">Cedula de ciudadania</option>
      <option value="Tarjeta de identidad">Tarjeta de identidad</option>
      <option value="cedula de estranjeria">Cedula de estranjeria</option>
      <option value="registro civil de nacimiento">Registro civil de nacimiento</option>
      <option value="PPI">PPI</option>
      <option value="PEP">PEP</option>
    </select>

    <input name="a_documento" class="mb-3 border border-black" type="text" placeholder="numero de documento" required>
    <label>Fecha de expedición del documento</label>
    <input name="a_documento_fecha_expedicion" class="mb-3 border border-black " type="date">
    <input name="a_documento_lugar_expedicion" class="mb-3 border border-black" type="text" placeholder="lugar de expedición del documento" required>
    <input name="a_ocupacion" class="mb-3 border border-black" placeholder="ocupacion" type="text" required>

    <label>Seleccione el ultimo grado cursado</label>
    <select name="a_ultimo_grado" class="border border-black mb-3">
      <option value="primero">Primero</option>
      <option value="segundo">Segundo</option>
      <option value="tercero">Tercero</option>
      <option value="cuarto">Cuarto</option>
      <option value="quinto">Quinto</option>
      <option value="sexto">Sexto</option>
      <option value="septimo">Septimo</option>
      <option value="octavo">Octavo</option>
      <option value="noveno">Noveno</option>
      <option value="decimo">Decimo</option>
      <option value="Once">once</option>
    </select>

    <label>parentesco del acudiente con el estudiante</label>
    <select name="parentesco" class="border border-black mb-3">
      <option value="mamá">Mamá</option>
      <option value="papá">papá</option>
      <option value="hermano(@)">Hermano(@)</option>
      <option value="tio(@)">Tio(@)</option>
      <option value="Abuelo(@)">Abuelo(@)</option>
      <option value="otro">Otro:</option>
    </select>
  </div>
</section>