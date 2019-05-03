<?php

namespace LogIn;

use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
	protected $table='jugadores';
	public function club(){
		return $this->belongsTo(club::class);
	}
}
