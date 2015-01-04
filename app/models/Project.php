<?php

class Project extends \Eloquent {
	protected $fillable = ['name', 'description', 'moneyGoal', 'moneyActual', 'expireDate', 'user_id'];

    public function owner()
    {
        return $this->belongsTo('User');
    }

    public function supporter()
    {
        return $this->belongsToMany('User');
    }



}