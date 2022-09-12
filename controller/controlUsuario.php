<?php

//MODEL
include_once('utils/modelMensaje.php');
include_once('utils/modelSession.php');
include_once('model/modelGrafico.php');
include_once('model/modelUsuario.php');
include_once('model/modelAdministrador.php');


//DATOS
include_once('data/usuario.php');



//CORREOS
include_once('data/correo.php');



class ControlUsuario
{
    public $MSG;
    public $GRAFICO;
    public $SESSION;
    public $USUARIO;
    public $ADMIN;

    public function __construct()
    {
        $this->MSG = new ModeloMensaje();
        $this->GRAFICO = new ModeloGrafico();
        $this->SESSION = new ModeloSession();
        $this->USUARIO = new ModeloUsuario();
        $this->ADMIN = new ModeloAdministrador();
    }






    /*********************************************************MANTENIMIENTO DE PAGINAS*********************************************************/
    public function verMyTablero()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            $tablero = new Tablero();
            $id_usuario = $_SESSION['id_usuario'];

            //color de links
            if (isset($_REQUEST['id_tablero'])) {
                $tablero->setid_tablero($_REQUEST['id_tablero']);
                $dataTablero = $this->USUARIO->dataMyTableroById($tablero,$id_usuario);

                if ($dataTablero) { //SI ENCUENTRA TABLERO PINTAMOS EL TITULO 
                    if ($_REQUEST['id_tablero'] == $dataTablero->id_tablero) {
                        $active = 'active';
                        $titulo = "Tablero : " . $dataTablero->nombre_tablero;
                    }
                } else { // DE LO CONTRARIO VALIDAMOS SI ESTA ASIGNADO O NO
                    $active = '';
                    $data  = $this->USUARIO->esMiTablero($tablero);
                    if ($data) {
                        $titulo = "Tablero No asignado : " . $data->nombre_tablero . '.  Comuniquese con el Area de Sistemas';
                    } else {
                        $titulo = "Tablero No Existe. Comuniquese con el Area de Sistemas Para la Creacion del Tablero";
                    }
                }
            } else {
                $active = '';
            }

            
            include_once('view/usuario/tablero/verTablero.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
