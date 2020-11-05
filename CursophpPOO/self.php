<?php 
	class Metodos{
		public function mandarColor($valor){
			if ($valor==1) {
				return "rojo";
			}elseif ($valor==2) {
				return "negro";
			}elseif ($valor==3) {
				return "azul";
			}
		}
		public function darDeAltaColor($tipoColor){
			/*
			$obj = new Metodos();
			return $obj ->mandarColor($tipoColor);
			*/
			return self::mandarColor($tipoColor);
		}
	}

	$obj = new Metodos();
	echo $obj->darDeAltaColor(3);
 ?>