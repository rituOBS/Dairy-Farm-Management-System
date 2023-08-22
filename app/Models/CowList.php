<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cowlist extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function shade(){

        return $this->belongsTo(CowShade::class,'shade_id');
    }
}
