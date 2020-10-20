<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang', 'title', 'desc', 'status'
    ];
}
