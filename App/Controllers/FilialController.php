<?php
namespace App\Controllers;

use App\Models\Filial;
use Cac\Controller\Action;

class FilialController extends Action
{
    private $filial;

    public function __construct()
    {
        $this->filial = new Filial();
    }

    public function index()
    {
        if($_GET)
        {
            echo $this->render('filial.index', ['filiais' => auth()->Filiais(), 'success' => $_GET['success']]);
        }else{
            echo $this->render('filial.index', ['filiais' => auth()->Filiais()]);
        }
    }

    public function create()
    {
        echo $this->render('filial.create');
    }

    public function store()
    {
        $this->filial->create($_POST);
        header('Location: /user/filial?success=Gravado');
    }

    public function edit()
    {
        $filial = $this->filial->find($_GET['id']);
        echo $this->render('filial.edit', ['filial' => $filial]);
    }

    public function update()
    {
        try{
            $filial = $this->filial->find($_GET['id']);
            $filial->update($_POST);
            header('Location: /user/filial?success=Gravado');
        }catch (\Exception $e)
        {
            echo $this->render('filial.edit', ['error', $e->getMessage()]);
        }
    }

    public function delete()
    {
        $filial = $this->filial->find($_GET['id']);
        $filial->delete();
        header('Location: /user/filial?success=Excluido');

    }


    public function search()
    {
        $filiais = $this->filial->where('cep', 'like' , '%'.$_POST['search'].'%')->get();
        echo $this->render('filial.index', ['filiais' => $filiais]);

    }

}

