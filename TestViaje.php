<?php
include_once 'Viaje.php';

function datosPrecargados() {
    $datos = array(
        'codigo'=> '283949328403','destino'=> 'Bariloche','cantidadMaxima'=> 10
    );

    return $datos;
}
function pasajerosPrecargado() {
    $pasajeros = array(
        ['nombre'=> 'alexis','apellido'=> 'muñoz','dni'=> '45987542',],
        ['nombre'=> 'damian','apellido'=> 'fuentes','dni'=> '38679537',],
        ['nombre'=> 'Luana','apellido'=> 'rivas','dni'=> '67028735',],
        ['nombre'=> 'Sebastian','apellido'=> 'Cofré','dni'=> '34567465',],
        ['nombre'=> 'Diego','apellido'=> 'Lopez','dni'=> '43458162',],
        ['nombre'=> 'Mauro','apellido'=> 'Cuello','dni'=> '39419347',],
        ['nombre'=> 'Pilar','apellido'=> 'Urrutia','dni'=> '67862567',],
        ['nombre'=> 'Diana','apellido'=> 'Gonzales','dni'=> '20209734',],
        ['nombre'=> 'Sonia','apellido'=> 'Wagner','dni'=> '46827451',],
        ['nombre'=> 'Martin','apellido'=> 'Soto','dni'=> '45987542',],
    ) ;

    return $pasajeros;
}

function viajePrecargado() {
    echo print_r(datosPrecargados());
    echo print_r(pasajerosPrecargado());
}
function menuOpciones(){
    do{
        echo "1- Ver viajes precargados \n";
        echo "2- Modificar viajes precargados \n";
    
        $opcion = trim(fgets(STDIN));

        if ($opcion < 1 || $opcion > 2) {
            system('clear');
            echo "La opción es inválida, vuelva a intentarlo: \n\n\n";
        }
    }while ($opcion < 1 || $opcion > 2);
    return $opcion;
}

function menuOpcionesPasajeros(){
    do{
        echo "¿Qué desea cambiar? \n";
        echo "1- Nombre \n";
        echo "2- Apellido \n";
        echo "3- DNI \n";
        
    
        $opcion = trim(fgets(STDIN));

        if ($opcion < 1 || $opcion > 3) {
            system('clear');
            echo "La opción es inválida, vuelva a intentarlo: \n\n\n";
        }
    }while ($opcion < 1 || $opcion > 3);
    return $opcion;
} 

function menuModificacion(){
    do{
        echo "¿Qué desea cambiar? \n";
        echo "1- Código del viaje \n";
        echo "2- Destino del viaje \n";
        echo "3- Cantidad máxima de pasajeros \n";
        echo "4- Dato de algún pasajero \n";
    
        $opcion = trim(fgets(STDIN));

        if ($opcion < 1 || $opcion > 4) {
            system('clear');
            echo "La opción es inválida, vuelva a intentarlo: \n\n\n";
        }
    }while ($opcion < 1 || $opcion > 4);
    return $opcion;
}
$opcion = menuOpciones();
if ($opcion == 1) {
    viajePrecargado();
}

if($opcion == 2) {
   $opcion = menuModificacion();
   $datos = datosPrecargados();

   $codigo =  $datos['codigo'];
   $destino = $datos['destino'];
   $cantidadMaxima = $datos['cantidadMaxima'];
   $pasajerosTotales = pasajerosPrecargado();

   $viaje = new viaje($codigo, $destino, $cantidadMaxima, $pasajerosTotales);

   if ($opcion == 1){
        echo "Ingrese un nuevo codigo \n";
        $codigo = trim(fgets(STDIN));
        $viaje->cambiarCodigo($codigo);
   }
   if ($opcion == 2){
    echo "Ingrese el nuevo destino \n";
    $codigo = trim(fgets(STDIN));
    $viaje->cambiarDestino($destino);
}
if ($opcion == 3){
    echo "Ingrese una nueva capacidad maxima \n";
    $codigo = trim(fgets(STDIN));
    $viaje->cambiarDestino($cantidadMaxima);
}
if ($opcion == 4){
    echo "Eliga un pasajero del 1 al " . count($pasajerosTotales) . "\n";
    $nroPasajero = trim(fgets(STDIN));

    $opcion = menuOpcionesPasajeros();

    if ($opcion == 1){
        echo "Ingrese un nuevo nombre \n";
        $nombre = trim(fgets(STDIN));
        $viaje->cambiarNombre($nombre);
   }
   if ($opcion == 2){
    echo "Ingrese un nuevo apellido \n";
    $apellido = trim(fgets(STDIN));
    $viaje->cambiarApellido($apellido);
}
if ($opcion == 3){
    echo "Ingrese un nuevo DNI \n";
    $DNI = trim(fgets(STDIN));
    $viaje->cambiarDni($DNI);
}    
}
}


/*

// include_once 'Pasajero.php';



cargarPasajeros($cantMaximaPasajeros){
    for ($i = 1, $i <= $cantMaximaPasajeros, $i++) {
        echo "Datos del pasajero Nª" . $i. ": \n";

        echo "Ingrese el nombre \n";
        $nombre = trim(fgets(STDIN));
        echo "Ingrese el apellido \n";
        $apellido = trim(fgets(STDIN));
        echo "Ingrese el número de documento \n";
        $numeroDocumento = trim(fgets(STDIN));

    }
}

$opcion = menuOpciones();

cargarViaje(){
    echo "Ingrese el código del viaje \n";
    $codViaje = trim(fgets(STDIN));
    echo "Ingrese el destino \n";
    $destino = trim (fgets(STDIN));
    echo "Ingrese la cantidad máxima de pasajeros \n";
    $cantMaximaPasajeros = trim(fgets(STDIN));
    $TotalPasajeros = cargarPasajeros($cantMaximaPasajeros);
}

if ($opcion == 1) {
    cargarViaje();
}
if ($opcion == 2) {
    verViajesRealizados();
}
if ($opcion == 3) {
    modificarDatosViajesRealizados();
}

*/
