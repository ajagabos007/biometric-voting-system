<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\Lga;


use Faker\Generator;
use Illuminate\Container\Container;

class LgaSeeder extends Seeder
{
     /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = State::all();
        $lgas = [
            ['name'=> fake()->city()],
            ['name'=> fake()->city()],
            ['name'=> fake()->city()],
        ];
        if($states->isNotEmpty())
            foreach($states as $state){
                foreach($lgas as $key=>$value)
                    $state->lgas()->create($value);
            }
        else 
            Lga::factory()->count(15)->create();
    }
}
