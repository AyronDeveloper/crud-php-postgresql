<?php
class UsuarioQuery{
    use Usuario;

    private $pgsql;

    public function __construct(){
        $this->pgsql=CnxPostgresql::connect();
    }

    public function allUsuarios(){
        $query="SELECT * FROM tb_usuarios WHERE estado=1";
        $dataQuery=$this->pgsql->prepare($query);
        $dataQuery->execute();

        $data=$dataQuery->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function findUsuario($id_usuario){
        $query="SELECT * FROM tb_usuarios WHERE id_usuario=?";
        $dataQuery=$this->pgsql->prepare($query);
        $dataQuery->execute([$id_usuario]);

        $data=$dataQuery->fetch(PDO::FETCH_ASSOC);

        return $data;
    }   

    public function insertUsuario(){
        date_default_timezone_set('America/Lima');

        $nombre=$this->getNombre();
        $email=$this->getEmail();
        $password=$this->getPassword();

        $query="INSERT INTO tb_usuarios VALUES(DEFAULT,:nombre,:email,:password,:image,:estado,:create_date,:update_date)";
        $resultQuery=$this->pgsql->prepare($query);

        $resultQuery->bindParam(":nombre",$nombre);
        $resultQuery->bindParam(":email",$email);
        $resultQuery->bindParam(":password",$password);
        $resultQuery->bindValue(":image",null);
        $resultQuery->bindValue(":estado",1);
        $resultQuery->bindValue(":create_date",date("Y-m-d H:i:s"));
        $resultQuery->bindValue(":update_date",date("Y-m-d H:i:s"));

        $result=$resultQuery->execute();

        return $result;
    }

    public function updateUsuario($id_usuario){
        date_default_timezone_set('America/Lima');

        $query="UPDATE tb_usuarios SET nombre=?,email=?,password=?,update_date=? WHERE id_usuario=?";
        $resultQuery=$this->pgsql->prepare($query);
        $result=$resultQuery->execute([
            $this->getNombre(),
            $this->getEmail(),
            $this->getPassword(),
            date("Y-m-d H:i:s"),
            $id_usuario
        ]);

        return $result;
    }

    public function deleteUsuario($id_usuario){
        date_default_timezone_set('America/Lima');

        $query="UPDATE tb_usuarios SET estado=?,update_date=? WHERE id_usuario=?";
        $resultQuery=$this->pgsql->prepare($query);
        $result=$resultQuery->execute([
            0,
            date("Y-m-d H:i:s"),
            $id_usuario
        ]);

        return $result;
    }
}
?>