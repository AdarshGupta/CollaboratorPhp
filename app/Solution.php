<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
	protected $fillable = ['problem_id', 'body'];
	
    public function problem()
    {
    	return $this->belongsTo(Problem::class);
    }
}
