<?php
    require_once 'templates/header.php';
    //CONEXION BASE DE DATOS
    $db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');

    $queryCompania = $db->prepare('SELECT * FROM compania WHERE id_compania = ?');

    //Lista de los juegos
    $query = $db->prepare('SELECT * FROM juegos');
    $query->execute();

    //traemos todas las filas de juegos y las pasamos como un array asociativo
    $juegos = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($juegos as $juego):
        echo 'nombre: ' . $juego['nombre'] . ' fecha de lanzamiento: ' . $juego['fecha_lanzamiento'] . 'para plataformas ' . $juego['plataformas'] . '<br>';
        //compania desarroladora de cada uno de los juegos
        $queryCompania->execute([$juego['id_compania']]);
        $compania = $queryCompania->fetch(PDO::FETCH_ASSOC);
        echo '-------' . $compania['nombre'] . '<br>';
    endforeach

?>