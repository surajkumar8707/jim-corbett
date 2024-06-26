<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageCarousel extends Model
{
    use HasFactory;

    protected $fillable = array(
        'id',
        'title',
        'image',
        'status',
    );
}
