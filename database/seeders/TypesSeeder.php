<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'attualità',
                'description' => 'i migliori scoop',
            ],
            [
                'name' => 'scienze',
                'description' => 'scopri il mondo delle scienze',
            ],
            [
                'name' => 'sport',
                'description' => 'i migliori risultati sportivi',
            ]
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}