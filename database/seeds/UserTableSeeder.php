<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [		'id' 			=> '1',
                'email' 		=> 'admin@admin.com',
                'password' 		=> bcrypt('admin'),
                'permissions' 	=> '{"home.dashboard":true}',
                'first_name' 			=> 'John',
                'last_name' 		=> 'Doe',
                'QRpassword'=>'Dammy-CODE-1S4u7lJzehk62xDm3DgYgXXYWtbHE6gSP'

            ]
        ]);
    }
}
