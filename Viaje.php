<?php
include_once ("Pasajero.php");
class Viaje{
 private $codigo;
 private $destino;
 private $cantidadMaxima;
 private $pasajerosTotales;
 
 public function __construct($codigo, $destino, $cantidadMaxima, $pasajerosTotales ){ 
 $this->codigo = $codigo;
 $this->destino = $destino;
    $this->cantidadMaxima = (int)$cantidadMaxima;
    $this->pasajerosTotales = new pasajero($pasajerosTotales);
 }

 // MÉTODOS GETTERS
 public function getCodigo(){
    return $this->codigo;
 }
 public function getDestino(){
    return $this->destino;
 }
 public function getCantidadMaxima(){
    return $this->cantidadMaxima;
 }
 /*public function getPasajerosTotales(){
    return $this->pasajerosTotales;
 }
 */

 // MÉTODOS SETTERS

 public function setCodigo($codigo){
    $this->codigo = $codigo;
 }
 public function setDestino($destino){
    $this->destino = $destino;
 }
 public function setCantidadMaxima($cantidadMaxima){
    $this->cantidadMaxima = (int)$cantidadMaxima;
 }

 /*public function setPasajerosTotales($pasajerosTotales){
    $this->pasajerosTotales = $pasajerosTotales;
 }
 */
 
 // MÉTODOS PROPIOS

 public function cambiarCodigo($nuevoCodigo){
    return $this->setCodigo($nuevoCodigo);
 }
public function cambiarDestino($nuevoDestino){
    return $this->setDestino($nuevoDestino);
}
public function cambiarCapacidadMaxima($nuevoDestino){
    return $this->setCantidadMaxima($nuevoDestino);
}


 public function __toString(){
    $cartel = "Código del viaje: ". $this->getCodigo()."\n";
    $cartel .= "Destino: ". $this->getDestino()."\n";
    $cartel .= "Cantidad máxima ". $this->getCantidadMaxima()."\n";

    return $cartel;
 }
}