<?php

namespace App\Classes;

use Illuminate\Support\Str;

class Slug
{
    public static function create($resource, $name, $id = null)
    {
        $originalSlug = '';
        $slugs = explode('/', $name);

        foreach ($slugs as $slug) {
            $originalSlug .= Str::slug($slug) . '/';
        }

        $slug = rtrim($originalSlug, '/');
        $mainSlug = $slug;

        $i = 0;

        while ($resourceId = $resource::whereSlug($slug)->where('id', '!=', $id)->first()) {
               $slug = $mainSlug . '-' . ++$i;
        }

        return $slug;
    }
}
