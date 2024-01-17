<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Habilitar asignación masiva
    protected $fillable = ['name', 'slug'];


    //muestra el slug en la url en lugar del id
    public function getRouteKeyName()
    {
        return "slug";
    }


    //Relacioón uno a muchos
    public function posts()
    {
        return $this->HasMany(Post::class);
    }
}
