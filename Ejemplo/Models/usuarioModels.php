<?php

require_once 'config/database.php';

class Usuario
{
    public $id_usuario;
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    private $db;

    public function __construct(){
        $this->db =database::conectar();
    }

    function getId_usuario(){
        return $this->id_usuario;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getApellidos()
    {
        return $this->apellidos;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getPassword()
    {
        return $this->password;
    }

    //Set

    function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }

    function setApellidos($apellidos)
    {
        return $this->apellidos = $apellidos;
    }

    function setEmail($email)
    {
        return $this->email = $email;
    }

    function setPassword($password)
    {
        return $this->password = $password;
    }

    //Metodo que consulte la BD

    public function conseguirTodos(){
        // var_dump($this->db);
        $query = $this->db->query("SELECT * FROM t_usuario");
        return $query;
        echo 'Imprimiendo todos los usuarios.....';
    }


    public function crear(){
        $sql = "INSERT INTO t_usuario (id_usuario, nombre, apellido, correo, password, id_rol) VALUES({$this->id_usuario}, '{$this->nombre}', '{$this->apellidos}', '{$this->email}', '{$this->password}', 1);";
        
        // var_dump($sql);
        $guardar = $this->db->query($sql);
        return $guardar;
    }
   
}
