<?php

namespace App\Models;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains; // <--- INI KUNCINYA

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains; // <--- INI WAJIB ADA

    public static function getCustomColumns(): array
    {
        return [
            'id',
        ];
    }
}