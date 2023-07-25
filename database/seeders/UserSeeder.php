<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        $admin = User::create(array_merge([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
        ], $default_user_value));

        $operator = User::create(array_merge([
            'email' => 'operator@gmail.com',
            'name' => 'operator',
        ], $default_user_value));

        $role_admin = Role::create(['name' => 'admin']);
        $role_operator = Role::create(['name' => 'operator']);

        $permission = Permission::create(['name'=>'read role']);
        $permission = Permission::create(['name'=>'create role']);
        $permission = Permission::create(['name'=>'update role']);
        $permission = Permission::create(['name'=>'delete role']);

        $admin->assignRole('admin');
        $operator->assignRole('operator');

        // DB::table('users')->insert([
        //     'id' => Str::uuid()->toString(),
        //     'name' => 'psik',
        //     'email' => 'psik.feb@ub.ac.id',
        //     'password' => Hash::make('123'),
        // ]);
    }
}
