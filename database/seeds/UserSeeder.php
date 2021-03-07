<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->role = 2;
        $admin->name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('admin1234');
        $admin->save();

        $user = new User();
        $user->role = 1;
        $user->name = "Usuario";
        $user->email = 'user@user.com';
        $user->password = Hash::make('123456789');
        $user->save();
    }
}
