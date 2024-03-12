<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobCategory;


class JobOpening extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'job_target',
        'recruit_number',
        'ideal_emp'
    ];

    public function job_opening()
    {
        return $this->hasMany(JobCategory::class);
    }
}



