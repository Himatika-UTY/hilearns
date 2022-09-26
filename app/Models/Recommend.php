<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modul;

class Recommend extends Model
{
    use HasFactory;
    protected $table = 'recommend';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_modul'
    ];

    public function modul()
    {
        return $this->belongsTo(Modul::class, 'id_modul');
    }
}
