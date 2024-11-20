<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Post
{
    /**
     * Get all post titles from the posts directory.
     *
     * @return array
     */
    public static function all()
    {
        $files = File::files(resource_path('posts'));

        return array_map(function ($file) {
            return [
                'slug' => $file->getFilenameWithoutExtension(),
                'title' => ucwords(str_replace('-', ' ', $file->getFilenameWithoutExtension())),
            ];
        }, $files);
    }

    /**
     * Get the content of a single post by slug.
     *
     * @param string $slug
     * @return string|null
     */
    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");

        if (!File::exists($path)) {
            return null;
        }

        return File::get($path);
    }
}
