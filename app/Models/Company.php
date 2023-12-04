<?php

// app\Models\Company.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyname',
        'companyregistrationNo',
        'companynophone',
        'companyemail',
        'alt_1',
        'alt_2',
        'companyzip',
        'companycity',
        'companystate',
    ];

    // Add any relationships or other methods here
}