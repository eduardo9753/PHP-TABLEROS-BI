<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloMensaje
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


    /*************************************************************MESAGES DE ALERTAS PARA MOSTRARLE AL USUARIO******************************/
    public function success($message = "")
    {
        $resultado = '
               <div class="alert alert-success alert-dismissible fade show mover-izquierda" role="alert">
                  <strong>Message!</strong> ' . $message . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               </div>
             ';
        echo $resultado;
    }
    public function error($message = "")
    {
        $resultado = '
              <div class="">
                <div class="alert alert-danger alert-dismissible fade show mover-izquierda" role="alert">
                  <strong>Message!</strong> ' . $message . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </div>
             ';
        echo $resultado;
    }
    /*************************************************************************************************************************************/
}
