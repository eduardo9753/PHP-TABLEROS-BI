<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloLogin
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



    /*****************************************************************LOGEO DEL USUARIO*******************************************************/
    public function logeo(Usuario $usuario)
    {
        try {
            $sql = "SELECT * FROM usuario usu
            INNER JOIN perfil p ON usu.id_perfil = p.id_perfil
            WHERE usu.nombre_usuario=? AND usu.contra_usuario=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array($usuario->getnombre_usuario(), $usuario->getcontra_usuario()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            throw $th;
        }
    }
    /****************************************************************************************************************************************/
}
