<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang', 'name', 'desc', 'text', 'image', 'status'
    ];


    public function language()
    {
        return $this->belongsTo('App\Models\Language', 'lang', 'id');
    }
}
