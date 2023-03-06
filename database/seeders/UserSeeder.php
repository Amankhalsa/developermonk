<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $createuser = New User();
        $createuser->name = "Admin";
        $createuser->role_id = 1;
        $createuser->email = "admindev@yopmail.com";
        $createuser->password = Hash::make('12345678');
        $createuser->current_team_id = 1;
        $createuser->save();

    }
}
