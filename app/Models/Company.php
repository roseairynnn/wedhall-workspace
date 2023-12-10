<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model{
    use HasFactory;

    protected $primaryKey = 'companyid';
    
    protected $fillable = [

        'companyname',
        'companyregistrationNo',
        'companynophone',
        'companyemail',
        'companyaddress',
        'companyzip',
        'companycity',
        'companystate',
    ];

    //this define the relationship between company and hall 1-M company has many halls  
    public function halls(){
        return $this->hasMany(Hall::class, 'companyid');
    }
}