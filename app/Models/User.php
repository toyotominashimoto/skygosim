<?php

namespace App\Models;

use App\Models\Sim\SimOrder;
use App\Models\User\UserAddress;
use App\Models\User\UserInternetPackage;
use App\Models\User\UserSim;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use HasFactory, Notifiable, Billable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password',
        'role',
        'creator_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const USER_ROLE_ADMIN = 1; // Роль админ
    const USER_ROLE_USER = 2; // Роль пользователь
    const USER_ROLE_DEALER = 3; // Роль диллер

    public function address()
    {
        return $this->hasOne(UserAddress::class, 'user_id');
    }

    public function sims()
    {
        return $this->hasMany(UserSim::class, 'user_id');
    }

    public function internet_packages()
    {
        return $this->hasMany(UserInternetPackage::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(SimOrder::class, 'user_id');
    }
}
