<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserDetail;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'created_by' => 1, 'updated_by' => null, 'user_level_id' => 3, 'department_id' => 1, 'first_name' => 'Ferry Clarence', 'middle_name' => 'Beter', 'last_name' => 'Tan' ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_level_id' => 1, 'department_id' => 1, 'first_name' => 'Requestor', 'middle_name' => null, 'last_name' => '1' ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_level_id' => 2, 'department_id' => 2, 'first_name' => 'Approver', 'middle_name' => null, 'last_name' => '1' ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_level_id' => 1, 'department_id' => 1, 'first_name' => 'Requestor', 'middle_name' => null, 'last_name' => '2' ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_level_id' => 2, 'department_id' => 2, 'first_name' => 'Approver', 'middle_name' => null, 'last_name' => '2' ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_level_id' => 1, 'department_id' => 3, 'first_name' => 'Requestor', 'middle_name' => null, 'last_name' => '3' ],
        ];

        foreach($data as $d) {
            UserDetail::create($d);
        }
    }
}
