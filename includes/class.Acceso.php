<?php 

class Acceso {

	protected $user;
	protected $pass;
	protected $email;
	

    public function __construct($usuario,$password,$email){
    	$this->user = $usuario;
        $this->pass = $password;
        $this->email = $email;
	}
	
	public function Login(){
		$db = new conexion();
		$sql = $db->query("SELECT nombre,password FROM usuarios 
		WHERE nombre='$this->user' OR password='$this->pass';");
		$valor = $db->recorrer($sql);

		if($valor['nombre'] == $this->user and $valor['password'] == $this->pass) {
			session_start();
			$_SESSION['user'] = $this->user;
			header('location: usuarios.php');

		}else{
			header('location: index.php');
		}
    }

	public function Registro(){
		$db = new conexion();
        
        $sql = $db->query("SELECT nombre,email FROM usuarios 
        WHERE nombre='$this->user' OR email='$this->email';");
        $existe = $db->recorrer($sql);

        if($existe ['nombre'] != $this->user and $existe ['email'] != $this->email) {
            $db->query("INSERT INTO usuarios (nombre,password,email) VALUES ('$this->user','$this->pass','$this->email');"); 
		    session_start();
            $_SESSION['user'] = $this->user;
            header('location: usuarios.php');
		}else if ($existe ['nombre'] == $this->user) {
			echo "el usuario ya existe";
		}else if ($existe ['email'] == $this->email) {
			echo "el emailya existe";
	    }

    }
}
  ?>