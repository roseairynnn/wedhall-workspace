<?php

// app/Models/Company.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'companyregistrationNo';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'companyname',
        'companyregistrationNo',
        'companyNophone',
        'companyEmail',
        'companyAddress',
    ];

    protected $dates = [
        'dateRegistered',
    ];
}
