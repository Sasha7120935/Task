<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $roles = Config::get('constants.db.roles');
        foreach ($roles as $key => $role) {
            \App\Role::create(['name' => $role]);
        }

      }
}
