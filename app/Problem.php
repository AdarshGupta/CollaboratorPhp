<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    // This allows mass assignment using Problem::createt(..) in ProblemController.php... method store()
    protected $fillable = ['summary', 'body'];

    public function solutions()
    {
    	return $this->hasMany(Solution::class);
    }
}
