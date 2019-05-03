<?php

namespace LogIn;

use Illuminate\Database\Eloquent\Model;

class coord extends Model
{
    protected $table='users';
    
	public function club(){
		return $this->hasOne(club::class);
	}
}
