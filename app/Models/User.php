<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
<<<<<<< HEAD
use Laravel\Sanctum\HasApiTokens;
=======
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
<<<<<<< HEAD
    use HasFactory, Notifiable, HasRoles, HasApiTokens;
=======
    use HasFactory, Notifiable, HasRoles;
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];
=======
    protected $hidden = [
        'password',
        'remember_token',
    ];
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
