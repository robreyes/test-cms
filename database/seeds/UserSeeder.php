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
            'name'      => 'Admin',
            'email'     => 'test@testcrm.com',
            'password'  => bcrypt('admin123'),
        ));
    }
}
