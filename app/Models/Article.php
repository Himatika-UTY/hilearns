<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modul;
use App\Traits\Uuids;

class Article extends Model
{
    use Uuids;
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = [
        'id_modul',
        'title',
        'slug',
        'author',
        'topic',
        'image',
        'content',
    ];

    public function modul()
    {
        return $this->belongsTo(Modul::class, 'id_modul');
    }
}
