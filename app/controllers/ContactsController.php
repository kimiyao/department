<?php

class ContactsController extends BaseController
{
	public function __construct()
	{
		$this->layout = 'layouts.default';

		$this->beforeFilter('csrf', ['on' => ['post', 'put', 'delete']]);
	}

	
	public function Contacts($department_id)
	{
		$contacts = Contacts::where('department_id', $department_id)->first();
		
		$this->layout->title = 'Contacts';
		$this->layout->content = View::make('contacts.contacts')->with('contacts', $contacts);
	}
}