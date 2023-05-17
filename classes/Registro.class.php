<?php

class Registro{
    private $user;
    private $correo;
    private $password;

    function __construct($usu, $email, $pass){
        $this->user = $usu;
        $this->correo = $email;
        $this->password = $pass;
    }

    function getUsername(){
        return $this->user;
    }

    function getCorreo(){
        return $this->correo;
    }

    function getPassword(){
        return $this->password;
    }

    function setUsername($usr){
        $this->user = $usr;
    }

    function setCorreo($em){
        $this->correo = $em;
    }

    function setPassword($pwd){
        $this->password = $pwd;
    }
}

?>