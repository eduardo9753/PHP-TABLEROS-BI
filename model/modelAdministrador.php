<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloAdministrador
{

    public $PDO;
    public $MYSQL;

    public function __construct()
    {
        try {
            $this->PDO = new ConexionOracle(); //INICIANDO LA CONEXION A LA BD
            $this->MYSQL = new ClassConexion();
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //LISTA DE TABLEROS
    public function dataTableros()
    {
        try {
            $sql = "SELECT * FROM tablero";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //INSERTAR TABLERO
    public function insertTablero(Tablero $tablero)
    {
        try {
            $sql = "INSERT INTO `tablero` (`nombre_tablero`, `url_tablero`) VALUES (?,?)";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $tablero->getnombre_tablero(),
                $tablero->geturl_tablero(),
            ));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZAR TABLERO
    public function updateTablero(Tablero $tablero)
    {
        try {
            $sql = "UPDATE tablero SET nombre_tablero=?,
            url_tablero=? WHERE id_tablero =?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $tablero->getnombre_tablero(),
                $tablero->geturl_tablero(),
                $tablero->getid_tablero()
            ));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function dataGrupos()
    {
        try {
            $sql = "SELECT * FROM grupo";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function insertGrupo(Grupo $grupo)
    {
        try {
            $sql = "INSERT INTO grupo (nombre_grupo,estado_grupo) VALUES (?,?)";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $grupo->getnombre_grupo(),
                $grupo->getestado_grupo()
            ));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function updateGrupo(Grupo $grupo)
    {
        try {
            $sql = "UPDATE grupo SET nombre_grupo =?, estado_grupo=? WHERE id_grupo=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $grupo->getnombre_grupo(),
                $grupo->getestado_grupo(),
                $grupo->getid_grupo()
            ));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function dataTablerosById(Tablero $tablero)
    {
        try {
            $sql = "SELECT * FROM tablero where id_tablero=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array($tablero->getid_tablero()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function dataUsuario()
    {
        try {
            $sql = "SELECT * FROM usuario usu
            INNER JOIN perfil p ON p.id_perfil = usu.id_perfil";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function dataUsuarioById(Usuario $usuario)
    {
        try {
            $sql = "SELECT * FROM usuario where id_usuario=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array($usuario->getid_usuario()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function insertUsuario(Usuario $usuario)
    {
        try {
            $sql = "INSERT INTO usuario(nombre_usuario,contra_usuario,id_perfil) VALUES (?,?,?)";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $usuario->getnombre_usuario(),
                $usuario->getcontra_usuario(),
                $usuario->getid_perfil()
            ));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function insertUsuarioGrupo(Grupo $grupo, Usuario $usuario)
    {
        try {
            $sql = "INSERT INTO usuario_grupo(id_usuario,id_grupo) VALUES (?,?)";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $usuario->getid_usuario(),
                $grupo->getid_grupo()
            ));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function insertGrupoTablero(Grupo $grupo, Tablero $tablero)
    {
        try {
            $sql = "INSERT INTO grupo_tablero(id_grupo,id_tablero) VALUES (?,?)";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $grupo->getid_grupo(),
                $tablero->getid_tablero()
            ));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function existeUsuarioGrupo(Grupo $grupo, Usuario $usuario)
    {
        try {
            $sql = "SELECT * FROM usuario_grupo ug WHERE ug.id_usuario =? AND ug.id_grupo=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $usuario->getid_usuario(),
                $grupo->getid_grupo()
            ));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function existeGrupoTablero(Grupo $grupo, Tablero $tablero)
    {
        try {
            $sql = "SELECT * FROM grupo_tablero ug WHERE ug.id_grupo =? AND ug.id_tablero=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $grupo->getid_grupo(),
                $tablero->getid_tablero()
            ));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function dataPerfil()
    {
        try {
            $sql = "SELECT * FROM perfil p WHERE p.id_perfil IN(2)";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function dataGrupoById(Grupo $grupo)
    {
        try {
            $sql = "SELECT * FROM grupo where id_grupo=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array($grupo->getid_grupo()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
