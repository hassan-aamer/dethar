<?php

namespace App\Models;

use App\Models\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WhatWeDo extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations;
    public $translatable = ['title', 'description', 'content'];
    protected $guarded = [''];
    public function whatWeDoCategory()
    {
        return $this->belongsTo(WhatWeDoCategory::class);
    }
}
