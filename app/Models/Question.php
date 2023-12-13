<?php

namespace App\Models;

use App\Models\Topic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    protected $fillable = [
        'title',
    ];

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }

    public function getTopicNameAndQuestionNameAttribute()
    {
        $topic_name = $this->topic->title;
        return "{$topic_name} / {$this->title}";
    }
    public $additional_attributes = ['TopicNameAndQuestionName'];
}
