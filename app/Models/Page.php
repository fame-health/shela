<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'content', 'excerpt', 'featured_image',
        'template', 'status', 'is_home', 'sort_order',
        'meta_title', 'meta_description', 'meta_keywords',
        'custom_css', 'custom_js',
    ];

    protected $casts = [
        'is_home' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeHome($query)
    {
        return $query->where('is_home', true);
    }
}
