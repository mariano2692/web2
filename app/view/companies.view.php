<?php

class companiesView {

    public $user = null;

    public function __construct()
    {
    }
    public function showCompanies($companias) {
        require_once './templates/layout/header.phtml';
        ?>
        <h1>Gestión de Compañías</h1>
        <?php if(isset($_SESSION['user']) && $_SESSION['rol'] == 'administrador'): ?>
        <h2>Agregar Compañía</h2>
        <form method="POST" action="<?php echo BASE_URL; ?>addCompany">
            <label for="nombre_compania">Nombre de la Compañía:</label>
            <input type="text" name="nombre_compania" required>
            <label for="fecha_fundacion">Fecha de Fundación:</label>
            <input type="date" name="fecha_fundacion" required>
            <label for="oficinas_centrales">Oficinas Centrales:</label>
            <input type="text" name="oficinas_centrales" required>
            <label for="sitio_web">Sitio Web:</label>
            <input type="text" name="sitio_web" required>
            <input type="submit" name="agregar_compania" value="Agregar">
        </form>

        <?php endif ?>

        <h2>Listado de Compañías</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Fundación</th>
                <th>Oficinas Centrales</th>
                <th>Sitio Web</th>
                <?php if(isset($_SESSION['user']) && $_SESSION['rol'] == 'administrador'): ?>
                <th>Acciones</th>
                <?php endif ?>
            </tr>
            <?php foreach ($companias as $compania): ?>
                <tr>
                    <td><?php echo htmlspecialchars($compania->id_compania); ?></td>
                    <td><?php echo htmlspecialchars($compania->nombre); ?></td>
                    <td><?php echo htmlspecialchars($compania->fecha_fundacion); ?></td>
                    <td><?php echo htmlspecialchars($compania->oficinas_centrales); ?></td>
                    <td><a href="https://<?php echo htmlspecialchars($compania->sitio_web); ?>"><?php echo htmlspecialchars($compania->sitio_web); ?></a></td>
                    <?php if(isset($_SESSION['user']) && $_SESSION['rol'] == 'administrador'): ?>
                    <td>
        <form method="POST" action="<?php echo BASE_URL; ?>editCompany">
                <input type="hidden" name="id_compania" value="<?php echo htmlspecialchars($compania->id_compania); ?>">
                <input type="text" name="nombre_compania" value="<?php echo htmlspecialchars($compania->nombre); ?>" required>
                <input type="date" name="fecha_fundacion" value="<?php echo htmlspecialchars($compania->fecha_fundacion); ?>" required>
                <input type="text" name="oficinas_centrales" value="<?php echo htmlspecialchars($compania->oficinas_centrales); ?>" required>
                <input type="text" name="sitio_web" value="<?php echo htmlspecialchars($compania->sitio_web); ?>" required>
                <input type="submit" name="editar_compania" value="Editar">
        </form>
                        <a href="<?php echo BASE_URL; ?>deleteCompany/<?php echo htmlspecialchars($compania->id_compania); ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta compañía?');">Eliminar</a>
                    </td>
                    <?php endif ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php
    }
}