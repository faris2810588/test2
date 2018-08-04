<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'log_activities';
    protected $fillable = [
        'text',
        'user_id',
    ];

    public function User()
    {
        return $this->hasOne(User::class);
    }
}
