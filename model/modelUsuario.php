<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloUsuario
{

    public $PDO;
    public $MYSQL;

    public function __construct()
    {
        try {
            $this->PDO = new ConexionOracle(); //INICIANDO LA CONEXION A LA BD
            $this->MYSQL = new ClassConexion();
        } catch (Exception $th) {
            throw $th;
        }
    }





    /***********************************************CRUD DE CORREOS CON USUARIOS************************************************************/
    public function dataMyTableroById(Tablero $tablero,$id_usuario)
    {
        try {
            //$sql = "SELECT * FROM tablero t WHERE t.id_tablero=?;";
            $sql = "SELECT * FROM grupo_tablero gt
            INNER JOIN grupo g ON g.id_grupo = gt.id_grupo
            INNER JOIN tablero t ON t.id_tablero = gt.id_tablero
            INNER JOIN usuario_grupo ug ON ug.id_grupo = g.id_grupo
            INNER JOIN usuario u ON u.id_usuario = ug.id_usuario
            WHERE t.id_tablero = ? AND u.id_usuario = $id_usuario";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array($tablero->getid_tablero()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function esMiTablero(Tablero $tablero)
    {
        try {
            $sql = "SELECT * FROM tablero t WHERE t.id_tablero=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array($tablero->getid_tablero()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function dataTablerosByIdUsuario($usuario,$nombre_grupo)
    {
        try {
            $sql = "SELECT * FROM grupo_tablero gt
            INNER JOIN grupo g ON g.id_grupo = gt.id_grupo
            INNER JOIN tablero t ON t.id_tablero = gt.id_tablero
            INNER JOIN usuario_grupo ug ON ug.id_grupo = g.id_grupo
            INNER JOIN usuario u ON u.id_usuario = ug.id_usuario
            WHERE u.id_usuario = ? AND g.nombre_grupo IN('$nombre_grupo')";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array($usuario));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function dataTablerosByNombreGrupo($usuario)
    {
        try {
            $sql = "SELECT DISTINCT g.nombre_grupo FROM grupo_tablero gt
            INNER JOIN grupo g ON g.id_grupo = gt.id_grupo
            INNER JOIN tablero t ON t.id_tablero = gt.id_tablero
            INNER JOIN usuario_grupo ug ON ug.id_grupo = g.id_grupo
            INNER JOIN usuario u ON u.id_usuario = ug.id_usuario
            WHERE u.id_usuario = $usuario";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
