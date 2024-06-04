<?php 
    
    // Declarando las variables
    declare (strict_types = 1);
    
    include 'includes/header.php';

    // 1 DEFINIR - CREAR CLASE
    class Producto {
        // 2 DEFINIR ATRIBUTOS - PROPIEDADES DE LA CLASE
        //public $nombre;
        //public $precio;
        //public $disponible;

        // CONSTRUCTOR --> Es una función que se manda a llamar automaticamente
        public function __construct(public string $nombre, public int $precio, public bool $disponible)
        {
            // $this se refiere al objeto o a la instancia que se ha creado
            // El $this evita que se revuelvan los objetos, y que cada atributo que se va añadiendo a la clase se guarde donde debe ir
            // $this hace referencia a los atributos que fueron agregados en el objeto que fue creado en esta clase
            //echo "Holi";
            //$this->nombre = $nombre;
            //$this->precio = $precio;
            //$this->disponible = $disponible;

        }

        // Creando nuestros propios metodos (funciones)
        public function mostrarProducto() {
            echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;

        }
    }

// 3 INSTACIAR LA CLASE 
//$producto = new Producto();
// Para acceder a los atributos de la clase
//var_dump($producto->nombre);
//var_dump($producto->precio);
//var_dump($producto->disponible);

// Tambien se le puede asignar un valor
//$producto->nombre = 'Tablet';
//$producto->precio = 200;
//$producto->disponible = true;

$producto = new Producto('Tablet', 200, true);

//echo "El producto es: " . $producto->nombre . " y su precio es de: " . $producto->precio;
$producto->mostrarProducto();


echo "<pre>";
var_dump($producto);
echo "</pre>";

// Se pueden crear multiples objetos
//$producto1 = new Producto();
//$producto1->nombre = 'Monitor curvo';
//$producto1->precio = 300;
//$producto1->disponible = true;

$producto1 = new Producto('Monitor curvo', 300, true);

//echo "El producto es: " . $producto1->nombre . " y su precio es de: " . $producto1->precio;
$producto1->mostrarProducto();


echo "<pre>";
var_dump($producto1);
echo "</pre>";

include 'includes/footer.php';