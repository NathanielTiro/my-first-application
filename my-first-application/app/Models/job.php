<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Table name (since we used job_listings, not jobs)
    protected $table = 'job_listings';

    // Allow mass assignment for these fields
    protected $fillable = ['title', 'salary', 'employer_id'];

    // Each Job belongs to one Employer
    public function employer()
    {
        return $this->belongsTo(\App\Models\Employer::class);
    }

    // Many-to-Many relationship with Tags
    public function tags()
    {
        // "job_listing_id" is the foreign key in the pivot table
        return $this->belongsToMany(\App\Models\Tag::class, 'job_listing_tag', 'job_listing_id', 'tag_id');
    }
}
