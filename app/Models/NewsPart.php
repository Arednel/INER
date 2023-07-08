<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPart extends Model
{
    protected $fillable = [
        'news_id',
        'number',
        'type',
        'data',
    ];
}
