<?php

namespace App\Models;

use App\Models\TrixAttachments;

use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class News extends Model
{
    use HasTrixRichText;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($news) {
            //Delete trix data
            $news->trixRichText->each->delete();
            TrixAttachments::where('attachable_id', $news->id)->delete();

            //Delete corresponding data
            NewsData::destroy($news->id);
        });
    }
}
