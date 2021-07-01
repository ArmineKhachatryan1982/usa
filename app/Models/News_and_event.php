<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_and_event extends Model
{
    use HasFactory;
    protected $fillable=['date','title_text_am','title_text_en','text_am','text_en','img_name','status'];
}
