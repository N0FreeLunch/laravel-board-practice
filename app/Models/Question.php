<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
      "subjects",
      "content"
    ];

    public function answer()
    {
        return $this->hasMany('App\Models\Answer');
    }
}
