<?php

class Perfil
{
    private $id_perfil;
    private $nombre_perfil;

    public function __construct()
    {
        $this->id_perfil = '';
        $this->nombre_perfil = '';
    }

    function setid_perfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
    }
    function getid_perfil()
    {
        return $this->id_perfil;
    }

    function setnombre_perfil($nombre_perfil)
    {
        $this->nombre_perfil = $nombre_perfil;
    }
    function getnombre_perfil()
    {
        return $this->nombre_perfil;
    }
}
