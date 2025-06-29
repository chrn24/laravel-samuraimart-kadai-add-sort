<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory,Sortable;

     protected $sortable = [
        'id',
        'price',
        'created_at',
    ];

    public function reviews()
{
    return $this->hasMany(Review::class);
}

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     public function favorited_users() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}