<?php

//PDF
require_once('lib/pdf/fpdf.php');

//CONTROLADORES
include_once('controller/controlAdministrador.php');
include_once('controller/controlGrafico.php');
include_once('controller/controlIndex.php');
include_once('controller/controlLogin.php');
include_once('controller/controlUsuario.php');




//PARA LOS CARACTERES EXTRAÑOS
header('Content-Type: text/html; charset=utf-8');


//VARIABLES CONTROLADORES
$controlAdministrador = new ControlAdministrador();
$controlGrafico = new ControlGrafico();
$controlIndex = new ControlIndex();
$controlLogin = new ControlLogin();
$controlUsuario = new ControlUsuario();



//LLAMADAS DE METODOS
if (!isset($_REQUEST['ruta'])) {
    $controlIndex->index();
} else {
    $peticion = $_REQUEST['ruta'];
    if (method_exists($controlAdministrador, $peticion)) {
        call_user_func(array($controlAdministrador, $peticion));
    } else if (method_exists($controlGrafico, $peticion)) {
        call_user_func(array($controlGrafico, $peticion));
    } else if (method_exists($controlIndex, $peticion)) {
        call_user_func(array($controlIndex, $peticion));
    } else if (method_exists($controlLogin, $peticion)) {
        call_user_func(array($controlLogin, $peticion));
    } else if (method_exists($controlUsuario, $peticion)) {
        call_user_func(array($controlUsuario, $peticion));
    } else {
        $controlIndex->index();
    }
}
