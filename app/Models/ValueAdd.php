<?php

namespace App\Models;

use App\Models\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ValueAdd extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations;
    public $translatable = ['title', 'description', 'content'];
    protected $guarded = [''];
    public function valueAddCategory()
    {
        return $this->belongsTo(ValueAddCategory::class);
    }
}
