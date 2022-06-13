<?php 
class Operaciones
{
 public $n1;
 public $n2;
 public $resultado;

 function __construct(){
 	$this->n1=10;
 	$this->n2=25;
 }
    function sumar(){
    return $this->resultado=$this->n1+$this->n2;	
    }
 	 function restar(){
    return $this->resultado=$this->n1-$this->n2;	
    }
     function multiplicar(){
    return $this->resultado=$this->n1*$this->n2;	
    }
     function dividir(){
    return $this->resultado=$this->n1/$this->n2;	
    }
          
} 
$Operaciones=new Operaciones();
echo $Operaciones->sumar();
echo $Operaciones->restar();
echo $Operaciones->multiplicar();
echo $Operaciones->dividir();
?>