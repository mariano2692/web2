
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href=<?php echo '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/'?>>
    <title>Juegos</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <form action="add" method="POST" class="my-4">
        <div class="row">
                    <input required name="id" type="number" class="form-control" hidden value="<?php echo isset($game->id_juegos) ? $game->id_juegos : 0; ?>">
            <div class="col-9">
                <div class="form-group">
                    <label>Título</label>
                    <input required name="nombre" type="text" class="form-control" value="<?php echo isset($game->nombre) ? $game->nombre : ''; ?>">
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
                    <input required name="modalidad" type="text" class="form-control" value="<?php echo isset($game->modalidad) ? $game->modalidad : ''; ?>">
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label>plataformas</label>
                    <input required name="plataforma" type="text" class="form-control" value="<?php echo isset($game->plataformas) ? $game->plataformas : ''; ?>">
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label>Compania</label>
                    <select required name="compania" class="form-control">
                    <?php foreach ($comp as $c): ?>
                        <option value="<?= $c->id_compania; ?>"><?= $c->nombre; ?></option>
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
</div>