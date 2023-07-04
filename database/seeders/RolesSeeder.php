<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // Check if the 'UKM_admin' role doesn't exist before creating it
                if (!Role::where('name', 'UKM_admin')->where('guard_name', 'web')->exists()) {
                    Role::create(['name' => 'UKM_admin', 'guard_name' => 'web']);
                }
                if (!Role::where('name', 'Executive')->where('guard_name', 'web')->exists()) {
                    Role::create(['name' => 'Executive', 'guard_name' => 'web']);
                }

                
                
        
    }
}