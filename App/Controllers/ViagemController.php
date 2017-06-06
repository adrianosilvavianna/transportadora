<?php
namespace App\Controllers;

use App\Models\Viagem;
use Cac\Controller\Action;

class ViagemController extends Action
{
    private $viagem;
    private $motoristas;
    private $veiculos;
    private $filiais;
    private $clientes;

    public function __construct()
    {
        $this->viagem = new Viagem();
        $this->motoristas = auth()->Motoristas();
        $this->veiculos = auth()->Veiculos();
        $this->filiais = auth()->Filiais();
        $this->clientes = auth()->Clients();
    }

    public function index()
    {
        if($_GET)
        {
            echo $this->render('viagem.index', ['viagens' => auth()->Viagens(), 'success' => $_GET['success']]);
        }else{
            echo $this->render('viagem.index', ['viagens' => auth()->Viagens()]);
        }
    }

    public function create()
    {
       echo $this->render('viagem.create', ['motoristas' => $this->motoristas, 'veiculos' => $this->veiculos, 'filiais' => $this->filiais, 'clientes'=> $this->clientes]);
    }

    public function store()
    {
        $this->viagem->create($_POST);
        header('Location: /user/viagem?success=Criado');
    }

    public function edit()
    {
        $viagem = $this->viagem->find($_GET['id']);
        echo $this->render('viagem.edit', ['motoristas' => $this->motoristas, 'veiculos' => $this->veiculos, 'filiais' => $this->filiais, 'clientes'=> $this->clientes, 'viagem' => $viagem]);
    }

    public function update()
    {
        try{
            $viagem = $this->viagem->find($_GET['id']);
            $viagem->update($_POST);
            header('Location: /user/viagem?success=Gravado');
        }catch (\Exception $e)
        {
            echo $this->render('viagem.edit', ['error', $e->getMessage()]);
        }
    }

    public function delete()
    {
        $viagem = $this->viagem->find($_GET['id']);
        $viagem->delete();
        header('Location: /user/viagem?success=Excluido');

    }

    public function search()
    {
        $viagems = $this->viagem->where('cep', 'like' , '%'.$_POST['search'].'%')->get();
        echo $this->render('viagem.index', ['viagems' => $viagems]);

    }

}

