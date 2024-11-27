<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $table = 'home_page';

    protected $fillable = [
        'banner_image',
        'banner_text',
        'image1', 'image2', 'image3', 'image4', 'image5',
        'text1', 'text2', 'text3', 'text4', 'text5',
        'catchphrase',
    ];
}
