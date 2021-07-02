<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coorts extends Model
{
    use HasFactory;
    protected $fillable=[
        'text_en',
        'text_am',
    ];

}
