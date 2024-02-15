<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Category extends Model
{
    use HasFactory;
    protected $fillable =[
        "category_name"
    ];

    public function category()
    {
        return $this->hasMany(Event::class,"id","category");
    }
}
