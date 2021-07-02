<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_en',
        'title_am',
        'text_en',
        'text_am',
        'img',
    ];
}
