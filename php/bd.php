<?php

class BD{
	private $user = "";
	private $pass = "";
	private $base = "";
	private $conexion;
	
	public function __construct($baseNombre, $usu, $contra=""){
		$this->user = $usu;
		$this->pass = $contra;
		$this->base = $baseNombre;
	}
	
	public function conectar(){
		$this->conexion=mysql_connect("localhost",$this->user,$this->pass) 
		  or die("Problemas en la conexion");
		  
		mysql_select_db($this->base,$this->conexion) or
		  die("Problemas en la seleccion de la base de datos");
		  
		echo "Conexion exitosa a la BD";
	}
	
	public function desconectar(){
		mysql_close($this->conexion);
	}
	
	public function insertar($sql){
		mysql_query($sql,$this->conexion) 
		 or die("Problemas en el insertar".mysql_error());
		mysql_close($this->conexion);
	}
	
	public function consultar($sql){
		$registros = mysql_query($sql,$this->conexion) 
		 or die("<br>Problemas al consultar:".mysql_error());
		 
		return $registros;
	}
}

?>
