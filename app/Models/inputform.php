<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inputform extends Model
{
    protected $table = 'forminput';

    public $timestamps = false;

    protected $fillable = [
        'code',
        'year',
        'category',
        'title',
        'topic',
        'subtopic',
        'reference',
    ];
}
