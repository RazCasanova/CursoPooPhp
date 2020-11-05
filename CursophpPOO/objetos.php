<?php 

	class miClase{
		//Atributos
		public $resultado=0;

		//Metodos
		public function miMetodo($v1,$v2){
			$this->resultado=$v1+$v2;

			return $this->resultado;
		}
	}//Fin de la clase miClase

	//Instancias o delcarar un metodo
	$miObjeto = new miClase();
	echo $miObjeto->miMetodo(5,5);
 ?>