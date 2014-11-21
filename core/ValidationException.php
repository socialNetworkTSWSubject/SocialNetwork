<?php
//file: core/ValidationException.php
/**
 * Class ValidationException
 * 
 * Incluye un array de errores para la validaci�n de datos.
 *
 * El array de errores contiene validaci�n de errores.
 * 
 * @author jenifer <jeny-093@hotmail.com>
 * @author adrian <adricelixfernandez@gmail.com>
 */
class ValidationException extends Exception {
  
  /**
   * array de errores
   * @var mixed
   */
  private $errors = array();
  
  public function __construct(array $errors, $msg=NULL){
    parent::__construct($msg);
    $this->errors = $errors;
  }
  
  /**
   * Devuelve la validaci�n de errores
   * 
   * @return mixed La validaci�n de errores
   */
  public function getErrors() {
    return $this->errors;
  }
}