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

        DB::beginTransaction();
        try{
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

        $permission = Permission::create(['name'=>'create unit']);
        $permission = Permission::create(['name'=>'update unit']);
        $permission = Permission::create(['name'=>'delete unit']);
        $permission = Permission::create(['name'=>'read unit']);
        $permission = Permission::create(['name'=>'read equipment']);
        $permission = Permission::create(['name'=>'create equipment']);
        $permission = Permission::create(['name'=>'delete equipment']);
        $permission = Permission::create(['name'=>'update equipment']);

        $role_admin->givePermissionTo('read unit');
        $role_admin->givePermissionTo('delete unit');
        $role_admin->givePermissionTo('update unit');
        $role_admin->givePermissionTo('delete unit');
        $role_admin->givePermissionTo('read equipment');
        $role_admin->givePermissionTo('update equipment');
        $role_admin->givePermissionTo('delete equipment');
        $role_admin->givePermissionTo('create equipment');
        $role_operator->givePermissionTo('read unit');
        $role_operator->givePermissionTo('read equipment');
        $role_operator->givePermissionTo('update equipment');
        $role_operator->givePermissionTo('create equipment');

        $admin->assignRole('admin');
        $operator->assignRole('operator');

        DB::commit();
    }
    catch(\Throwable $th){
        DB::rollBack();
    }

        // DB::table('users')->insert([
        //     'id' => Str::uuid()->toString(),
        //     'name' => 'psik',
        //     'email' => 'psik.feb@ub.ac.id',
        //     'password' => Hash::make('123'),
        // ]);
    }
}
