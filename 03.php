<?php
    declare (strict_types = 1);
    
    include 'includes/header.php';

    // METODOS ESTATICOS --> Son diferentes a una función normal. 
    // NO utilizan el $this, utilizan la palabra reservada self
    // NO requieren instanciarse, es decir, 
    
    class Producto {

        // Atributos estaticos 
        //public static $imagen = "Imagen.jpg";

        public $imagen;
        // Cuando no se le pasa una imagen, se queda en placeHolder
        public static $imagenPlaceholder = "Imagen.jpg";

        // Si le pongo el public a las variables que estan adentro del constructor, las vuelvo obligatorias
        public function __construct(public string $nombre, public int $precio, public bool $disponible, string $imagen)
            {
                if ($imagen) {
                    // NO requiere instanciarse, de lo contrario se convertiria en un desorden de instancias
                    // Toma la imagen y re-escribe el metodo estatico
                    self::$imagenPlaceholder = $imagen;
                }
            }
    
        public function mostrarProducto() : void {
            echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
            }

        // Metodo estatico
        public static function obtenerProducto() {
            echo "Obteniendo datos del producto...";
        }

        public static function obtenerImagenProducto() {
            return self::$imagenPlaceholder;
        }
        
        // Nuevo metodo dentro de la clase si se puede acceder a un protected
        public function getNombre() : string {
            return $this->nombre;
        }

        // Modificar valor
        public function setNombre(string $nombre) {
            $this->nombre = $nombre;
        }
    }

    // Mandando a llamar el metodo estatico
    //echo Producto::obtenerProducto();

    //echo Producto::obtenerImagenProducto();
    
    $producto = new Producto('Tablet', 200, true, "");
    //$producto->mostrarProducto();

    // Mandando a llamar la imagen del producto
    echo $producto->obtenerImagenProducto();

    echo $producto->getNombre();
    $producto->setNombre('Nueva tablet');

    // Se puede modificar
    //$producto->nombre = "Nuevo nombre";
    //echo $producto->nombre;

    echo "<pre>";
    var_dump($producto);
    echo "</pre>";
    
    $producto1 = new Producto('Monitor curvo', 300, true, "monitorCurvo.jpg");
    //$producto1->mostrarProducto();

    // Mandando a llamar la imagen del producto
    echo $producto1->obtenerImagenProducto();

    echo $producto1->getNombre();

    //echo "<pre>";
    //var_dump($producto1);
    //echo "</pre>";


include 'includes/footer.php';