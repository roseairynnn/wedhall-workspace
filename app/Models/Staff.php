<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    //fillable field Register new staff member with username, email, phone, default password started with S0 and incrementing number and role "staff" the data will be stored in database "wedhall" in table "users"
    protected $fillable = [
        'username',
        'email',
        'phone',
        'password',
        'role',
    ];

}
