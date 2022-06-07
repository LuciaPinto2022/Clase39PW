<?php
	class personas_model{
		
		//Declaramos atributos privados
		private $db;
		private $personas;
	 
		//Declaramos un constructor que sirve para incializar los atributos
		public function __construct(){
			
			//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
			//Conectar es la clase y conexion es el metodo
			$this->db = Conectar::conexion();
			//Determinamos que el atributo personas será un array
			$this->personas = array();
			
		}
		
		//Declaramos un metodo para obtener todos los registros de personas
		public function getPersonas(){
			
			$sql = "SELECT * FROM encomienda";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				//Asignamos al atributo personas el resultado de la consulta
				$this->personas[]=$filas;
			}
			//El método devuelve el array resultante
			return $this->personas;
			
		}

	}
?>