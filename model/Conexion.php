<?php
class Conexion{

    //Variable privada
    private $con;
    //Constructor
    public function __construct()
    {       
        //Se crea la conexion con un objeto nuevo de la clase mysqli
        $this->con=new mysqli("localhost","root","kali","mvctutorial");
    }

    //Método para recuperar a todos los usuarios de la base de datos
    public function getUsuarios(){
        $query = $this->con->query('SELECT * FROM usuarios');

        $retorno = [];
        $i=0;
        //Se recorre el arreglo de la consulta
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }
        //Se retorna el arreglo
        return $retorno;
    }
    
}

?>