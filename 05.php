<?php 

    include 'includes/header.php';

    // NO INSTANCIAR (Haha! no falta que uno NO lea y la instancie)
    // Para eso son las clases abstractas, esta diseñada para ser heradada por otras clases 
    abstract class Transporte {
        public function __construct(protected int $ruedas, protected int $capacidad)
        {    
        }
        public function getInfo() : string {
            return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " de personas ";
        }
    }

    class Bicicleta extends Transporte {
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

    // Al tratar de instaciar la clase abstracta, marca error 
    //$transporte = new Transporte(1,3);
    //echo $transporte->getInfo();
    //echo "<hr>";

    $bicicleta = new Bicicleta(2,1);
    echo $bicicleta->getInfo();
    echo "<hr>";

    $auto = new Automovil(4,4, 'Manual');
    echo $auto->getInfo();
    echo $auto->getTransmision();



include 'includes/footer.php';