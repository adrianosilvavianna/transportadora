<?php
namespace App\Models;

use Cac\Model\Model;


class User extends Model {

    protected $table      = "users";

    public function Clients()
    {
        return $this->hasMany(Client::class);
    }

    public function Filiais()
    {
        return $this->hasMany(Filial::class);
    }

    public function Motoristas()
    {
        return $this->hasMany(Motorista::class);
    }

    public function Veiculos()
    {
        return $this->hasMany(Veiculo::class);
    }

    public function Viagens()
    {
        return $this->hasMany(Viagem::class);
    }

}