<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';

	protected $fillable = [
		'title',
		'parent_id'
	];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'products_categories');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class,'parent_id','id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class,'parent_id','id');
    }
}
