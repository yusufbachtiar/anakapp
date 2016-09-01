<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
	protected $fillable = ['nama', 'tanggal_lahir', 'alamat'];

	public function anaks()
	{
		return $this->hasMany(Anak::class);
	}
}
