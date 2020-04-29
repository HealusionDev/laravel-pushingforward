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
        $auteurRole = Role::where('name', 'auteur')->first();
        $utilisateurRole = Role::where('name', 'utilisateur')->first();

        $admin = User::create([
        	'name' => 'Admin',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('s!p3rCam3!')
        ]);

        $auteur = User::create([
        	'name' => 'Auteur',
        	'email' => 'auteur@auteur.com',
        	'password' => Hash::make('s!p3rCam3!'),
        ]);

        $utilisateur = User::create([
        	'name' => 'User',
        	'email' => 'user@user.com',
        	'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);
        $utilisateur->roles()->attach($utilisateurRole);
    }
}
