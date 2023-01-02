<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lga;
use App\Models\Constituency;

use Faker\Generator;
use Illuminate\Container\Container;

class ConstituencySeeder extends Seeder
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
        $lgas = Lga::all();
        $constituencies = [
            ['name'=> fake()->city()],
            ['name'=> fake()->city()],
            ['name'=> fake()->city()],
        ];
        if($lgas->isNotEmpty())
            foreach($lgas as $lga){
                foreach($constituencies as $key=>$value)
                    $lga->constituencies()->create($value);
            }
        else 
            Constituency::factory()->count(15)->create();
    }
}
