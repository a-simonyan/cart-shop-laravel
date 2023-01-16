<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Style extends Model
{
    use HasFactory;
    protected $fillable = ['title','arr','product_id'];

    protected $casts = [
        'arr' => 'json',
    ];
}
