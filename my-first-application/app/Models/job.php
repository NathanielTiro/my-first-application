<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // By convention, Laravel assumes the table is 'jobs'.
    // We override it since our table is 'job_listings'.
    protected $table = 'job_listings';
}
