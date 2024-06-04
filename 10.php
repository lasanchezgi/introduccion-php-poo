<?php include 
    'includes/header.php';

    // CONECTAR A LA BASE DE DATOS
    $db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'giraldo238');
    $query = "SELECT titulo, imagen FROM propiedades";

    // CONSULTAR LA BD
    //$propiedades = $db->query($query)->fetch();
    //var_dump($propiedades);

    // Sentencias preparadas
    $stmt = $db->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $propiedad):
        echo $propiedad['titulo'];
        echo "<br>";
        echo $propiedad['imagen'];
        echo "<br>";
        
    endforeach;

    //echo "<pre>";
    //var_dump($resultado);
    //echo "</pre>";


include 'includes/footer.php';