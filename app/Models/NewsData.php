<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsData extends Model
{
    protected $table = 'news_data';

    protected $fillable = [
        'id',
        'title',
    ];
}
