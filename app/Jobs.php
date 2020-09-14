<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //
    protected $table = 'jobs';
    protected $fillable = [
    	'id', 'name', 'address', 'min_salary', 'max_salary', 'expired', 'created_at', 'updated_at'
    ];
}
