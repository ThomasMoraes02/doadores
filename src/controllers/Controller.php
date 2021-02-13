<?php 

require_once __DIR__ . "/../models/Model.php";

require_once __DIR__ . "/../helpers/Helper.php";

class Controller
{
    use Helper;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function index()
    {
        $data = [
            "titulo" => "Doação",
            "link" => "Doadores",
            "subtitulo" => "Sistema de doadores",
            "doadores" => $this->model->getDoadores()
        ];

        $this->loadView("home", $data);
    }

    public function cadastra()
    {
        $data = [
            'titulo' => 'Doação - Cadastrar Doador',
            "link" => "Doadores",
            "subtitulo" => "Sistema de doadores"
        ];

        $this->loadView('cadastrar',$data);
    }

    public function cadastrar()
    {
        $data = $_POST;

        if(!$this->model->insert($data)) {
            $this->flashMessage("success", "Doador Cadastrado com Sucesso");
        } else {
            $this->flashMessage("danger", "Erro! Doador não cadastrado");
        }

        header('Location: /doadores/');
    }

    public function edita($id)
    {
        $data = [
            "titulo" => "Doação - Editar",
            "link" => "Doadores",
            "subtitulo" => "Sistema de doadores",
            "doador" => $this->model->getDoadorId($id)
        ];

        $this->loadView("editar", $data);
    }

    public function atualizar()
    {
        $data = $_POST;

        if(!$this->model->update($data)) {
            $this->flashMessage("success", "Doador atualizado com sucesso");
        }  else {
            $this->flashMessage("danger", "Erro! Doador não atualizado");
        }

        header('Location: /doadores/');
    }

    public function deletar($id)
    {
        if($this->model->delete($id)) {
            $this->flashMessage("success", "Doador deletado com sucesso");
        } else {
            $this->flashMessage("danger", "Erro! Doador não deletado");
        }

        header('Location: /doadores/');
    }

    public function buscar()
    {
        $busca_doador = $_POST['busca_doador'];

        $data = [
            "titulo" => "Doação",
            "link" => "Doadores",
            "subtitulo" => "Sistema de doadores",
            "doadores" => $this->model->search($busca_doador)
        ];

        $this->loadView("home", $data);
    }

    public function error()
    {
        $data = [
            "titulo" => "Doação",
            "link" => "Doadores",
            "subtitulo" => "página não encontrada"
        ];

        $this->loadView("error", $data);
    }
}