<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'owner',
        'category',
        'token',
        'description',
        'contractUrl',
        'price',
        'image',
    ];
}
