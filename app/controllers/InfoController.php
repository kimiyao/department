<?php

class InfoController extends BaseController
{
	public function __construct()
	{
		$this->layout = 'layouts.default';

		$this->beforeFilter('csrf', ['on' => ['post', 'put', 'delete']]);
	}

	public function Infos($department_id, $type)
	{
		$infos = Info::where('type', $type)->where('department_id', $department_id)->orderBy('id', 'asc')->get();
	$this->layout=View::make('layouts.sidebar');
		$this->layout->title = 'Info';
		$this->layout->content = View::make('info.infos')->with('infos', $infos);
	}

	public function Info($title)
	{
		$info = Info::where('title', $title)->first();
	$this->layout=View::make('layouts.sidebar');
		$this->layout->title = $info->title;
		$this->layout->content = View::make('info.info')->with('info', $info);
	}

	public function Abiturients($department_id, $type)
	{
		$infos = Info::where('type', $type)->where('department_id', $department_id)->orderBy('id', 'asc')->get();
	$this->layout=View::make('layouts.sidebar');
		$this->layout->title = 'Prospective Students';
		$this->layout->content = View::make('prosp_students.prosp_students')->with('infos', $infos);
	}

	public function Histories($department_id, $type)
	{
		$infos = Info::where('type', $type)->where('department_id', $department_id)->orderBy('id', 'asc')->get();
	$this->layout=View::make('layouts.sidebar');
		$this->layout->title = 'History';
		$this->layout->content = View::make('info.histories')->with('infos', $infos);
	}
}