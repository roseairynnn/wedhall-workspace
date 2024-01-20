<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'reservationid';

    protected $fillable = [
        'hallid',
        'id',
        'companyid',
        'reservationstartdate',
        'reservationenddate',
        'reservationdays',
        'reservationstarttime',
        'reservationendtime',
        'reservationamount',
        'reservationstatus',
    ];

    //this define the relationship between reservation and user 1-M reservation has many users
    public function users(){
        return $this->hasMany(User::class, 'id');
    }
    
    //this define the relationship between reservation and hall 1-M reservation has many halls
    public function halls(){
        return $this->hasMany(Hall::class, 'hallid');
    }

    //this define the relationship between reservation and company 1-M reservation has many companies
    public function companies(){
        return $this->hasMany(Company::class, 'companyid');
    }
}
