<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "hire_year",
        "school",
        "department",
        "faculty",
        "job_dpt",
        "title",
        "question_1",
        "question_2",
        "question_3",
        "question_4",
        "question_5",
        "question_6",
        "question_7",
        "question_8",
        "path_1",
        "path_2"
    ];
}
