<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Jobs extends Model
{
    //
    protected $table = 'jobs';
    protected $fillable = [
    	'id', 'name', 'address', 'min_salary', 'max_salary', 'expired', 'created_at', 'updated_at'
    ];
    public function getAllJobs() {
    	return DB::table('jobs')->all();
    }
    public static function getJobById($id) {
    	return DB::table('jobs')->where('id', $id)->first();
    }
}
