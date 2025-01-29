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

        Log::info($user_roles);

        foreach ($user_roles as $user_role) {}
    }
}
