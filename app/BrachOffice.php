<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrachOffice extends Model
{
    protected $fillable =[
        'precinct',
        'name',
        'email',
        'ip',
        'active',
        'cellPhone',
        'telephone',
        'address',
        'location',
        'postalCode',
        'state'
    ];
}
