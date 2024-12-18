<?php
class homeController{
    public function index(){
        $usuarioQuery=new UsuarioQuery;

        $usuarios=$usuarioQuery->allUsuarios();

        require_once("./views/homeViews/index.php");
    }

    public function create(){   
        require_once("./views/homeViews/create.php");
    }

    public function insert(){
        $usuarioQuery=new UsuarioQuery;

        $usuarioQuery->setNombre(Http::post("nombre"));
        $usuarioQuery->setEmail(Http::post("email"));
        $usuarioQuery->setPassword(Http::post("password"));

        $insert=$usuarioQuery->insertUsuario();

        if($insert){
            header("Location: ".url());
        }else{
            header("Location: ".url("create"));
        }
    }

    public function actualizar($id_usuario){
        $usuarioQuery=new UsuarioQuery;

        $usuario=$usuarioQuery->findUsuario($id_usuario);

        require_once("./views/homeViews/update.php");
    }

    public function update($id_usuario){
        $usuarioQuery=new UsuarioQuery;
        
        $usuarioQuery->setNombre(Http::put("nombre"));
        $usuarioQuery->setEmail(Http::put("email"));
        $usuarioQuery->setPassword(Http::put("password"));
        
        $update=$usuarioQuery->updateUsuario($id_usuario);

        if($update){
            header("Location: ".url());
        }else{
            header("Location: ".url("actualizar/".$id_usuario));
        }
    }

    public function delete($id_usuario){
        $usuarioQuery=new UsuarioQuery;

        $usuarioQuery->deleteUsuario($id_usuario);

        header("Location: ".url());
    }

}
?>