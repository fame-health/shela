<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'description', 'image', 'alt_text',
        'is_active', 'sort_order', 'category', 'post_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
