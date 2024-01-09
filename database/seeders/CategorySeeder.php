<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'LT', 'name' => 'Laptop', 'description' => null ],
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'LTD', 'name' => 'Location Tracking Device', 'description' => null ],
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'TAB', 'name' => 'Tablet', 'description' => null ],
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'CDESK', 'name' => 'Compact Desktop', 'description' => null ],
        ];

        foreach($data as $d) {
            Category::create($d);
        }
    }
}
