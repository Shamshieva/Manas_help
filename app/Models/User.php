<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    const ADMIN = 0;
    const USER = 1;

    public static function getRoles()
    {
        return [
            self::ADMIN => 'ADMIN',
            self::USER => 'USER',
        ];
    }

    public static function getRoleAsString($role)
    {
        $roles = [
            self::ADMIN => 'ADMIN',
            self::USER => 'USER',
        ];
        return $roles[$role] ?? 'Unknown Role';
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
