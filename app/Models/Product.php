<?php

namespace App\Models;

use App\Models\User;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }
}
