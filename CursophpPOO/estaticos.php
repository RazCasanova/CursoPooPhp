<?php 

	class miClase{
		public $mensaje="Hola";

		public function hola(){
			return "hola";
		}
		public static function metodo(){
			/*
			return this->$mensaje;
			*/
			return self::hola();
		}
	}

	echo miClase::metodo();
 ?>