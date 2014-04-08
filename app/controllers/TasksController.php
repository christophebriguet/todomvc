<?php

class TasksController extends BaseController {

	public function create()
	{
      return View::make('tasks.create');
	}
  
	public function store()
	{
      Task::create(Input::all());
    return Redirect::route('tasks-create');
	}  

	public function index()
	{
      $tasks = Task::all();
    return View::make('tasks.index')->with('tasks', $tasks);
	}    

}