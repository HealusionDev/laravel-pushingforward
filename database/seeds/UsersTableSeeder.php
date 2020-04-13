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
        Role::truncate();

        /*DB::table('users')->insert*/

        $adminRole = Role::where('name', 'admin')->first();
        $auteurRole = Role::where('name', 'auteur')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name' => 'Jacob',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('password')
        ]);

        $auteur = User::create([
        	'name' => 'Auteur',
        	'email' => 'auteur@auteur.com',
        	'password' => Hash::make('password'),
        ]);

        $user = User::create([
        	'name' => 'Generic',
        	'email' => 'user@user.com',
        	'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);
        $user->roles()->attach($userRole);
    }
}
