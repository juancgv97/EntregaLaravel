<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;
    protected $table = "logins";
    protected $primaryKey = 'id'; 
    protected $filleable = [
        'usuario',
        'pass'
    ];
    public $timestamps = false;



    public function setpassAttribute($pass){

        $this->attributes['pass'] = bcrypt($pass);

    }

}