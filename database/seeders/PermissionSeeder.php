<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'=>'user:read',
            'label'=>'User Read',
        ]);
         Permission::create([
            'name'=>'user:write',
            'label'=>'User Write',
        ]);
         Permission::create([
            'name'=>'user:update',
            'label'=>'User Update',
        ]);
         Permission::create([
            'name'=>'user:delete',
            'label'=>'User Delete',
        ]);


    }
}
