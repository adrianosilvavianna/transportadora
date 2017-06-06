<?php
namespace App\Controllers;

use App\Models\Motorista;
use Cac\Controller\Action;

class MotoristaController extends Action
{
    private $motorista;

    public function __construct()
    {
        $this->motorista = new Motorista();
    }

    public function index()
    {
        if($_GET)
        {
            echo $this->render('motorista.index', ['motoristas' => auth()->Motoristas(), 'success' => $_GET['success']]);
        }else{
            echo $this->render('motorista.index', ['motoristas' => auth()->Motoristas()]);
        }
    }

    public function create()
    {
        echo $this->render('motorista.create');
    }

    public function store()
    {
        $this->motorista->create($_POST);
        header('Location: /user/motorista?success=Criado');
    }

    public function edit()
    {
        $motorista = $this->motorista->find($_GET['id']);
        echo $this->render('motorista.edit', ['motorista' => $motorista]);
    }

    public function update()
    {
        try{
            $motorista = $this->motorista->find($_GET['id']);
            $motorista->update($_POST);
            header('Location: /user/motorista?success=Gravado');
        }catch (\Exception $e)
        {
            echo $this->render('motorista.edit', ['error', $e->getMessage()]);
        }
    }

    public function delete()
    {
        $motorista = $this->motorista->find($_GET['id']);
        $motorista->delete();
        header('Location: /user/motorista?success=Excluido');

    }

    public function search()
    {
        $motoristas = $this->motorista->where('cep', 'like' , '%'.$_POST['search'].'%')->get();
        echo $this->render('motorista.index', ['motoristas' => $motoristas]);

    }

}

