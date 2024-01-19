<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Por cada post se va a generar una imagen y se almacena en la tabla images
        $posts = Post::factory(300)->create();

        foreach ($posts as $post)
        {
            Image::factory(1)->create([
                //Agregamos los campos que necesita la tabla images
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);

            //agregamos datos a la tabla post_tag
            //en el tag_id colocara los datos de attach 
            $post->tags()->attach([
                rand(1 ,4), 
                rand(5,8)
            ]);
        }
    }
}
