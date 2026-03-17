<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Ferchudev';
        $user->email = 'fernandomatiaspessoa471@gmail.com';
        $user->password = Hash::make('123ferchu');
        $user->email_verified_at = now();

        $user->save();

        Role::create([
            'name' => 'default',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $user->assignRole('default');
        $user->assignRole('admin');
    }
}
