<section class="mb-8">
  <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion del estudiante</h2>
  <div class="px-5 flex flex-col">
    <input name="estudiante_p_apellido" class="border border-black mb-3" type="text" placeholder="Primer Apellido" required>
    <input name="estudiante_s_apellido" class="border border-black mb-3" type="text" placeholder="Segundo Apellido" required>
    <input name="estudiante_p_nombre" class="border border-black mb-3" type="text" placeholder="Primer Nombre" required>
    <input name="estudiante_s_nombre" class="border border-black mb-3" type="text" placeholder="Segundo Nombre" required>
    <label class="mb-3" for="grade_level">Grado a cursar</label>
    <select name="estudiante_grado" name="grado" class="border border-black mb-3">
      <?php foreach($values as $value): ?>
        <option value=<?= strtolower($value) ?>><?= $value ?></option>
      <?php endforeach ?>
    </select>
  </div>
</section>