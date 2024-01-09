<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'IT', 'name' => 'Information Technology', 'description' => null ],
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'HR', 'name' => 'Human Resources', 'description' => null ],
            [ 'created_by' => 1, 'updated_by' => null, 'code' => 'ADM', 'name' => 'Administration', 'description' => null ],
        ];

        foreach($data as $d) {
            Department::create($d);
        }
    }
}
