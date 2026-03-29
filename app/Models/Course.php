<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CourseTag;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'icon',
        'level'
    ];

    public function tags() 
    {
        return $this->hasMany(CourseTag::class);
    }
}
