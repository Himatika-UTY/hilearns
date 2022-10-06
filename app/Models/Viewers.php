<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewers extends Model
{
    use HasFactory;
    protected $table = 'viewers';
    protected $fillable = [
        'id_article',
        'ip',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class, 'id_article');
    }
}
