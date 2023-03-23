<?php


namespace App\models;

class Post
{

    public static function find($slug)
    {
     
        if(! file_exists($path = resource_path("posts/{$slug}.html"))){
            throw new ModelNotFoundException;
        }

        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

    }

}


?>