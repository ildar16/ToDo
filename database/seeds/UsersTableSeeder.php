<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'user@user.com',
                'password' => Hash::make('123123123'),
                'email' => 'user@user.com',
            ]
        ];

        DB::table('users')->insert($users);
    }
}
