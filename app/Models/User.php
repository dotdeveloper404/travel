<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    public const TYPE_SUPER_ADMIN = "super_admin";
    public const TYPE_ADMIN = "admin";
    public const TYPE_AGENT = "agent";
    public const TYPE_CLIENT = "client";

    public  $types=[
        self::TYPE_SUPER_ADMIN => 'Super Admin',
        self::TYPE_ADMIN => 'Admin',
        self::TYPE_AGENT =>'Agent',
        self::TYPE_CLIENT => 'Client',
    ];

    // public $appends = ["permission"];

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
    ];

    public function scopeAgent($query)
    {
        if(auth()->user()->type == 'agent' ) return $query;

        return $query->whereType('agent');
    }

    // public function getPermissionAttribute(){
    //     return $this->getAllPermissions();
    // }

}
