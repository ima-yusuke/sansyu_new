<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Benefit;


class BenefitContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'benefit_id',
        'benefit_title',
        'benefit_content'
    ];

    public function benefit_content()
    {
        return $this->belongsTo(Benefit::class);
    }
}
