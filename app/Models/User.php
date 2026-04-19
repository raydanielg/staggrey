<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'phone',
        'avatar',
        'status',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function alumni()
    {
        return $this->hasOne(Alumni::class);
    }

    public function isAdmin()
    {
        return $this->role && $this->role->slug === 'admin';
    }

    public function isStudent()
    {
        return $this->role && $this->role->slug === 'student';
    }

    public function isStaff()
    {
        return $this->role && $this->role->slug === 'staff';
    }

    public function isAlumni()
    {
        return $this->role && $this->role->slug === 'alumni';
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function unreadNotifications()
    {
        return $this->notifications()->where('is_read', false);
    }
}
