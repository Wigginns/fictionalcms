<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();

        User::truncate();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
        ]);

        $dave = User::create([
            'name' => 'Dave Dafeet',
            'email' => 'davedafeet@test.com',
            'password' => bcrypt('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $dave->roles()->attach($authorRole);
    }
}
