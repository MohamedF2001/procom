<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FastFood extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomFast',
        'descriptionFast',
        'prixFast',
        'qtiteFast',
        'categories_id',
        'qtitePanierFast',
        'imageFast',
    ];
}
