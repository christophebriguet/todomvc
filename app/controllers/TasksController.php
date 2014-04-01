<?php

class TasksController extends BaseController {

	public function create()
	{
      return View::make('tasks.create');
	}
  
	public function store()
	{
      Task::create(Input::all());
    return Redirect::route('tasks/create');
	}  

}