<?php 
    
    include 'includes/header.php';

    // Con composer no se tiene que procupar por las clases, el las importa
    require 'vendor/autoload.php';

    // Incluir las otras clases
    //require 'clases/Clientes.php';
    //require 'clases/Detalles.php';

    use App\Detalles;
    use App\Clientes;
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    $key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];

/**
 * IMPORTANT:
 * You must specify supported algorithms for your application. See
 * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
 * for a list of spec-compliant algorithms.
 */
$jwt = JWT::encode($payload, $key, 'HS256');
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

print_r($decoded);

/*
 NOTE: This will now be an object instead of an associative array. To get
 an associative array, you will need to cast it as such:
*/

$decoded_array = (array) $decoded;

/**
 * You can add a leeway to account for when there is a clock skew times between
 * the signing and verifying servers. It is recommended that this leeway should
 * not be bigger than a few minutes.
 *
 * Source: http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html#nbfDef
 */
JWT::$leeway = 60; // $leeway in seconds
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

    $detalles = new Detalles();
    $clientes = new Clientes();

    // PHP tiene autoload, para no tener tanto require's se puede crear una función
    //function mi_autoload($clase) {
        //echo $clase;
        //$partes = explode('\\', $clase);
        //require __DIR__ . '/clases/' . $partes[1] . '.php';
    //}

    //spl_autoload_register('mi_autoload');

    // NO se puede re-declarar la clase de clientes
    //class Clientes {
        //public function __construct()
        //{
            //echo "Desdel el 08.php";
        //}
    //}

    // Previo al nombre de la clase de le pone el nombre del namespace
    // Varias clases pueden tener el mismo nameespace
    
    //$clientes1 = new Clientes();

include 'includes/footer.php';