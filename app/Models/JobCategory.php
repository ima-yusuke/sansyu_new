<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobOpening;

class JobCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_opening_id',
        'job_title',
        'job_content'
    ];

    public function job_category()
    {
        return $this->belongsTo(JobOpening::class);
    }
}
