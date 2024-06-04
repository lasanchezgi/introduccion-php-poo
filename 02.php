<?php
    declare (strict_types = 1);
    
    include 'includes/header.php';
    
    class Producto {
        // MODIFICADORES DE ACCESO
        // 1 PUBLIC --> Se puede acceder y modificar en cualquier lugar, es decir, en la clase o en el objeto
        // 2 PROTECTED --> Se puede acceder y modificar unicamente en la clase
        // 3 PRIVATE --> Solo miembros de la misma clase pueden acceder a el
        public function __construct(public string $nombre, public int $precio, public bool $disponible)
            {
            }
    
        public function mostrarProducto() {
            echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
            }
        
        // Nuevo metodo dentro de la clase si se puede acceder a un protected
        public function getNombre() {
            return $this->nombre;
        }

        // Modificar valor
        public function setNombre(string $nombre) {
            $this->nombre = $nombre;
        }
    }
    
    $producto = new Producto('Tablet', 200, true);
    //$producto->mostrarProducto();

    echo $producto->getNombre();
    $producto->setNombre('Nueva tablet');

    // Se puede modificar
    //$producto->nombre = "Nuevo nombre";
    //echo $producto->nombre;

    echo "<pre>";
    var_dump($producto);
    echo "</pre>";
    
    $producto1 = new Producto('Monitor curvo', 300, true);
    //$producto1->mostrarProducto();

    echo $producto1->getNombre();

    //echo "<pre>";
    //var_dump($producto1);
    //echo "</pre>";


include 'includes/footer.php';