<?php

//MODEL
include_once('model/modelGrafico.php');
include_once('model/modelAdministrador.php');

//UTILS
include_once('utils/modelMensaje.php');
include_once('utils/modelSession.php');


//DATOS
include_once('data/usuario.php');
include_once('data/tablero.php');
include_once('data/grupo.php');


//CORREOS
include_once('data/correo.php');



class ControlAdministrador
{

    public $MSG;
    public $GRAFICO;
    public $SESSION;
    public $ADMIN;

    public function __construct()
    {
        $this->MSG = new ModeloMensaje();
        $this->GRAFICO = new ModeloGrafico();
        $this->SESSION = new ModeloSession();
        $this->ADMIN = new ModeloAdministrador();
    }

    //LISTA DE TABLEROS
    public function Tableros()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            //color de links
            if (isset($_REQUEST['ruta']) == 'Tableros') {
                $ruta = 'Tableros';
            }

            $titulo = "Lista  de Tableros";
            $dataTableros = $this->ADMIN->dataTableros();
            include_once('view/administrador/tablero/tableros.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //CREACION DE TABLEROS
    public function CrearTablero()
    {
        try {
            //VER LA SESSION INICIADA INICIADA
            $this->SESSION->isSession();
            $tablero = new Tablero();
            $tablero->setnombre_tablero($_POST['txt_nombre_tablero']);
            $tablero->seturl_tablero($_POST['txt_url_tablero']);

            $save = $this->ADMIN->insertTablero($tablero);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZAR TABLERO
    public function actualizarTablero()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            $tablero = new Tablero();
            $tablero->setnombre_tablero($_POST['txt_nombre_tablero']);
            $tablero->seturl_tablero($_POST['txt_url_tablero']);
            $tablero->setid_tablero($_POST['txt_id_tablero']);

            $save = $this->ADMIN->updateTablero($tablero);

            if ($save) {
                header('Location:Tableros');
            } else {
                header('Location:Tableros');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //VER UN TABLERO 
    public function verTablero()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            $ruta = 'Tableros';
            $id_tablero = filter_input(INPUT_POST, 'txt_id_tablero');
            $tablero = new Tablero();
            $tablero->setid_tablero($id_tablero);
            $dataTablero = $this->ADMIN->dataTablerosById($tablero);
            $titulo = "Tablero : " . $dataTablero->nombre_tablero;

            include_once('view/administrador/tablero/verTablero.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }









    //LISTA DE USUARIOS Y ASIGNACION DE GRUPOS
    public function UsuariosConGrupos()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            //color de links
            if (isset($_REQUEST['ruta']) == 'UsuariosConGrupos') {
                $ruta = 'UsuariosConGrupos';
            }

            $titulo = "Lista de Usuarios";
            $dataUsuario = $this->ADMIN->dataUsuario();
            $dataPerfil = $this->ADMIN->dataPerfil();
            include_once('view/administrador/usuario/usuarios.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //VISTA EN DONDE JALAMOS AL USUARIO Y LE ASIGNAMOS EL GRUPO QUE SE REQUIERE
    public function UsuarioGrupo()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();
            $ruta = 'UsuariosConGrupos';
            $usuario = new Usuario();
            $usuario->setid_usuario($_POST['txt_id_usuario']);
            $dataUsuario = $this->ADMIN->dataUsuarioById($usuario);
            $dataGrupo = $this->ADMIN->dataGrupos();
            $titulo = "Asignar Grupo al Usuario: " . $dataUsuario->nombre_usuario;
            if ($dataUsuario) {
                include_once('view/administrador/usuario/usuarioGrupo.php');
            } else {
                header('Location:Usuarios');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //METODO PARA ASIGNAR UN GRUPO AL USUARIO
    public function asignarUsuarioGrupo()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            $usuario = new Usuario();
            $grupo = new Grupo();

            $usuario->setid_usuario($_POST['txt_id_usuario']);
            $grupo->setid_grupo($_POST['cbo_tablero']);

            //VALIDAR SI YA EXISTE TABLERO ASIGNADO A ESE USUARIO
            $datos = $this->ADMIN->existeUsuarioGrupo($grupo, $usuario);

            if ($datos) {
                echo 3; //YA SE ENCUENTRA ASIGNADO EL GRUPO
            } else {
                $save = $this->ADMIN->insertUsuarioGrupo($grupo, $usuario);
                if ($save) {
                    echo 1;
                } else {
                    echo 0;
                }
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }









    //LISTA DE GRUPOS Y ASIGNACION DE TABLEROS
    public function GrupoConTablero()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            //color de links
            if (isset($_REQUEST['ruta']) == 'GrupoConTablero') {
                $ruta = 'GrupoConTablero';
            }

            $titulo = "Lista de Grupos";
            $dataGrupo = $this->ADMIN->dataGrupos();
            include_once('view/administrador/grupos/grupoTablero.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //VISTA PARA ASINAR UN TABLERO A UN GRUPO
    public function AsignarGrupoTablero()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();
            $ruta = 'GrupoConTablero';
            $grupo = new Grupo();
            $grupo->setid_grupo($_POST['txt_id_grupo']);
            $dataGrupo = $this->ADMIN->dataGrupoById($grupo);
            $dataTablero = $this->ADMIN->dataTableros();
            $titulo = "Asignar Tablero al Grupo: " . $dataGrupo->nombre_grupo;
            if ($dataGrupo) {
                include_once('view/administrador/grupos/asignarGrupoTablero.php');
            } else {
                header('Location:Usuarios');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

     //METODO PARA ASIGNAR UN GRUPO AL USUARIO
     public function asignarGrupoTableroAjax()
     {
         try {
             //VER LA SESSION INICIADA  
             $this->SESSION->isSession();
 
             $tablero = new Tablero();
             $grupo = new Grupo();
 
             $tablero->setid_tablero($_POST['cbo_tablero']);
             $grupo->setid_grupo($_POST['txt_id_grupo']);
 
             //VALIDAR SI YA EXISTE TABLERO ASIGNADO A ESE USUARIO
             $datos = $this->ADMIN->existeGrupoTablero($grupo, $tablero);
 
             if ($datos) {
                 echo 3; //YA SE ENCUENTRA ASIGNADO EL TABLERO
             } else {
                 $save = $this->ADMIN->insertGrupoTablero($grupo, $tablero);
                 if ($save) {
                     echo 1;
                 } else {
                     echo 0;
                 }
             }
         } catch (Exception $th) {
             echo $th->getMessage();
         }
     }










    //LISTA DE GRUPOS
    public function Grupos()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            //color de links
            if (isset($_REQUEST['ruta']) == 'Grupos') {
                $ruta = 'Grupos';
            }

            $titulo = "Lista de Grupo o Areas";
            $dataGrupo = $this->ADMIN->dataGrupos();
            include_once('view/administrador/grupos/grupos.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //CREAR UN GRUPO
    public function CrearGrupo()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            $grupo = new Grupo();
            $grupo->setnombre_grupo($_POST['txt_nombre_grupo']);
            $grupo->setestado_grupo('A');

            $save = $this->ADMIN->insertGrupo($grupo);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZAR UN GRUPO
    public function actualizarGrupo()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            $grupo = new Grupo();
            $grupo->setnombre_grupo($_POST['txt_nombre_grupo']);
            $grupo->setestado_grupo('A');
            $grupo->setid_grupo($_POST['txt_id_usuario']);

            $save = $this->ADMIN->updateGrupo($grupo);

            if ($save) {
                header('Location:Grupos');
            } else {
                header('Location:Grupos');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //CREACION DE USUARRIO AJAX
    public function CrearUsuario()
    {
        try {
            //VER LA SESSION INICIADA  
            $this->SESSION->isSession();

            $usuario = new Usuario();
            $usuario->setnombre_usuario($_POST['txt_nombre_usuario']);
            $usuario->setcontra_usuario($_POST['txt_nombre_pass']);
            $usuario->setid_perfil($_POST['cbo_perfil']);

            $save = $this->ADMIN->insertUsuario($usuario);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
