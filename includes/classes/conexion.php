<?php
    class Conexion{
        // Propiedades protegidas
		private static $_mysqlUser='root';
        private static $_mysqlPass='';
        private static $_mysqlDb='miproyectorol';
        private static $_hostName='localhost';
        private static $_connection=NULL; // A través de esta variable hacemos el patrón Singleton
                                        

        // Constructor Singleton (garantiza que una clase no sea instanciable)
        // Clase no instanciable (private)
        private function __construct($entrada=false){
        }		

	    //Métodos

		// Obtiene conexión SINGLETON
		public static function getConnection(){
			if (!self::$_connection){//Comprobamos que no hemos creado la conexión antes
				self::$_connection = new mysqli(self::$_hostName, self::$_mysqlUser,
				self::$_mysqlPass,self::$_mysqlDb); //Como no está creada, la creamos
				if (self::$_connection->connect_error){
					die('Error de conexión: ' . self::$_connection->connect_error); 
				}
			}

			return self::$_connection; //Devolvemos la conexión creada o ya existente
		}		

		public static function prep($valor){
			// Escapa caracteres especiales para prevenir inyecciones SQL 
			$valor = self::$_connection->real_escape_string($valor);
			return $valor;	
		}		
    }
?>
