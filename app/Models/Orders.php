<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
      "product_id",
      "price",
      "size",
      "style",
      "color",
      "quality",
    ];
}
