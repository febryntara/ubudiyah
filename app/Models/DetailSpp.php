<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSpp extends Model
{
    use HasFactory;
    protected $table = "tb_detail_spp";
    protected $guarded = ['id'];
}
