<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable =[
        "date",
        "title",
        "category_id"
    ];

    public function events()
    {
//        return $this->belongsTo(Category::class,"category","id");
//        return $this->belongsTo(Category::class,"category","id");
        return $this->belongsTo(Category::class);
    }
}
