<?php

class ResearchController extends BaseController
{
	public function __construct()
	{
		$this->layout = 'layouts.default';

		$this->beforeFilter('csrf', ['on' => ['post', 'put', 'delete']]);
	}

	public function Researches()
	{
		$researches = Research::first()->orderBy('type', 'asc')->get();

		$this->layout->title = 'Research';
		$this->layout->content = View::make('research.researches')->with('researches', $researches);
	}

	public function Research($title)
	{
		$research = Research::where('title', $title)->first();

		$this->layout->title = $research->title;
		$this->layout->content = View::make('research.research')->with('research', $research);
	}
}