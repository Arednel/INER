<?php

namespace App\Models;

use App\Models\User;
use App\Models\Topic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserTopicResult extends Model
{
    protected $fillable = [
        'user_id',
        'main_subject_id',
        'secondary_subject_id',
        'topic_id',
        'max_score',
        'user_score',
        'user_score_to_hundred',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
