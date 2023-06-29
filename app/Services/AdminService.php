<?php

namespace App\Services;

use App\Models\User;
use App\Actions\DecryptAndFind;
use Spatie\Permission\Models\Role;

class AdminService {

    public function createAdmin($datas)
    {
        
            foreach($datas->users as $userId)
            {
                $user = User::findOrFail($userId);
                $user->is_admin = true;
                $user->save();
                $user->assignRole(Role::ADMIN);

            }
            
    }

    public function removeRole($userData, $roles)
    {
        $user = (new DecryptAndFind())->handle(User::class, $userData, 'id' );
        foreach($roles as $role)
        {
            $user->removeRole($role);
        }

    }

    public function revokePermission($userData, $permissions)
    {
        $user = (new DecryptAndFind())->handle(User::class, $userData, 'id' );
        $user->revokePermissionTo($permissions);
    }

    public function addRoles($userData, $roles)
    {
        $user = (new DecryptAndFind())->handle(User::class, $userData, 'id' );
        $user->assignRole($roles);
        
    }

    public function addPermissions($userData, $permissions)
    {
        $user = (new DecryptAndFind())->handle(User::class, $userData, 'id' );
        $user->givePermissionTo($permissions);
        
    }
}