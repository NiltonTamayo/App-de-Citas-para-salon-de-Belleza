<?php

namespace Model;

class Usuario extends  ActiveRecord{
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 
    'password', 'telefono', 'admin', 'confirmado', 'token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    public function __construc($args = [] ) {
        $this -> id = $args['id'] ?? null;
        $this -> nombre = $args['nombre'] ?? '';
        $this -> apellido = $args['apellido'] ?? '';
        $this -> email = $args['email'] ?? '';
        $this -> password = $args['password'] ?? '';
        $this -> telefono = $args['telefono'] ??  '';
        $this -> admin = $args['admin'] ?? null;
        $this -> confirmado = $args['confirmado'] ?? null;
        $this -> token = $args['token'] ?? '';



    }
    //Mensaje de validacion para la creacion de una cuenta

    public function validarNuevaCuenta(){
        if(!$this->nombre){
            self::$alertas['nombre'][] = 'EL nombre  es obligatorio';
        }
        if(!$this->apellido){
            self::$alertas['error'][] = 'EL apellido es obligatorio';
        }
        if(!$this->email){
            self::$alertas['error'][] = 'EL email es obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'][] = 'EL password es obligatorio';
        }
       if(strlen($this->password) < 6) {
        self::$alertas['error'][] = 'EL password debe tener al menos 6 caracteres ';
       }
        return self::$alertas;
    }
    //Revisa si el usuario ya existe
    public function existeUsuario() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";


        $resultado = self::$db->query($query);

        
        if($resultado->num_rows){
            self::$alertas['error'][] = 'El usuario ya esta registrado';
        }
        
        return $resultado;
    }

        public function hashPassword() {
            $this->password = password_hash($this->password, PASSWORD_BCRYPT);
        }

        public function crearToken() {
            $this->token = uniqid();
        }
            
        

}