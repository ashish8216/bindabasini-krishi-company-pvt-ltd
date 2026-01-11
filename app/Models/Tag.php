<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    protected static function booted()
    {
        static::creating(fn($tag) => $tag->slug = Str::slug($tag->name));
        static::updating(fn($tag) => $tag->slug = Str::slug($tag->name));
    }
}
