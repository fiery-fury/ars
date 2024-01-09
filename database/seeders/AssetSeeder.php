<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'created_by' => 1, 'updated_by' => null, 'department_id' => 1, 'category_id' => 1, 'color_id' => 1, 'name' => 'Apple MacBook Pro 17"' ],
            [ 'created_by' => 1, 'updated_by' => null, 'department_id' => 2, 'category_id' => 2, 'color_id' => 2, 'name' => 'Apple AirTag' ],
            [ 'created_by' => 1, 'updated_by' => null, 'department_id' => 2, 'category_id' => 3, 'color_id' => 2, 'name' => 'Apple iPad' ],
            [ 'created_by' => 1, 'updated_by' => null, 'department_id' => 3, 'category_id' => 4, 'color_id' => 3, 'name' => 'Apple Mac Studio' ],
        ];

        foreach($data as $d) {
            Asset::create($d);
        }
    }
}
