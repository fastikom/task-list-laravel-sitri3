<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['name'];
}
