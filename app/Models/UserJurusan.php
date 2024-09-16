<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJurusan extends Model
{
    use HasFactory;
    protected $table = "user_jurusan";
    protected $fillable = [
        'id_user',
        'id_level',
        'id_jurusan'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public function level() {
        return $this->belongsTo(Level::class, 'id_level');
    }

    public function jurusan() {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
