<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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


        // Create a user with 'UKM_admin' role
        $user1 = User::create([
            'name' => 'UKM Admin',
            'email' => 'ukmadmin@example.com',
            'password' => bcrypt('password'),
            'ukm_id' => 1, // Set the UKM ID if applicable
            'roles_id' => 1,
        ]);
        $user1->assignRole('UKM_admin');

        // Create a user with 'Executive' role
        $user2 = User::create([
            'name' => 'Executive User',
            'email' => 'executive@example.com',
            'password' => bcrypt('password'),
            'ukm_id' => null, // Set the UKM ID if applicable // null will be the executive code okay?
            'roles_id' => 2,
        ]);
        $user2->assignRole('Executive');

        
    }
}