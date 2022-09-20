<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Modul extends Model
{
    use HasFactory;
    protected $table = 'modul';
    protected $fillable = [
        'id_category',
        'name',
        'slug',
        'level',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
