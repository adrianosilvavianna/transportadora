<?php

namespace App;

use Cac\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home.index']           = ['route' => '/',                      'controller' =>  'HomeController',  'method'=>'GET', 'action' => 'index'];

        $ar['auth.index']           = ['route' => '/auth',                  'controller' => 'AuthController',   'method'=>'GET',  'action' => 'getLogin'   ];
        $ar['auth.login']           = ['route' => '/auth/login',            'controller' => 'AuthController',   'method'=>'POST', 'action' => 'postLogin'  ];
        $ar['auth.logout']          = ['route' => '/auth/logout',           'controller' => 'AuthController',   'method'=>'GET',  'action' => 'logout'     ];

        $ar['register']             = ['route' => '/register',              'controller' => 'AuthController',   'method'=>'GET', 'action' => 'getRegister' ];
        $ar['register.store']       = ['route' => '/register/store',        'controller' => 'AuthController',   'method'=>'POST','action' => 'postRegister'];

        $ar['user.index']           = ['route' => '/user',                  'controller' => 'UserController',   'method'=>'GET', 'auth' =>true, 'action' => 'index'];
        $ar['user.edit']            = ['route' => '/user/edit',             'controller' => 'UserController',   'method'=>'GET', 'auth' =>true, 'action' => 'edit'];

        $ar['user.client.index']    = ['route' => '/user/client',           'controller' => 'ClientController', 'method'=>'GET','action' => 'index'];
        $ar['user.client.create']   = ['route' => '/user/client/create',    'controller' => 'ClientController', 'method'=>'GET', 'action' => 'create'];
        $ar['user.client.store']    = ['route' => '/user/client/store',     'controller' => 'ClientController', 'method'=>'POST', 'action' => 'store'];
        $ar['user.client.edit']     = ['route' => '/user/client/edit',      'controller' => 'ClientController', 'method'=>'GET', 'action' => 'edit'];
        $ar['user.client.update']   = ['route' => '/user/client/update',    'controller' => 'ClientController', 'method'=>'POST', 'action' => 'update'];
        $ar['user.client.search']   = ['route' => '/user/client/search',    'controller' => 'ClientController', 'method'=>'POST', 'action' => 'search'];
        $ar['user.client.delete']   = ['route' => '/user/client/delete',    'controller' => 'ClientController', 'method'=>'GET', 'action' => 'delete'];

        $ar['user.filial.index']    = ['route' => '/user/filial',           'controller' => 'FilialController', 'method'=>'GET','action' => 'index'];
        $ar['user.filial.create']   = ['route' => '/user/filial/create',    'controller' => 'FilialController', 'method'=>'GET', 'action' => 'create'];
        $ar['user.filial.store']    = ['route' => '/user/filial/store',     'controller' => 'FilialController', 'method'=>'POST', 'action' => 'store'];
        $ar['user.filial.edit']     = ['route' => '/user/filial/edit',      'controller' => 'FilialController', 'method'=>'GET', 'action' => 'edit'];
        $ar['user.filial.update']   = ['route' => '/user/filial/update',    'controller' => 'FilialController', 'method'=>'POST', 'action' => 'update'];
        $ar['user.filial.search']   = ['route' => '/user/filial/search',    'controller' => 'FilialController', 'method'=>'POST', 'action' => 'search'];
        $ar['user.filial.delete']   = ['route' => '/user/filial/delete',    'controller' => 'FilialController', 'method'=>'GET', 'action' => 'delete'];

        $ar['user.motorista.index'] = ['route' => '/user/motorista',        'controller' => 'MotoristaController', 'method'=>'GET','action' => 'index'];
        $ar['user.motorista.create']= ['route' => '/user/motorista/create', 'controller' => 'MotoristaController', 'method'=>'GET', 'action' => 'create'];
        $ar['user.motorista.store'] = ['route' => '/user/motorista/store',  'controller' => 'MotoristaController', 'method'=>'POST', 'action' => 'store'];
        $ar['user.motorista.edit']  = ['route' => '/user/motorista/edit',   'controller' => 'MotoristaController', 'method'=>'GET', 'action' => 'edit'];
        $ar['user.motorista.update']= ['route' => '/user/motorista/update', 'controller' => 'MotoristaController', 'method'=>'POST', 'action' => 'update'];
        $ar['user.motorista.search']= ['route' => '/user/motorista/search', 'controller' => 'MotoristaController', 'method'=>'POST', 'action' => 'search'];
        $ar['user.motorista.delete']= ['route' => '/user/motorista/delete', 'controller' => 'MotoristaController', 'method'=>'GET', 'action' => 'delete'];

        $ar['user.veiculo.index']   = ['route' => '/user/veiculo',          'controller' => 'veiculoController', 'method'=>'GET','action' => 'index'];
        $ar['user.veiculo.create']  = ['route' => '/user/veiculo/create',   'controller' => 'veiculoController', 'method'=>'GET', 'action' => 'create'];
        $ar['user.veiculo.store']   = ['route' => '/user/veiculo/store',    'controller' => 'veiculoController', 'method'=>'POST', 'action' => 'store'];
        $ar['user.veiculo.edit']    = ['route' => '/user/veiculo/edit',     'controller' => 'veiculoController', 'method'=>'GET', 'action' => 'edit'];
        $ar['user.veiculo.update']  = ['route' => '/user/veiculo/update',   'controller' => 'veiculoController', 'method'=>'POST', 'action' => 'update'];
        $ar['user.veiculo.search']  = ['route' => '/user/veiculo/search',   'controller' => 'veiculoController', 'method'=>'POST', 'action' => 'search'];
        $ar['user.veiculo.delete']  = ['route' => '/user/veiculo/delete',   'controller' => 'veiculoController', 'method'=>'GET', 'action' => 'delete'];

        $ar['user.viagem.index']    = ['route' => '/user/viagem',           'controller' => 'ViagemController', 'method'=>'GET','action' => 'index'];
        $ar['user.viagem.create']   = ['route' => '/user/viagem/create',    'controller' => 'ViagemController', 'method'=>'GET', 'action' => 'create'];
        $ar['user.viagem.store']    = ['route' => '/user/viagem/store',     'controller' => 'ViagemController', 'method'=>'POST', 'action' => 'store'];
        $ar['user.viagem.edit']     = ['route' => '/user/viagem/edit',      'controller' => 'ViagemController', 'method'=>'GET', 'action' => 'edit'];
        $ar['user.viagem.update']   = ['route' => '/user/viagem/update',    'controller' => 'ViagemController', 'method'=>'POST', 'action' => 'update'];
        $ar['user.viagem.search']   = ['route' => '/user/viagem/search',    'controller' => 'ViagemController', 'method'=>'POST', 'action' => 'search'];
        $ar['user.viagem.delete']   = ['route' => '/user/viagem/delete',    'controller' => 'ViagemController', 'method'=>'GET', 'action' => 'delete'];


        $this->setRoutes($ar);
    }

}
