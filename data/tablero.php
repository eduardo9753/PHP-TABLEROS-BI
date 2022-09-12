<?php

class Tablero
{
    private $id_tablero;
    private $nombre_tablero;
    private $url_tablero;
    private $estado_tablero;

    public function __construct()
    {
        $this->id_sistemas = '';
        $this->nombre_tablero = '';
        $this->url_tablero = '';
        $this->estado_tablero = '';
    }

    function setid_tablero($id_tablero)
    {
        $this->id_tablero = $id_tablero;
    }
    function getid_tablero()
    {
        return $this->id_tablero;
    }

    function setnombre_tablero($nombre_tablero)
    {
        $this->nombre_tablero = $nombre_tablero;
    }
    function getnombre_tablero()
    {
        return $this->nombre_tablero;
    }

    function seturl_tablero($url_tablero)
    {
        $this->url_tablero = $url_tablero;
    }
    function geturl_tablero()
    {
        return $this->url_tablero;
    }

    function setestado_tablero($estado_tablero)
    {
        $this->estado_tablero = $estado_tablero;
    }
    function getestado_tablero()
    {
        return $this->estado_tablero;
    }
}
