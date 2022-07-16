<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory, SoftDeletes;
    use HasTranslations;
    protected $guarded=[];

    public $translatable=[
        'blogTitle',
        'blogSlug',
        'blogSummary',
        'mainStory'
    ];
}
