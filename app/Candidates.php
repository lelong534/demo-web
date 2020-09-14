<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    //
    protected $table = 'candidates';
    protected $fillable = [
    	'id', 'name', 'email', 'cv', 'incitation', 'created_at', 'updated_at'
    ];
}
