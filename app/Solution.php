<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
	protected $fillable = ['problem_id', 'body', 'user_id'];
	
    public function problem()
    {
    	return $this->belongsTo(Problem::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
