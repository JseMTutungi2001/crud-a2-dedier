<?php 
Class Connection{
    //Credenciales de usuario para conectarse a la base de datos bdcliente
    private $servidor = "mysql:host=localhost;dbname=bdcliente";
    private $usuarioBD = "root"; //nombre de usuario para conectarse a MySQL
    private $claveBD = ""; //clave para conectarse a MySQL
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);   
    
    protected $conn; //    $conn es la variable en donde se va a almacenar la conexi�n con MySQL
     
     //Funci�n para conectarse a la base de datos
    public function conectarBD(){
         try{
             $this->conn = new PDO($this->servidor, $this->usuarioBD, $this->claveBD, $this->options);
             return $this->conn;
         }
         catch (PDOException $e){
             echo "Ocurrió un problema con la conexión: " . $e->getMessage();
         }
   
    }
   
   //Funci�n para desconectarse de la base de datos
    public function cerrarBD(){
           $this->conn = null;
     }
   
   }