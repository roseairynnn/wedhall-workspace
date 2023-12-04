<?php

// app/Models/Company.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';
    protected $primaryKey = 'companyID';
    public $timestamps = false; // If you don't want to use created_at and updated_at timestamps

    protected $fillable = [
        'companyName',
        'companyregistrationNo',
        'companyNophone',
        'companyEmail',
        'companyAddress',
        // Add other fields as needed
    ];
}
