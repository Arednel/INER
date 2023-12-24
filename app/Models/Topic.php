<?php

namespace App\Models;

use App\Models\Subject;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Topic extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];

    public function main_subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'main_subject_id');
    }

    public function secondary_subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'secondary_subject_id');
    }
}
