<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillSet extends Model
{
    use HasFactory;

    protected $table = 'skill_sets';

    public $timestamps = false;

    protected $fillable = [
        'candidate_id',
        'skill_id',
    ];
}
