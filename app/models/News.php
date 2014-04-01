<?php

class News extends Eloquent
{
	public $table;

	public function __construct()
	{
		$this->table = 'news';
	}

	public function getName()
	{
		return $this[Config::get('app.locale')];
	}

	public function getDescription()
	{
		return $this['description_'.Config::get('app.locale')];
	}
}