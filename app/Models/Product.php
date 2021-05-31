<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'price',
        'photo',
        'description',
        'category_id',
        'created_at'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
