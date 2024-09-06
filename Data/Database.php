
<?php
// ! Configuración de conxión a base de datos

$conex = mysqli_connect("localhost", "root", "", "restaurante01");
$conex->set_charset("uft8");

// Verificar conexión
if ($conex) {
    //echo "Conexión exitosa" . "<br>";
}


/*
class Database {

    public $host = "localhost";
    public $db_name = "pija_pariente";
    public $username = "root";
    public $password = "";
    public $conex;

    // Función para crear la conexión a base de datos
    public function getConexion() {
        try{
            // Crear conexión
            $this->conex = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            // Verificar conexión
            if ($this->conex) {
                echo "Conexión exitosa" . "<br>";
            }
            
        }catch(Exception $e){
            echo "Error de conexión" . $e->getMessage();
        }
        return $this->conex;
        //$conex->close();
    }

    
    
}*/

?>
