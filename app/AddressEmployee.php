<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AddressEmployee extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'address_employees';

    protected $fillable = [
        'calle',
        'colonia',
        'localidad',
        'municipio',
        'estado',
        'pais',
        'codigo_postal',
        'no_exterior',
        'no_interior',
        'telefono',
        'employee_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
