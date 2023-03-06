
<form method="POST" action="{{ route('aves.store') }}" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="nombre_cientifico">Nombre científico:</label>
        <input type="text" id="nombre_cientifico" name="nombre_cientifico" required>
    </div>

    <div>
        <label for="nombre_comun">Nombre común:</label>
        <input type="text" id="nombre_comun" name="nombre_comun" required>
    </div>

    <div>
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen">
    </div> 

    <div>
        <label for="area_1">Avistamientos en área 1:</label>
        <input type="number" id="area_1" name="area_1" value="0" min="0" required>
    </div>

    <div>
        <label for="area_2">Avistamientos en área 2:</label>
        <input type="number" id="area_2" name="area_2" value="0" min="0" required>
    </div>

    <div>
        <label for="area_3">Avistamientos en área 3:</label>
        <input type="number" id="area_3" name="area_3" value="0" min="0" required>
    </div>

    <div>
        <label for="area_4">Avistamientos en área 4:</label>
        <input type="number" id="area_4" name="area_4" value="0" min="0" required>
    </div>

    <div>
    <label for="area_6">Avistamientos en área 6:</label>
    <input type="number" id="area_6" name="area_6" value="0" min="0" required>
    </div>

    <div>
        <label for="area_7">Avistamientos en área 7:</label>
        <input type="number" id="area_7" name="area_7" value="0" min="0" required>
    </div>

    <div>
        <button type="submit">Registrar</button>
    </div>
</form>

