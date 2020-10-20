<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang', 'name', 'url', 'status'
    ];

    public function language()
    {
        return $this->belongsTo('App\Models\Language', 'lang', 'id');
    }
}
