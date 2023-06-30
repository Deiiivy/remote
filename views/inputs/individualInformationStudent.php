<section class="mb-4">

  <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Informacion individual del estudiante</h2>
  <div class="px-5 flex flex-col">
    <label class="mb-3">¿El estudiante vive solo? </label>
    <select 
      name="vive_solo"
      class="border border-black mb-3"
    >
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>

    <label class="mb-3">¿Embarazo?</label>
    <select name="embarazo" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>
    
    <label class="mb-3">¿Maternidad o paternidad a temprana edad?</label>
    <select name="m_p_aternidad" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>
    
    <label class="mb-3">¿Ha sido victima de discriminación, agresiones</br> fisicas o agresiones verbales en razon sus expresiones</br> de genero, su orientacion o identidad sexual?(Para poblacion LGBTI)</label>
    <select name="victima_discriminacion" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>
    
    <label class="mb-3">¿Ha sido victima de agresiones fisicas , verbales o sexuales por parte de alguien de su</br>entorno educativo o familiar?</label>
    <select name="victima_agresion" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>

    <label class="mb-3">¿Refiere que ha sido victima de discriminacion en razon a:</label>
    <select name="victima_de" class="border border-black mb-3">
      <option value="ritmo de aprendizaje">Ritmo de aprendizaje</option>
      <option value="apariencia Fisica">Apariencia Fisica</option>
      <option value="religion">Religion</option>
      <option value="pertenencia etnica">Pertenencia etnica</option>
      <option value="caracteristicas familiares">Caracteristicas familiares</option>
      <option value="ninguna">Ninguna</option>
      <option value="otra">Otra</option>
    </select>
    <input 
      name="desea_estudiar"
      class="mb-3 border border-black" 
      placeholder="¿Que desea estudiar?" 
      type="text" 
      required
    >
  </div>
</section>