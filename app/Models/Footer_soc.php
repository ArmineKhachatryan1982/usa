<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer_soc extends Model
{
    use HasFactory;
    protected $fillable=['footer_info_id','icon_name','icon_link','status'];
}
