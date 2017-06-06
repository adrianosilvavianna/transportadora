<?php
namespace App\Controllers;

use App\Models\Client;
use Cac\Controller\Action;

class ClientController extends Action
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function index()
    {
        if($_GET)
        {
            echo $this->render('client.index', ['clients' => auth()->Clients(), 'success' => $_GET['success']]);
        }else{
            echo $this->render('client.index', ['clients' => auth()->Clients()]);
        }

    }

    public function create()
    {
        echo $this->render('client.create');
    }

    public function store()
    {
       try{
            $this->client->create($_POST);
           echo $this->render('client.create', ['success' => 'Gravado']);
        }catch (\Exception $e)
        {
            echo $this->render('client.index', ['error', $e->getMessage()]);
        }
    }

    public function edit()
    {
        $client = $this->client->find($_GET['id']);

        echo $this->render('client.edit', ['client' => $client]);
    }

    public function update()
    {
        try{
            $client = $this->client->find($_GET['id']);
            $client->update($_POST);
            header('Location: /user/client?success=Gravado');
        }catch (\Exception $e)
        {
            echo $this->render('client.edit', ['error', $e->getMessage()]);
        }
    }

    public function delete()
    {
        $client = $this->client->find($_GET['id']);
        $client->delete();
        header('Location: /user/client?success=Excluido');
    }

    public function search()
    {
        $clients = $this->client->where('nome', 'like' , '%'.$_POST['search'].'%')->get();
        echo $this->render('client.index', ['clients' => $clients]);
    }
}