//Esta clase está mala >:o

<?php
class Controlador_logueo{
	private $acceso;	// boolean
	
	public function __construct(){
		$this->acceso = false;
	}
	
	public function get_Acceso(){
		return $this->acceso;
	}
	
	public function set_Acceso($acc){
		$this->acceso = $acc;
	}
}


?>
