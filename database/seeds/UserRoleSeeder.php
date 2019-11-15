<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->delete();

        UserRole::create( array(
            'id'            => 1,
            'role_name'     => 'Super Admin'
        ));

        UserRole::create( array(
            'id'            => 2,
            'role_name'     => 'Admin'
        ));

        UserRole::create( array(
            'id'            => 3,
            'role_name'     => 'Editor'
        ));

        UserRole::create( array(
            'id'            => 4,
            'role_name'     => 'Subscriber'
        ));
    }
}
