<?php
namespace App\Models;

use Cac\Model\Model;


class Veiculo extends Model
{
    protected $table      = "veiculos";

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Viagem()
    {
        return $this->belongsTo(Viagem::class);
    }
}