<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use Notifiable;

    // ... properti dan method lain ...

    /**
     * Hanya user dengan domain email tertentu yang bisa akses panel admin.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'mrai') {
            return str_ends_with($this->email, '@mrossyai.id')
                || $this->email === 'mrai@portofolio.test';
        }

        return true;
    }
}
