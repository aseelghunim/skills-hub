<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'title'=>'superAdmin'
        ]);

        Role::create([
            'title'=>'admin'
        ]);

        Role::create([
            'title'=>'student'
        ]);
    }
}
