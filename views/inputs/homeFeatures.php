<section>
  <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Caracteristicas de vivienda</h2>
  <div class="px-5 flex flex-col">
    <label class="mb-3">Tipo de vivienda es</label>
    <select name="tipo_vivienda" class="border border-black mb-3">
      <option value="casa">Casa</option>
      <option value="apartamento">Apartamento</option>
      <option value="cuartos">Cuartos</option>
      <option value="otro">Otro</option>
    </select>

    <label class="mb-3">La vivienda es:</label>
    <select name="vivienda" class="border border-black mb-3">
      <option value="propia">Propia</option>
      <option value="alquilada">Alquilada</option>
      <option value="propia con credito">Propia con credito</option>
    </select>

    <label class="mb-3">Numero de personas que viven en el hogar</label>
    <input name="personas" type="number" class="border border-black mb-3" required>
  </div>
</section>