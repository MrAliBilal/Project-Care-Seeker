<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('service_category', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where(function ($query) {
                $query->where('job_title', 'like', '%' . request('search') . '%')
                    ->orWhere('job_description', 'like', '%' . request('search') . '%')
                    ->orWhere('service_category', 'like', '%' . request('search') . '%')
                    ->orWhereHas('user', function ($query) {
                        $query->where('first_name', 'like', '%' . request('search') . '%')
                            ->orWhere('last_name', 'like', '%' . request('search') . '%');
                    });
            });
        }
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
