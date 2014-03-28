<?php

class Contacts extends Eloquent
{
	public $table;

	public function __construct()
	{
		$this->table = 'adress';
	}

	public function department()
	{
		return $this->belongsTo('Department', 'department_id');
	}

	
	public function getName()
	{
		return $this[Config::get('app.locale')];
	}

}