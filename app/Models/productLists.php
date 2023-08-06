<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productLists extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function categoryname()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
