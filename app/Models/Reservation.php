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
        'reservationamount',
        'reservationstatus',
    ];

    public function hall()
    {
        return $this->belongsTo(Hall::class, 'hallid');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyid');
    }
}
