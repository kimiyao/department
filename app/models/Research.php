<?php

class Research extends Eloquent
{
	public $table;

	public function __construct()
	{
		$this->table = 'researches';
	}

	
	public function teachers()
	{
		return $this->hasMany('Teacher', 'department_id');
	}

	public function getName()
	{
		return $this[Config::get('app.locale')];
	}

}