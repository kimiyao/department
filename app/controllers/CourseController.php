<?php

class CourseController extends BaseController
{
	public function __construct()
	{
		$this->layout = 'layouts.default';

		$this->beforeFilter('csrf', ['on' => ['post', 'put', 'delete']]);
	}

	public function Courses()
	{
		// $courses = Course::all();
		$faculties = Faculty::all();

		$this->layout->title = 'Courses';
		$this->layout->content = View::make('course.courses')->with('faculties', $faculties);
	}

	public function DeprtCourses($department_id)
	{
		// $courses = Course::all();
		$deprtcourses = Course::where('department_id', $department_id)->orderBy('semester', 'asc')->get();

		$this->layout->title = 'Courses';
		$this->layout->content = View::make('course.courses')->with('courses', $deprtcourses);
	}

	public function Course($code)
	{
		$course = Course::where('code', $code)->first();

		$this->layout->title = $course->name;
		$this->layout->content = View::make('course.course')->with('course', $course);
	}
}