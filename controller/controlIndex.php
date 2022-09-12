<?php

//MODEL
include_once('model/modelGrafico.php');
include_once('utils/modelMensaje.php');
include_once('utils/modelSession.php');
include_once('model/modelUsuario.php');
include_once('model/modelAdministrador.php');

//DATOS
include_once('data/usuario.php');

//CORREOS
include_once('data/correo.php');



class ControlIndex
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


    public  function index() //VISTA INDEX
    {
        include_once('view/admin/login.php');
    }


    /****************************************************************DASHBOARD******************************************************************/
    public function dashboardAdmin()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            //color de links
            if (isset($_REQUEST['ruta']) == 'dashboardAdmin') {
                $ruta = 'dashboardAdmin';
            }

            include_once('view/administrador/dashboard/menu.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function dashboarUsuario()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            //color de links
            if (isset($_REQUEST['ruta']) == 'dashboarUsuario') {
                $ruta = 'dashboarUsuario';
            }

            include_once('view/usuario/dashboard/menu.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function Close()
    {
        try {
            session_start();
            $_SESSION['CONTROL'] = 0;
            include_once('view/admin/login.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
