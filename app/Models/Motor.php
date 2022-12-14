<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Motor extends Model
{
    use HasFactory;

    protected $table = 'motor';

    protected $fillable = [
        'name',
        'price',
        'description',
        'horsepower',
        'image',
        'user_id',
        'category_id',
    ];


    // Relationship To User
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    // Relationship To category
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }


}
