<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort_info extends Model
{
    use HasFactory;
    protected $fillable=[
        'cohorts_id',
        'img_url',
        'info_en',
        'info_am',
    ];
    public function cohorts(){
        return $this->belongsTo(Cohort::class);
    }
    public function cohort_titles()
    {
        return $this->hasMany(Cohort_title::class);
    }
}
