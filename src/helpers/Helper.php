<?php 

Trait Helper
{
    //Carrega a página e passa as variáveis extraindo de um array associativo
    public function loadView($view, $data = NULL)
    {
        extract($data);

        require_once __DIR__ . "/../views/template/header.php";
        require_once __DIR__ . "/../views/$view.php";
        require_once __DIR__ . "/../views/template/footer.php";  

        return;
    }

    //Recebe o tipo e a mensagem para passar a sessão
    public function flashMessage($tipo_mensagem = NULL, $mensagem)
    {
        $_SESSION['tipo_mensagem'] = $tipo_mensagem;
        $_SESSION['mensagem'] = $mensagem;

        return;
    }
}