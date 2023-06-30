<section>
  <h2 class="bg-sky-700 text-center text-white p-4 mb-5">Trayectoria escolar</h2>
  <div class="px-5 flex flex-col">
    <label class="mb-3">¿Tuvo educacion preescolar?</label>
    <select name="educacion_preescolar" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>
    
    <input name="preescolar_years" class="mb-3 border border-black" placeholder="Años en educacion preescolar" type="number" required>

    <label class="mb-3">¿Alguna vez se ha retirado del establecimiento educativo sin terminar el año escolar?</label>
    <select name="retiro_escolar" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>

    <input name="tiempo_fuera" class="mb-3 border border-black" placeholder="¿Cuanto tiempo, en meses, estuvo por fuera del sistema educativo?" type="number" required>

    <label class="mb-3">Abandonos temporales(año electivo actual)</label>
    <select name="abandonos" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>

    <input name="years_repetidos" class="mb-3 border border-black" placeholder="Numero de veces que ha repetido Años" type="number" required>

    <label class="mb-3">¿Esta repitiendo el grado actual?</label>
    <select name="repitiendo_year" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>

    <label class="mb-3">Antecedentes disciplinarios de la vida academica</label>
    <select name="antecendentes" class="border border-black mb-3">
      <option value="llamados de atencion">Llamados de atencion</option>
      <option value="suspenciones">Suspenciones</option>
      <option value="llamados de atencion y suspenciones">Llamados de atencion y suspenciones</option>
      <option value="No aplica">No aplica</option>
    </select>

    <label class="mb-3">Asistencia promedio del año anterior</label>
    <select name="asistencia" class="border border-black mb-3">
      <option value="alta (80% o mas)">Alta (80% o mas)</option>
      <option value="media (entre el 50% y menor al 80%)">Media (entre el 50% y menor al 80%)</option>
      <option value="baja (menor al 50%)">Baja (menor al 50%)</option>
      <option value="no aplica">No aplica</option>
    </select>

    <label class="mb-3">¿Presenta alteraciones en el desarrollo o dificultades de aprendizaje diagnosticas por un especialista?</label>
    <select name="alteraciones" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>

    <label class="mb-3">Estuvo vinculado a una modalidad de educacion inical antes de ingresar a preescolar?</label>
    <select name="modalidad_inicio" class="border border-black mb-3">
      <option value="si">Si</option>
      <option value="no">No</option>
    </select>

    <input name="asignaturas_p" class="mb-3 border border-black" placeholder="¿Cual o cuales asignaturas no esta aprobando en el periodo 1" type="text" required>
    <input name="asignaturas_s" class="mb-3 border border-black" placeholder="¿Cual o cuales asignaturas no esta aprobando en el periodo 2" type="text" required>
  </div>
</section>