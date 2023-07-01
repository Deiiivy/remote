<section class="mb-4">
  <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Documento identidad</h2>
  <div class="px-5 flex flex-col">
    <label class="mb-3">Tipo de documento</label>
    <select name="documento_tipo" class="border border-black mb-3">
      <option value="Cedula de ciudadania">Cedula de ciudadania</option>
      <option value="Tarjeta de identidad">Tarjeta de identidad</option>
      <option value="Cedula de estranjeria">Cedula de estranjeria</option>
      <option value="registro civil de nacimiento">Registro civil de nacimiento</option>
      <option value="PPI">PPI</option>
      <option value="PEP">PEP</option>
    </select>
    <input name="documento" class="mb-3 border border-black" type="text" placeholder="numero de documento" required>
    <input name="documento_lugar_expedicion" class="mb-3 border border-black" type="text" placeholder="lugar de expedición del documento" required>
    <label class="mb-3">Fecha de expedición del documento</label>
    <input name="documento_fecha_expedicion" class="mb-3 border border-black" type="date" required>
</section>