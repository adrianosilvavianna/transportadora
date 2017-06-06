<?php
namespace App\Models;

use Cac\Model\Model;


class Filial extends Model
{
    protected $table      = "filiais";

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Viagem()
    {
        return $this->belongsTo(Viagem::class);
    }
}