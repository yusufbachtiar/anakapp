<?php

namespace App\Repositories;

use App\User;
use App\Anak;

class AnakRepository
{
	
	public function forUser(Anak $anak)
	{
		return $anak->anaks()
					 ->orderBy('created_at', 'asc')
					 ->get();
	}

}