<?php
/**
* @author Rafael Cobos
* @version 1.0
*/

/**
* Divide dos números
* @param float $num1 primer número
* @param floar $num2 segundo número
* @return float resultado de la división
* 
*/
   function dividir($num1, $num2){
      $resultado = $num1 / $num2;
      return $resultado;
   }
/**
* Verifica si un número es múltiplo de 2
* @param integer $num número
* @return boolean si es múltiplo devuelve true, false en caso contrario 
*/
   function verificarMultiplo2($num){
      if($num % 2 == 0){
         return true;
      }else{
         return false;
      }
   }
?>
