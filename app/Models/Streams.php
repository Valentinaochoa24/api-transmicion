<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streams extends Model
{
    use HasFactory;
    protected $filleable = ['nombre', 'descripcion', 'estado', 'user_id'];

    public function user()
    {
        return $this->belongsTo(Admin::class);
    }
}