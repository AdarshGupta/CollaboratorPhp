<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    // This allows mass assignment using Problem::createt(..) in ProblemController.php... method store()
    protected $fillable = ['summary', 'body', 'user_id'];

    public function solutions()
    {
    	return $this->hasMany(Solution::class);
    }

    public function addSolution($body, $user_id)
    {
    	// Solution::create([
    	// 	'problem_id' => $this->id,
    	// 	'body' => $body
    	// ]);
    	// OR
    	$this->solutions()->create([
            'body' => $body,
            'user_id' => $user_id
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
