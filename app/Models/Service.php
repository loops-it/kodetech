<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    
    use HasSlug;
    use HasFactory;
    protected $fillable = ['service_name','service_overview', 'service_description','service_image'];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('service_name')
            ->saveSlugsTo('slug');
    }
}
