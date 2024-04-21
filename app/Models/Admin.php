<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'contenu', 'url_image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function Like()
    {
        return $this->hasMany(Like::class);
    }
}
