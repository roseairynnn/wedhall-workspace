<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $primaryKey = 'hallid';

    // Fillable fields, including foreign key and boolean values
    protected $fillable = [
        'companyid',
        'hallname',
        'halladdress',
        'hallzip',
        'hallcity',
        'hallstate',
        'halldescription',
        'hallcapacity',
        'hallprice',
        'hallimage1',
        'hallimage2',
        'hallimage3',
        'hallstatus',
        'halltype',
        'latitude',
        'longitude',
        'lightingsystem',
        'audiovisualsystem',
        'parkingfacilities',
    ];

    // Define relationships
    public function company(){
        return $this->belongsTo(Company::class, 'companyid');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'hallid');
    }
}
