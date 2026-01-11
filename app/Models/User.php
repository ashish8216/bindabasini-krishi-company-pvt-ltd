<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * Mass assignable attributes
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'company_name',
        'pan',
        'company_registration',
        'latest_tax_clearance',
        'pan_vat_certificate',
        'contact_number',
        'contact_number_2',
        'address',
        'website',
        'business_role',
        'role',
    ];

    /**
     * Hidden attributes
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'business_role' => 'array',
    ];

    /**
     * Filament admin panel access
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return $panel->getId() === 'admin'
            && $this->role === 'admin';
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
