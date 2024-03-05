<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = false;



    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'products_categories');
    }
}
