<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort_title extends Model
{
    use HasFactory;
    protected $fillable=[
        'cohort_infos_id',
        'date_text_en',
        'date_text_am',
        'title_en',
        'title_am',
    ];

    public function cohort_infos(){
        return $this->belongsTo(Cohort_info::class);
    }
}
