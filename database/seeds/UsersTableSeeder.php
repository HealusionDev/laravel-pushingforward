<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        User::truncate();
        DB::table('role_user')->truncate();

        /*DB::table('users')->insert*/

        $adminRole = Role::where('name', 'admin')->first();

        $admin = User::create([
        	'name' => 'Admin',
        	'email' => 'nextadventurecontact@gmail.com',
        	'password' => Hash::make('upxT2y9d')
        ]);

        $admin->roles()->attach($adminRole);

    }
}
