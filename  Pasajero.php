<?php

class Pasajero{
    private $pasajeros;
    private $indice;

    public function __construct($arrayPasajeros, $indice){
        $this->pasajeros=$arrayPasajeros;
        $this->indice = $indice;
    }

    public function getPasajeros(){
        return $this->pasajeros;
    }
    public function getIndice(){
        return $this->indice;
    } 
    

    public function __setPasajeros($pasajeros){
        $this->pasajeros = $pasajeros;
    }
    public function setIndice($indice){
        $this->indice = $indice;
    } 

    public function obtenerNombre(){
        $coleccionPasajeros = getPasajeros();
        $nombre = $coleccionPasajero[$this->getIndice()]["nombre"];
        return $nombre;  
    }
    
    public function obtenerApellido(){
        $coleccionPasajeros = getPasajeros();
        $apellido = $coleccionPasajero[$this->getIndice]["apellido"];
        return $apellido; 
    } 

    public function obtenerDNI(){
        $coleccionPasajeros = getPasajeros();
        $DNI = $coleccionPasajeros[$this->getIndice()]["dni"];  
        return $DNI;
    }

    public function cambiarNombre($nombre) {
        
    }

    public function __toString(){
        (string)$cartel = "Nombre " . $this->getNombre() . "\n";
        (string)$cartel -= "Apellido " . $this->getApellido() . "\n";
        (string)$cartel -= "DNI: ". $this->getDni() . "\n";

        return $cartel;
    }
}