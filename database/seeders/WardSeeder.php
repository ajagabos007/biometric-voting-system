<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Constituency;
use App\Models\Ward;

use Faker\Generator;
use Illuminate\Container\Container;

class WardSeeder extends Seeder
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
        $constituencies = Constituency::all();
        $wards = [
            ['name'=> fake()->city()],
            ['name'=> fake()->city()],
            ['name'=> fake()->city()],
        ];
        if($constituencies->isNotEmpty())
            foreach($constituencies as $constituency){
                foreach($wards as $key=>$value)
                    $constituency->wards()->create($value);
            }
        else 
            Ward::factory()->count(15)->create();
    }
}
