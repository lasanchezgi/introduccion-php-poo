<?php include 

    'includes/header.php';

    // CONECTAR A LA BD CON MYSQLI
    // $db: Objeto
    //$db = new mysqli('localhost', 'root', 'giraldo238', 'bienesraices_crud');
    //var_dump($db);
    //$query = "SELECT titulo FROM propiedades";
    //$resultado = $db->query($query);
    //var_dump($resultado->fetch_assoc());
    //while($row = $resultado->fetch_assoc()):
        //var_dump($row);
    //endwhile;

    // SENTENCIAS PREPARADAS
    
    $db = new mysqli('localhost', 'root', 'giraldo238', 'bienesraices_crud');
    // Crear query
    $query = "SELECT titulo, imagen FROM propiedades";
    // Preparar query
    $stmt = $db->prepare($query);
    // Ejecutar query
    $stmt->execute();
    // Crear variable
    $stmt->bind_result($titulo, $imagen);
    // Asignar el resultado
    //$stmt->fetch();
    // Imprimir resultado
    //var_dump($titulo);
    //var_dump($imagen);
    while ($stmt->fetch()):
        var_dump($titulo);
    endwhile;


include 'includes/footer.php';