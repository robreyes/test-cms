<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create( array(
            'first_name'      => 'Super',
            'last_name'       => 'Admin',
            'email'           => 'test@testcrm.com',
            'password'        => bcrypt('admin123'),
            'role'            => 1
        ));

        User::create( array(
            'first_name'      => 'John',
            'last_name'       => 'Doe',
            'email'           => 'john@testcrm.com',
            'password'        => bcrypt('admin123'),
            'role'            => 2
        ));
    }
}
