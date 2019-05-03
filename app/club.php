<?php

namespace LogIn;

use Illuminate\Database\Eloquent\Model;

class club extends Model
{
	protected $table='clubes';
    public function jugadores()
    {
    	return $this->hasMany(jugador::class);
    }
    public function coordi()
    {
    	return $this->hasOne(User::class);
    }
    public function coord(){
		return $this->belongsTo(admin::class);
	}
    public function clubs(){
        return $this;
    }
}
