<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            'President',
            'Governor',
            'Senator',
        ];

        foreach ($posts as $key => $value) {
            Post::factory()->create([
             'name'=>$value,
             'slug'=> SlugService::createSlug(Post::class, 'slug', $value),
            ]);
         }
    }
}
