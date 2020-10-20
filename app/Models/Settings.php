<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'brand', 'email', 'phone', 'headerimage', 
        'middleimage', 'button1', 'button2', 'url1', 'url2', 'headerText', 'instagram',
        'telegram', 'youtube', 'facebook', 'twitter'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
