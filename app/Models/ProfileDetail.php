<?php

// app/Models/ProfileDetail.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_description',
        'availability',
        'languages',
        'personality_traits',
        'qualifications_and_additional_details',
        'user_id',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->whereHas('user', function ($userQuery) use ($filters) {
                $userQuery->where('job_skills', 'like', '%' . request('tag') . '%');
            });
        }

        if ($filters['search'] ?? false) {
            $query->where(function ($query) {
                $query->orWhereHas('user', function ($query) {
                        $query->where('first_name', 'like', '%' . request('search') . '%')
                            ->orWhere('last_name', 'like', '%' . request('search') . '%')
                            ->orWhere('address', 'like', '%' . request('search') . '%')
                            ->orWhere('hourly_rate', 'like', '%' . request('search') . '%');
                    });
            });
        }
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id2');
    }
}
