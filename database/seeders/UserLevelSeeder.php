<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserLevel;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'created_by' => 1, 'updated_by' => null, 'name' => 'Requestor', 'description' => null, 'value' => 5 ],
            [ 'created_by' => 1, 'updated_by' => null, 'name' => 'Manager', 'description' => null, 'value' => 10 ],
            [ 'created_by' => 1, 'updated_by' => null, 'name' => 'Administrator', 'description' => null, 'value' => 255 ],
        ];

        foreach($data as $d) {
            UserLevel::create($d);
        }
    }
}
