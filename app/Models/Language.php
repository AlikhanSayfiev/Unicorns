<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'status',
    ];


    public function menus()
    {
        return $this->hasMany('App\Models\Menu', 'lang', 'id');
    }

    public function titles()
    {
        return $this->hasMany('App\Models\Title', 'lang', 'id');
    }

    public function formats()
    {
        return $this->hasMany('App\Models\Format', 'lang', 'id');
    }

    public function opinions()
    {
        return $this->hasMany('App\Models\Opinion', 'lang', 'id');
    }

    public function syndicats()
    {
        return $this->hasMany('App\Models\FormatSyndicate', 'lang', 'id');
    }

    public function blogs()
    {
        return $this->hasMany('App\Models\Blog', 'lang', 'id');
    }

    public function services()
    {
        return $this->hasMany('App\Models\Service', 'lang', 'id');
    }

    public function settings()
    {
        return $this->hasMany('App\Models\Settings', 'lang', 'id');
    }
}
