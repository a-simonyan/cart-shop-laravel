<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['title','subtitle','price'];

    public function color()
    {
        return $this->hasOne(Colors::class,'product_id');
    }
    public function quality()
    {
        return $this->hasOne(Quality::class,'product_id');
    }
    public function size()
    {
        return $this->hasOne(Size::class,'product_id');
    }
    public function style()
    {
        return $this->hasOne(Style::class,'product_id');
    }
}
