<section class="mb-4">
  <h2 class="bg-sky-700 text-center text-white p-4 mb-5">informacion de ubicación</h2>

  <div class="px-5 flex flex-col">
    <input name="direccion" class="mb-3 border border-black" type="text" placeholder="dirección de la residencia" required>
    <input name="telefono" class="mb-3 border border-black" type="text" placeholder="telefono Fijo" required>
    <input name="correo" class="mb-3 border border-black" type="text" placeholder="Correo electronico" required>
    <input name="numero_telefonico" class="mb-3 border border-black" type="text" placeholder="número Telefonico" required>

    <label class="mb-3">Seleccione Estracto</label>
    <select name="estrato" class="border border-black mb-3">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>

    <label class="mb-3 ">sisben</label>
    <select name="sisben" class="border border-black mb-3">
      <option value="Si">Si</option>
      <option value="No">No</option>
    </select>

    <label class="mb-3">EPS</label>
    <select name="eps" class="border border-black mb-3">
      <option value="Si">Si</option>
      <option value="No">No</option>
    </select>

    <label class="mb-3">Tipo de sangre</label>
    <select name="tipo_sangre" class="border border-black mb-3">
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>

    <label class="mb-3">
      ¿El estudiante ha sido victima de conflicto armado
      o desplazamiento?
    </label>
    <select name="victima" class="border border-black mb-3">
      <option value="Si">si</option>
      <option value="No">No</option>
    </select>
  </div>

</section>