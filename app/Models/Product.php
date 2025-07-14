<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'category_type_id', 'title_uz', 'title_en', 'title_ru',
        'text_uz', 'text_en', 'text_ru', 'product_type', 'type',
        'file', 'images'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function categoryType()
    {
        return $this->belongsTo(CategoryType::class);
    }
}

