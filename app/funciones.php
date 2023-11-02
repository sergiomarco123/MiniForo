<?php
function usuarioOk($usuario, $contraseña) :bool {
   if(strlen($usuario)>=8&&$contraseña==strrev($usuario)){
      return ($usuario == $usuario);
   }
   elseif(strlen($usuario)<8){
      echo"El usuario debe tener 8 o mas caracteres";
      return false;
   }   
   else{
      echo"Contraseña incorrecta";
      return(false);
   }  
    
}
function cPalabras($texto){
   $palabras = str_word_count($texto, 1);
   $contadorPalabras = array_count_values($palabras);
   return count($contadorPalabras);
   
}
function palabraMasRepetidaf($texto){
   $palabras = str_word_count($texto, 1);
   $contadorPalabras = array_count_values($palabras);
   $palabraMasRepetida = '';
   $frecuenciaMasAlta = 0;
   foreach ($contadorPalabras as $key => $value) {
      if ($value > $frecuenciaMasAlta) {
         $palabraMasRepetida = $key;
         $frecuenciaMasAlta = $value;
      }
   }
   return $palabraMasRepetida;
}
