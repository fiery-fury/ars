<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'created_by' => 1, 'updated_by' => null, 'user_detail_id' => 1, 'username' => 'admin', 'password' => '$2y$10$UmYVxLIiPxptHs9mS/.R2OmhpIrQo3eZwNKLBA7hgw/0VlRpaYBJq' /* password */ ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_detail_id' => 2, 'username' => 'req1', 'password' => '$2y$10$UmYVxLIiPxptHs9mS/.R2OmhpIrQo3eZwNKLBA7hgw/0VlRpaYBJq' /* password */ ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_detail_id' => 3, 'username' => 'apr1', 'password' => '$2y$10$UmYVxLIiPxptHs9mS/.R2OmhpIrQo3eZwNKLBA7hgw/0VlRpaYBJq' /* password */ ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_detail_id' => 4, 'username' => 'req2', 'password' => '$2y$10$UmYVxLIiPxptHs9mS/.R2OmhpIrQo3eZwNKLBA7hgw/0VlRpaYBJq' /* password */ ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_detail_id' => 5, 'username' => 'apr2', 'password' => '$2y$10$UmYVxLIiPxptHs9mS/.R2OmhpIrQo3eZwNKLBA7hgw/0VlRpaYBJq' /* password */ ],
            [ 'created_by' => 1, 'updated_by' => null, 'user_detail_id' => 6, 'username' => 'req3', 'password' => '$2y$10$UmYVxLIiPxptHs9mS/.R2OmhpIrQo3eZwNKLBA7hgw/0VlRpaYBJq' /* password */ ],
        ];

        foreach($data as $d) {
            User::create($d);
        }
    }
}
