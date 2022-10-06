<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsChangePassword extends Model
{
    use HasFactory;
    protected $table = 'is_change_password';
    protected $fillable = [
        'npm',
        'status',
    ];
}
