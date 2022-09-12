<?php

//MODEL
include_once('model/modelLogin.php');

//DATOS
include_once('data/usuario.php');



//CORREOS
include_once('data/correo.php');



class ControlLogin
{

    public $LOGIN;

    public function __construct()
    {
        $this->LOGIN = new ModeloLogin();
    }



    /*********************************************************************LOGEO DEL ADMIN********************************************************/
    public function Login()
    {
        try {
            /*  if(isset($_REQUEST['btn-login'])){ */
            $login = new Usuario();
            $login->setnombre_usuario($_POST['txt_usuario']);
            $login->setcontra_usuario($_POST['txt_contra']);

            $acceso = $this->LOGIN->logeo($login);

            if ($acceso) {
                session_start();
                $_SESSION["id_usuario"] = $acceso->id_usuario;
                $_SESSION["nombre_usuario"] = $acceso->nombre_usuario;
                $_SESSION["contra_usuario"] = $acceso->contra_usuario;
                $_SESSION["foto"] = $acceso->foto;
                $_SESSION["id_perfil"] = $acceso->id_perfil;
                $_SESSION["nombre_perfil"] = $acceso->nombre_perfil;
                $_SESSION['CONTROL'] = 1;

                if ($_SESSION["id_perfil"] == 1) { //ADMIN
                    echo 1;
                } else if ($_SESSION["id_perfil"] == 2) { //COLABORADOR
                    echo 2;
                }
            } else {
                echo 0;
            }
            /* }*/
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    /********************************************************************************************************************************************/
}
