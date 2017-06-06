<?php
namespace App\Controllers;

use App\Models\Veiculo;
use Cac\Controller\Action;

class VeiculoController extends Action
{
    private $veiculo;

    public function __construct()
    {
        $this->veiculo = new Veiculo();
    }

    public function index()
    {
        if($_GET)
        {
            echo $this->render('veiculo.index', ['veiculos' => auth()->Veiculos(), 'success' => $_GET['success']]);
        }else{
            echo $this->render('veiculo.index', ['veiculos' => auth()->Veiculos()]);
        }
    }

    public function create()
    {
        echo $this->render('veiculo.create');
    }

    public function store()
    {
        $this->veiculo->create($_POST);
        header('Location: /user/veiculo?success=Criado');
    }

    public function edit()
    {
        $veiculo = $this->veiculo->find($_GET['id']);
        echo $this->render('veiculo.edit', ['veiculo' => $veiculo]);
    }

    public function update()
    {
        try{
            $veiculo = $this->veiculo->find($_GET['id']);
            $veiculo->update($_POST);
            header('Location: /user/veiculo?success=Gravado');
        }catch (\Exception $e)
        {
            echo $this->render('veiculo.edit', ['error', $e->getMessage()]);
        }
    }

    public function delete()
    {
        $veiculo = $this->veiculo->find($_GET['id']);
        $veiculo->delete();
        header('Location: /user/veiculo?success=Excluido');

    }

    public function search()
    {
        $veiculos = $this->veiculo->where('marca', 'like' , '%'.$_POST['search'].'%')->get();
        echo $this->render('veiculo.index', ['veiculos' => $veiculos]);

    }

}

