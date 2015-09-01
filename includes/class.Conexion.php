<?php 
  
  class conexion extends mysqli{
  	
  	public function __construct(){
  		parent::__construct('localhost','root','','db_smgroup');
  		$this->query("SET NAMES 'utf8';");
  		$this->connect_errno == true ? dir('Error en la conexion') : $conexion = 'conectado';
  		// echo $conexion;
  		unset($conexion);
  	}

    public function recorrer($y){
      return mysqli_fetch_array($y);
    }
  }

?>