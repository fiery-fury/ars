<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'SLV', 'name' => 'Silver', 'description' => null ],
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'WHT', 'name' => 'White', 'description' => null ],
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'BLK', 'name' => 'Black', 'description' => null ],
        ];

        foreach($data as $d) {
            Color::create($d);
        }
    }
}
