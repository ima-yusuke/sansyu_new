<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BenefitContent;

class Benefit extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    public function benefit()
    {
        return $this->hasMany(BenefitContent::class);
    }
}
