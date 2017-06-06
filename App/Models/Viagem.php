<?php
namespace App\Models;

use Cac\Model\Model;


class Viagem extends Model
{
    protected $table      = "viagens";

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Motorista()
    {
        return $this->hasOne(Motorista::class);
    }

    public function Veiculo()
    {
        return $this->hasOne(Veiculo::class);
    }

    public function Filial()
    {
        return $this->hasOne(Filial::class);
    }

    public function Cliente()
    {
        return $this->hasOne(Client::class);
    }

}