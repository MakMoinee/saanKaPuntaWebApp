<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    use HasFactory;

    protected $id = 'docID';

    protected $fillable = [
        'docID',
        'officeName',
        "building",
        "directions",
        "floor",
        "floorMapPath",
        "videoURL",
        "createdAt",
        "updatedAt"
    ];
}
