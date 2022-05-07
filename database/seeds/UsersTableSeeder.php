<?php

use Illuminate\Database\Seeder;

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        User::truncate();
        DB::table('role_user')->truncate();

        $role = Role::where('name','Admin')->first();

        $admin = User::create([
            'firstName' => 'Admin',
            'lastName' => 'Admin',
            'email' => 'admin@kahawa.ph',
            'password' => Hash::make('secret'),
        ]);

        $admin->role()->attach($role);

    }
}
