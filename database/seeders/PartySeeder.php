<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Models\Party;
use App\Models\Image;

use App\Http\Controllers\ImageController;



class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parties = [
            [
                'name' => 'All Progress Congress',
                'abbreviation' => 'APC',
                'slogan' => 'Change'
            ],
            [
                'name' => 'People Democratic Party',
                'abbreviation' => 'PDP',
                'slogan' => 'Power to the people'
            ],
            [
                'name' => 'Labour Party',
                'abbreviation' => 'LP',
                'slogan' => 'Forward Ever'
            ],
        ];

        foreach ($parties as $key => $value) {
            $party = Party::factory()->create($value);
            $image_file = new File(public_path('images/parties_logo/'.strtolower($value['abbreviation']).'.jpg'));
            $image_controller = new ImageController();

            $image_controller->storeImage($image_file, $path="biometric-voting-system/images/parties/", $party->id, $party::class);

         }
    }
}
