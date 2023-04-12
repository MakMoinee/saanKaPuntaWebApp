<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKPUsers extends Model
{
    use HasFactory;

    protected $id = 'docID';

    protected $fillable = [
        'docID',
        'email',
        "firstname",
        "middlename",
        "lastname",
        'password',
        'secret',
        'userType',
    ];
}
