<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'edad',
        'fecha_nacimiento',
        'rfc',
        'email',
    ];

    public function address()
    {
        return $this->hasMany(AddressEmployee::class);
    }
}
