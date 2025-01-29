<?php

namespace App\Helper;

enum EnumRole: string
{
    case admin = 'admin';
    case user = 'user';
    case moderator = 'moderator';
    case seller = 'seller';
    case guest = 'guest';
    case author = 'author';
    case support = 'support';
    case financial = 'financial';
}
