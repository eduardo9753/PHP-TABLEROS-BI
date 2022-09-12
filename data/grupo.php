<?php

class Grupo
{

    private $id_grupo;
    private $nombre_grupo;
    private $estado_grupo;
   

    public function __construct()
    {
        $this->id_grupo = "";
        $this->nombre_grupo = "";
        $this->estado_grupo = "";
    }

    function setid_perfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
    }
    function getid_perfil()
    {
        return $this->id_perfil;
    }


    function setid_grupo($id_grupo)
    {
        $this->id_grupo = $id_grupo;
    }
    function getid_grupo()
    {
        return $this->id_grupo;
    }


    function setnombre_grupo($nombre_grupo)
    {
        $this->nombre_grupo = $nombre_grupo;
    }
    function getnombre_grupo()
    {
        return $this->nombre_grupo;
    }


    function setestado_grupo($estado_grupo)
    {
        $this->estado_grupo = $estado_grupo;
    }
    function getestado_grupo()
    {
        return $this->estado_grupo;
    }
}
