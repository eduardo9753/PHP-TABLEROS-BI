<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloGrafico
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
    public function countRegistroCorreosAprobados()
    {
        try {
            $sql = "SELECT * FROM correo_usuarios WHERE estado = 'APROBADO'";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countRegistroCorreosPendientes()
    {
        try {
            $sql = "SELECT * FROM correo_usuarios WHERE estado = 'PENDIENTE'";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countRegistroPaginasAprobados()
    {
        try {
            $sql = "SELECT * FROM paginas_acceso_usuarios WHERE estado = 'APROBADO'";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countRegistroPaginasPendientes()
    {
        try {
            $sql = "SELECT * FROM paginas_acceso_usuarios WHERE estado = 'PENDIENTE'";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countRegistroAplicativosAprobados()
    {
        try {
            $sql = "SELECT * FROM usuarios_aplicativos WHERE estado = 'APROBADO'";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countRegistroAplicativosPendientes()
    {
        try {
            $sql = "SELECT * FROM usuarios_aplicativos WHERE estado = 'PENDIENTE'";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countRegistroTotal()
    {
        try {
            $sql = "SELECT `id` FROM `correo_usuarios` 
            UNION ALL 
            SELECT `ID` FROM `paginas_acceso_usuarios`
            UNION ALL 
            SELECT `id` FROM `usuarios_aplicativos`";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    /****************************************************************************************************************************************/
}
