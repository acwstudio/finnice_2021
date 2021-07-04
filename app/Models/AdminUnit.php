<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

/**
 * Class AdminUnit
 * @package App\Models
 */
class AdminUnit extends Model implements TranslatableContract
{
    use HasFactory, Sluggable, Translatable;

    /**
     * @var array
     */
    public $translatedAttributes = ['capital', 'slug', 'text', 'title'];

    /**
     * @var array
     */
    protected $fillable = [
        'admin_unit_id', 'alias', 'population', 'area', 'image_name', 'image_extension', 'image_arms_name',
        'image_arms_extension', 'image_maps_name', 'image_maps_extension'
    ];

    /**
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
