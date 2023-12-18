<?php

namespace App\Models;

use App\Models\Question;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    protected $fillable = [
        'title',
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
