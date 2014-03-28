<?php

class Info extends Eloquent
{
	public $table;

	public function __construct()
	{
		$this->table = 'info';
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