<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();

        // Change admin login info here
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234590')
        ]);

        $role = Role::create([
            'name' => 'admin'
        ]);

        $user->roles()->save($role);;

        Model::reguard();
    }
}
