<section class="mb-4">
  <h2 class="bg-sky-700 text-center text-white p-4 mb-5"><?= $message ?></h2>

  <div class="px-5 flex flex-col">
    <input 
      name=<?= strpos($message, "mamá") ? 'm_nombres' : 'p_nombres' ?> 
      class="mb-3 border border-black" 
      placeholder="nombres" type="text"
    >
    <input 
      name=<?= strpos($message, "mamá") ? 'm_apellidos' : 'p_apellidos' ?> 
      class="mb-3 border border-black" 
      type="text" 
      placeholder="apellidos"
    >

    <label>Seleccione el ultimo grado cursado</label>
    <select 
      name=<?= strpos($message, "mamá") ? 'm_ultimo_grado' : 'p_ultimo_grado' ?>
      class="border border-black mb-3 "
    >
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
      <option value="once">Once</option>
    </select>

    <input 
    name=<?= strpos($message, "mamá") ? 'm_ocupacion' : 'p_ocupacion' ?>
      class="mb-3 border border-black" 
      placeholder="ocupación" 
      type="text"
    >

    <label>Seleccione el tipo de documento</label>
    <select 
      name=<?= strpos($message, "mamá") ? 'm_documento_tipo' : 'p_documento_tipo' ?>
      class="border border-black mb-3"
    >
      <option value="cedula de ciudadania">Cedula de ciudadania</option>
      <option value="tarjeta de identidad">Tarjeta de identidad</option>
      <option value="cedula de estranjeria">Cedula de estranjeria</option>
      <option value="registro civil de nacimiento">Registro civil de nacimiento</option>
      <option value="PPI">PPI</option>
      <option value="PEP">PEP</option>
    </select>
    
    <input 
    name=<?= strpos($message, "mamá") ? 'm_documento' : 'p_documento' ?> 
    class="mb-3 border border-black" 
    type="text" 
    placeholder="numero de documento"
    >
    
    <label class="mb-3">Fecha de expedición del documento</label>
    <input 
    name=<?= strpos($message, "mamá") ? 'm_documento_fecha_expedicion' : 'p_documento_fecha_expedicion' ?>
      class="mb-3 border border-black" 
      type="date"
    >
    <input 
      name=<?= strpos($message, "mamá") ? 'm_documento_lugar_expedicion' : 'p_documento_lugar_expedicion' ?>
      class="mb-3 border border-black" 
      placeholder="Lugar de expedición del documento" 
      type="text"
      >
  </div>
</section>