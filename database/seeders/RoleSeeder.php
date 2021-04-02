<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managerole=Permission::where('name','user:read')->first();
        $manageuser=Permission::where('name','user:write')->first();

        $user=Role::create([
            'name'=>'USER',
            'label'=>'User',
        ]);
         $admin=Role::create([
            'name'=>'ADMIN',
            'label'=>'System Admin',
        ]);
        $admin->allowTo($managerole);
        $user->allowTo($manageuser);
    }
}
