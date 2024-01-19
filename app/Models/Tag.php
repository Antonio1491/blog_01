<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

     //muestra el slug en la url en lugar del id
     public function getRouteKeyName()
     {
         return "slug";
     }

    //Relación muchos a muchos
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
