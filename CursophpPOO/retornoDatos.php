<?php 

	class retornoDatos{
		/*
		Tipo String
		Tipo Entero
		Tipo arreglo
		tipo JSON
		*/
		public function retornaString($edad){
			if ($edad > 18) {
				return "Es mayor de edad";
			}else{
				return "Es menor de edad";
			}
		}

		public function retonaEntero($valor){
			if ($valor>0) {
				return 1;
			}else{
				return 0;
			}
		}

		public function retonaArreglo($ciclos){
			$datos=array();

			for($i=0;$i<$ciclos;$i++) {
				$datos[$i]=$i;
			}
			return $datos;
		}

		public function retornaJson(){
			$arr = array(
				"hdd"=> 500,
				"pantalla"=> 21,
				"ram" => 8
			);
			return json_encode($arr);
		}
	}

	$cadena = new retornoDatos();
	var_dump($cadena->retornaString(20));
	echo "<br>";
	var_dump($cadena->retonaEntero(1));
	echo "<br>";
	var_dump($cadena->retonaArreglo(10));
	echo "<br>";
	var_dump($cadena->retornaJson());
 ?>