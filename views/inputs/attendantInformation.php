<section class="mb-8">
  <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion del acudiente</h2>
  <div class="px-5 flex flex-col">
    <input class="border border-black mb-3" placeholder="Primer Apellido" required>
    <input class="border border-black mb-3" type="text" placeholder="Segundo Apellido" required>
    <input class="border border-black mb-3" type="text" placeholder="Primer Nombre" required>
    <input class="border border-black mb-3" type="text" placeholder="Segundo Nombre" required>
    <select class="border border-black mb-3">
      <option value="">Seleccione el documento</option>
      <option value="">cedula de ciudadania</option>
      <option value="">tarjeta de identidad</option>
      <option value="">cedula de estranjeria</option>
      <option value="">registro civil de nacimiento</option>
      <option value="">PPI</option>
      <option value="">PEP</option>
    </select>

    <input class="mb-3 border border-black" type="text" placeholder="numero de documento">
    <input class="mb-3 border border-black" type="text" placeholder="lugar de expedición del documento">
    <label>Fecha de expedicon del documento</label>
    <input class="mb-3 border border-black " type="date">
    <label>Ocupacion</label>
    <input class="mb-3 border border-black" placeholder="ocupacion" type="text">
    <label>Ultimo grado cursado</label>

    <select class="border border-black mb-3">
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
    <select class="border border-black mb-3">
      <option>Mamá</option>
      <option>papá</option>
      <option>hermano(@)</option>
      <option>Tio(@)</option>
      <option>Abuelo(@)</option>
      <option>otro:</option>
    </select>
  </div>
</section>