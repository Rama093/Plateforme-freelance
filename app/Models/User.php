<?php

namespace App\Models;

use App\Models\Conversation;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
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

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
    public function freelances()
    {
        return $this->hasMany('App\Models\Freelance');
    }

    public function proposals()
    {
        return $this->hasMany('App\Models\Proposal');
    }

    public function conversations()
    {
        return Conversation::where(function ($q) {
            return $q->where('to', $this->id)
                ->orWhere('from', $this->id);
        });
    }

    public function getConservationsAttribute()
    {
        return $this->conversations()->get();
    }
}
