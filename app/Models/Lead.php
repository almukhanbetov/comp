<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'type',
        'entity_id',
        'name',
        'phone',
        'email',
        'source',
        'status',
        'title',
        'message',
        'whatsapp_url',
        'ip',
        'user_agent',
    ];
}