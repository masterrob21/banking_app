<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'clientNumber',
        'titleId',
        'surname',
        'othernames',
        'dob',
        'genderid',
        'resAddress',
        'town',
        'homeTown',
        'regionId',
        'occupationid',
        'phoneNumber',
        'isActive',
        'nextOfKin',
        'relationid',
        'kinNumber',
        'nationalityid',
        'religionid',
        'placeOfWorship',
        'identityTypeid',
        'idNumber',
        'image',
        'branchid',

    ];
}
