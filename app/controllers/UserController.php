<?php

class UserController extends BaseController
{
	public function __construct()
	{
		$this->layout = 'layouts.default';

		$this->beforeFilter('csrf', ['on' => ['post', 'put', 'delete']]);
	}

	public function Teachers()
	{
	$faculties = Faculty::all();

	$this->layout->title = 'Teachers';
	$this->layout->content = View::make('user.teachers')->with('faculties', $faculties);
	}

	public function DeprtTeachers($department_id)
	{
		$deprtteachers = Teacher::where('department_id', $department_id)->get();
		$this->layout=View::make('layouts.sidebar');
		$this->layout->title = 'Teachers';
		$this->layout->content = View::make('user.teachers')->with('teachers', $deprtteachers);
	}

	public function DeprtStaff($department_id, $type)
	{
		$deprtteachers = Teacher::where('department_id', $department_id)->where('position', $type)->get();
		$this->layout=View::make('layouts.sidebar');
		$this->layout->title = 'Teachers';
		$this->layout->content = View::make('user.teachers')->with('teachers', $deprtteachers);
	}

	public function User($id)
	{
		$user = User::find($id);

		// if(count($user) == 0)
		// 	return Redirect::to('/');

		$this->layout->title = 'User profile';
		$this->layout->content = View::make('user.user')->with('user', $user);
	}

	public function Edit($id)
	{
		$user = User::find($id);

		// if(count($user) == 0)
		// 	return Redirect::to('/');

		$this->layout->title = 'Edit user';
		$this->layout->content = View::make('user.edit')->with('user', $user);
	}

	public function putEdit($id)
	{
		return Redirect::to('user/'.$id);
	}
}