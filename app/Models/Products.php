<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Products extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'descriptions', 'photo', 'category_id', 'brand_id'];

    public function category() : BelongsTo {

        return $this->belongsTo(Category::class);
    }

    public function brand() : BelongsTo {

        return $this->belongsTo(Brand::class);
    }
}
