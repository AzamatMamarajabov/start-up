<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    
    protected $fillable = ['title_uz', 'title_en', 'title_ru','icon'];


    public function types(): HasMany {
        return $this->hasMany(CategoryType::class);
    }
    
}
