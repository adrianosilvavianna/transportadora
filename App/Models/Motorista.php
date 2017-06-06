<?php
namespace App\Models;

use Cac\Model\Model;


class Motorista extends Model
{
    protected $table      = "motoristas";

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Viagem()
    {
        return $this->belongsTo(Viagem::class);
    }
}