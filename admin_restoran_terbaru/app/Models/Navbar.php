<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Navbar extends Model
{
    protected $fillable = [
        'title',
    ];

    // Mendefinisikan pilihan untuk judul navbar
    public const TITLE_OPTIONS = [
        'Home',
        'About',
        'Services',
        'Portfolio',
        'Contact',
    ];

    // Validasi saat menyimpan data
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (!in_array($model->title, self::TITLE_OPTIONS)) {
                throw new \InvalidArgumentException('Invalid title option.');
            }
        });
    }
    
}
