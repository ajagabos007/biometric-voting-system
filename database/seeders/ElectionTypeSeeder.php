<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ElectionType;
use Cviebrock\EloquentSluggable\Services\SlugService;


class ElectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $election_types = [
            'General Election',
            'Gubenatorial Election',
            'By Election',
        ];

        foreach ($election_types as $key => $value) {
            ElectionType::factory()->create([
             'name'=>$value,
             'slug'=> SlugService::createSlug(ElectionType::class, 'slug', $value),
             ]);
         }
    }
}
