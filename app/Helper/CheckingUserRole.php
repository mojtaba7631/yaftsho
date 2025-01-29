<?php

namespace App\Helper;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Log;

class CheckingUserRole
{
    public static function is_admin(User $user)
    {
        $user_roles = $user->roles();

        foreach ($user_roles->get() as $user_role) {
            Log::info($user_role);

            if ($user_role->key == EnumRole::admin->value) {
                return true;
            }
        }
        return false;
    }
}
