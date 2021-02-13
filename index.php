<?php 

require_once __DIR__ . "/src/controllers/Controller.php";

//Através do arquivo HTACCESS ter controle das requisições por URL
$request = ($_SERVER['REQUEST_URI']);

@$requestId = explode("/",$request);

@$id = $requestId[3];

@$controlador = new Controller;

//Inicializando a Sessão
session_start();

//Controlador de requisições
switch ($request) {
    case "/doadores/":
        $controlador->index();
        break;

    case "/doadores/cadastra":
        $controlador->cadastra();
        break;

    case "/doadores/cadastrar":
        $controlador->cadastrar();
        break;

    case "/doadores/edita/$id":
        $controlador->edita($id);
        break;

    case "/doadores/edita/edita/atualizar":
        $controlador->atualizar();
        break;
    
    case "/doadores/excluir/$id":
        $controlador->deletar($id);
        break;

    case "/doadores/buscar":
        $controlador->buscar();
        break;

    default:
        $controlador->error();
        break;
}