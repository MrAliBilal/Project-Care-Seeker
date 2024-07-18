<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\ProfileDetail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'account_type',
        'contact_number',
        'address',
        'experience',
        'hourly_rate',
        'picture_url',
        'reference1_name',
        'reference1_contact',
        'reference1_info',
        'reference2_name',
        'reference2_contact',
        'reference2_info',
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

        // Relationship With Listings
        public function listings() {
            return $this->hasMany(jobs::class, 'user_id');
        }


        public function profiledetail()
        {
            return $this->hasOne(ProfileDetail::class, 'user_id2');
        }
}
