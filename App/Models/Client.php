<?php
namespace App\Models;

use Cac\Model\Model;


class Client extends Model
{
    protected $table      = "clients";

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Viagem()
    {
        return $this->belongsTo(Viagem::class);
    }

}