<?php
    class Usuario{
        protected $id;
        protected $name;
        protected $email;
        protected $usuario;
        protected $password;
        protected $id_rol;

        //Constructor
        public function __construct($entrada = false){
            if(is_array($entrada)){
                foreach($entrada as $clave=>$valor){
                    $this->$clave=$valor;
                }
            }
        }

        //MÉTODOS
        public function getId(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function getUser(){
            return $this->usuario;
        }
        
        public function getPassword(){
            return $this->password;
        }

        public function getRol(){
            return $this->id_rol;
        }

        // Metodo Seleccionar usuarios
        public static function getUsers(){
            // $items = array();
            // $conexion = Conexion::getConnection();
            
            // $query = "SELECT * FROM usuarios";
            
            // if($result = $conexion->query($query)){
            //     while ($obj = $result->fetch_object('Usuario')) {
            //         $items[] = $obj;
            //     }
            //     $result->close();
            // }else{
            //     return false;
            // }
            // return $items;

            $connection = Conexion::getConnection();
		    $query = "SELECT * FROM usuarios";
            if (!$result = $connection->query($query)) {
                throw new Exception('Error en la consulta: ' . $connection->error);
            } else {
                $items = [];
                while ($fetchResult = $result->fetch_object('Usuario')) {
                    $items[] = $fetchResult;
                }
                return $items;
            }
        }
        
        //Método añadir Registro LoginRegistro
        public function addRecord(){
            // Verificar los campos del formulario
            if(true){
                /**  
                 * Llamamos al método getConnection de la clase Conexión 
                 * con '::' porque el metodo es static 
                **/
                $conexion = Conexion::getConnection();

                $query = "INSERT INTO usuarios (name, email, usuario, password, id_rol) 
                VALUES ('".Conexion::prep($this->name)."',  
                        '".Conexion::prep($this->email)."',
                        '".Conexion::prep($this->usuario)."',
                        '".Conexion::prep($this->password)."',
                        '".Conexion::prep($this->id_rol)."'
                )";
            }

            // Verificar que el correo del usuario no se repita en la BBDD
            $this->_verifyEmail();

            // Verificar que el nombre de usuario no se repita en la BBDD
            $this->_verifyUser();

            $ejecutar = mysqli_query($conexion, $query);

            if($ejecutar){
                $content= '
                    <script>
                        alert ("Usuario insertado exitosamente.");
                        window.location = "../views/home.php";
                    </script>
                ';
                $ok = true;
            }else {
                $error = mysqli_error($conexion);
                $content= '
                    <script>
                        alert ("Inténtalo de nuevo. Usuario no insertado. '.$error.'");
                        
                    </script>
                ';
                $ok = false;
            }

            $data=[
                'estado'=>$ok,
                
                'content'=>$content,
                ];

            mysqli_close($conexion);
            return $data;
        }

        //Método modificar Usuario para
        public function updateUser(){
            if(trim($this->id) && $this->_verifyInput()){
                $conexion = Conexion::getConnection();

                $query = "UPDATE usuarios SET name='$this->name', email='$this->email', usuario='$this->usuario'
                            WHERE id='$this->id'";
                if($conexion->query($query)){
                    return 'Usuario modificado correctamente';
                }else{
                    throw new Exception(mysqli_error($conexion));
                }
            }else{
                throw new Exception('Los datos introducidos no son correctos');
            }
        }

        public static function deleteUserID($id){
            $conexion = Conexion::getConnection();

            $query = "DELETE FROM usuarios WHERE id = $id";

            if($conexion->query($query)){
                $result = 'Usuario Eliminado correctamente';
                return $result;
            }else{
                throw new Exception('No se ha podido Eliminar el usuario');
            }
        }
        // Método coger valor usuario y mostrarlo por pantalla
		public static function getUsuario($usuario){

			$conexion = Conexion::getConnection();
            $verificar_usuario = mysqli_query($conexion,"SELECT usuario FROM usuarios WHERE email = '$usuario'");

            // print_r($verificar_usuario);
            if($verificar_usuario->num_rows > 0){
                $verificar_usuario = $verificar_usuario->fetch_array(MYSQLI_ASSOC);
                return $verificar_usuario['usuario'];
            }
            return '';
		}

        // Devuelve falso si ha habido error
		protected function _verifyInput() {
			$error = false;
			if (!trim($this->name)) {
				$error = true;
			}
			if (!trim($this->email)) {
				$error = true;
			}
            if (!trim($this->usuario)) {
				$error = true;
			}
            // if (!trim($this->password)) {
			// 	$error = true;
			// }
			return !$error;
		}

        private function _verifyEmail(){
            $conexion = Conexion::getConnection();
            $queryEmail = "SELECT * FROM usuarios WHERE email='".Conexion::prep($this->email)."'";

            $verificar_email = mysqli_query($conexion, $queryEmail);

            if(mysqli_num_rows($verificar_email) > 0){
                echo '
                    <script>
                        alert ("Este correo ya está registrado, inténtalo con otro diferente.");
                        window.location = "../views/login_registro.php";
                    </script>
                ';
                exit();
                mysqli_close($conexion);
            }
        }

        private function _verifyUser(){
            $conexion = Conexion::getConnection();
            $queryUsuario = "SELECT * FROM usuarios WHERE usuario='".Conexion::prep($this->usuario)."'";

            $verificar_usuario = mysqli_query($conexion, $queryUsuario);

            if(mysqli_num_rows($verificar_usuario) > 0){
                echo '
                    <script>
                        alert ("Este usuario ya está registrado, inténtalo con otro diferente.");
                        window.location = "../views/login_registro.php";
                    </script>
                ';
                exit();
                mysqli_close($conexion);
            }
        }
    }
?>