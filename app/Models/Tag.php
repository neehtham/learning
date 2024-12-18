<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    //protected $fillable = ['jobs_listings_id', 'tag_id'];
    public function jobs()
    {
        return $this->belongsToMany(Job::class, foreignPivotKey: 'jobs_listings_id');
    }
}
