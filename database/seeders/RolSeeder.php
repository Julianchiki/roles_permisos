<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1=Role::create(['name'=>'Admin']);
        $role2=Role::create(['name'=>'Blogger']);

        Permission::create(['name'=>'inicio'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'users'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.users.add'])->assignRole($role1);
        Permission::create(['name'=>'admin.users.edit'])->assignRole($role1);
        Permission::create(['name'=>'admin.users.delete'])->assignRole($role1);

        Permission::create(['name'=>'admin.products'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.products.add'])->assignRole($role1);
        Permission::create(['name'=>'admin.products.edit'])->assignRole($role1);
        Permission::create(['name'=>'admin.products.delete'])->assignRole($role1);
        

    }
}
