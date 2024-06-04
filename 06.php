<?php 
    
    include 'includes/header.php';
    
    // La interfaz define la forma
    // La interfaz dice que funciones se tienen y que retornan.
    // La validación es trabajo de la clase
    interface TransporteInterfaz {
        public function getInfo() : string;
        public function getRuedas() : int;
        //public function getColor() :string; si se pone una función aqui que NO esta en la clase marca error
    }

    class Transporte implements TransporteInterfaz {
        public function __construct(protected int $ruedas, protected int $capacidad)
        {

        }
        public function getInfo() : string {
            return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " de personas ";
        }
        public function getRuedas() : int {
            return $this->ruedas;
        }
    }


include 'includes/footer.php';