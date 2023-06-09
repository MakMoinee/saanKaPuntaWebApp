<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    use HasFactory;

    protected $id = 'docID';

    protected $fillable = [
        'docID',
        'buildingName',
        "posterPath",
        "directoryPath",
        "status",
        "createdAt",
        "updatedAt"
    ];
}
