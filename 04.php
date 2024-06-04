<?php 

    include 'includes/header.php';

    class Transporte {
        public function __construct(protected int $ruedas, protected int $capacidad)
        {    
        }
        public function getInfo() : string {
            return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " de personas ";
        }
    }

    // Para heredar lo de la clase anterior se utiliza la palabra reservada extends y se coloca el nombre de la clase a heredar
    // Hereda tanto los atributos como los metodos
    class Bicicleta extends Transporte {
        // Se reescribe el metodo
        public function getInfo() : string {
            return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " de personas y NO gasta gasolina.";
        }
    }

    class Automovil extends Transporte {
        public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
        {    
        }
        public function getTransmision() : string {
            return $this->transmision;
        }
    }

    $bicicleta = new Bicicleta(2,1);
    echo $bicicleta->getInfo();

    echo "<hr>";

    $auto = new Automovil(4,4, 'Manual');
    echo $auto->getInfo();
    echo $auto->getTransmision();



include 'includes/footer.php';