<?php
	session_start();
    Class Connection{
 
    private $server = "mysql:host=localhost;dbname=vetdog";
    private $username = "root";
    private $password = "pelos2012";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $conn;
    
    public function open(){
        try{
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        }
        catch (PDOException $e){
            echo "Hubo un problema con la conexión: " . $e->getMessage();
        }
 
    }
 
    public function close(){
        $this->conn = null;
    }
 
}

	if(isset($_GET['id'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM pet WHERE id_pet = '".$_GET['id']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Mascota borrada' : 'Hubo un error al borrar la mascota';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccionar miembro para eliminar primero';
	}

	header('location: ../../folder/mascotas');

?>