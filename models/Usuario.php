<?php
trait Usuario{

    private $id_usuario;
    private $nombre;
    private $email;
    private $password;
    private $image;
    private $estado;


    public function setIdUsuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }
    public function getIdUsuario(){
        return $this->id_usuario;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password=$password;
    }
    public function getPassword(){
        return $this->password;
    }

    public function setImage($image){
        $this->image=$image;
    }
    public function getImage(){
        return $this->image;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function getEstado(){
        return $this->estado;
    }

}
?>