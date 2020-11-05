<?php 
	class clasePadre{
		public function metodoPadre(){
			return "hola desde padre";
		}
		public function metodo1(){
			return "este es metodo padre";
		}
	}

	class claseHijo extends clasePadre{
		public function metodoHijo(){
			return parent::metodo1();
		}
		public function metodo1(){
			return "este es metodo hijo";
		}
	}
	/*
	La herencia es obtener todas las propiedades de una clase a otra, mediante la palabra reservada extends
	*/
	/*
	$obj = new claseHijo();
	echo $obj->metodoPadre();
	*/
	//Instancia rapida o de doble puntacion
	echo claseHijo::metodoHijo();
 ?>