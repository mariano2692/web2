<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Título</label>
                <input required name="nombre" type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Fecha lanzamineto</label>
                <input required name="fecha" type="date" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>modalidad</label>
                <input required name="modalidad" type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>plataformas</label>
                <input required name="plataforma" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Compania</label>
                <select required name="compania" class="form-control">
                <?php foreach ($comp as $c): ?>
                    <option value="<?= $c->id_compania; ?>"><?= htmlspecialchars($c->nombre); ?></option>
                <?php endforeach; ?>
                    <!-- <option value="1">riot games</option>
                    <option value="2">ubisoft</option>
                    <option value="3">blizzard</option> -->
                </select>
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary mt-2">Guardar</button>

</form>
