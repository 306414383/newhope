<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'username', 
        'pid',
        'reply_count',
        'view_count',
        'title',
        'body',
        'last_reply_username',
        'order',
    ];
    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'username', 'username');
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
