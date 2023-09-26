<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidx
     */
    public function run()
    {
        $role = Role ::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'attribute:create']);
        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        $permission = Permission::create(['name' => 'attribute:update']);
        $role->givePermissionTo($permission);
        $permission->assignRole($role);
    }
}
