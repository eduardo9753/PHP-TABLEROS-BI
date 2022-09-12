<?php

//MODEL
include_once('model/modelGrafico.php');

//UTILS
include_once('utils/modelMensaje.php');
include_once('utils/modelSession.php');

//DATOS
include_once('data/usuario.php');




//CORREOS
include_once('data/correo.php');



class ControlGrafico
{

    public $GRAFICO;
    public $SESSION;

    public function __construct()
    {
        $this->GRAFICO = new ModeloGrafico();
        $this->SESSION = new ModeloSession();
    }




    /*********************************************************MANTENIMIENTO DE GRAFICOS********************************************************/
    public function Graficos()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            $dataCorreoAprobados = $this->GRAFICO->countRegistroCorreosAprobados();
            $dataCorreoPendientes = $this->GRAFICO->countRegistroCorreosPendientes();
            $dataPaginasAprobados = $this->GRAFICO->countRegistroPaginasAprobados();
            $dataPaginasPendientes = $this->GRAFICO->countRegistroPaginasPendientes();
            $dataAplicativosAprovados = $this->GRAFICO->countRegistroAplicativosAprobados();
            $dataAplicativosPendientes = $this->GRAFICO->countRegistroAplicativosPendientes();
            $dataTotal = $this->GRAFICO->countRegistroTotal();

            //color de links
            if (isset($_REQUEST['ruta']) == 'Graficos') {
                $ruta = 'Graficos';
            }

            include_once('view/graficos/graficos.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /********************************************************************************************************************************************/
}
