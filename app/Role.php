<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    public function run()
    {

        $roles = Config::get('constants.db.roles');
        foreach ($roles as $key => $role) {
            \App\Role::create(['name' => $role]);
        }
    }
}


