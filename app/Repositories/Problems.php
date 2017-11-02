<?php

namespace App\Repositories;

use App\Problem;
use App\Redis;

class Problems
{
	protected $redis;

	public function __construct(Redis $redis)
	{
		$this->redis = $redis;
	}

	public function randomPosts()
	{
		// return all posts in random order
		return Problem::inRandomOrder()->get();
	}
}