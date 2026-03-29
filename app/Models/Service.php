<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'icon',
        'color',
        'sort_order'
    ];

    public function features()
    {
        return $this->hasMany(ServiceFeature::class);
    }
}
