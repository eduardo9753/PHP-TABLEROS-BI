<?php

class Usuario
{

    private $id_usuario;
    private $nombre_usuario;
    private $contra_usuario;
    private $id_perfil;
    private $id_grupo;
    private $foto;

    public function __construct()
    {
        $this->id_usuario = "";
        $this->nombre_usuario = "";
        $this->contra_usuario = "";
        $this->id_perfil = "";
        $this->id_grupo = "";
        $this->foto = "";
    }

    function setfoto($foto)
    {
        $this->foto = $foto;
    }
    function getfoto()
    {
        return $this->foto;
    }

    function setid_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    function getid_usuario()
    {
        return $this->id_usuario;
    }

    function setid_grupo($id_grupo)
    {
        $this->id_grupo = $id_grupo;
    }
    function getid_grupo()
    {
        return $this->id_grupo;
    }


    function setnombre_usuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;
    }
    function getnombre_usuario()
    {
        return $this->nombre_usuario;
    }


    function setcontra_usuario($contra_usuario)
    {
        $this->contra_usuario = $contra_usuario;
    }
    function getcontra_usuario()
    {
        return $this->contra_usuario;
    }


    function setid_perfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
    }
    function getid_perfil()
    {
        return $this->id_perfil;
    }
}
