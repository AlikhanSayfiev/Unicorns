<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang', 'title', 'url', 'image', 'status'
    ];

    public function language()
    {
        return $this->belongsTo('App\Models\Language', 'lang', 'id');
    }
}
