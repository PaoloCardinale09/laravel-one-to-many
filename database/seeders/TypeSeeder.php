<?php

namespace Database\Seeders;

use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $labels = ['Web page', 'Backoffice', 'Front-end', 'Back-end'];

        foreach($labels as $label){
            $type = new Type();
            $type->label = $label;

            $type->save();

        }
    }
}