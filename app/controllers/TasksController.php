<?php

class TasksController extends BaseController {

	public function create()
	{
    return View::make('tasks.create');
	}
  
	public function store()
	{
    Task::create(Input::all());
    return Redirect::route('tasks-index');
	}  

	public function index()
	{
    $tasks = Task::all();
    //$tasks = Task::paginate(5);
    //$tasks = Task::Active();
    //$tasks = Task::Done();
    return View::make('tasks.index')->with('tasks', $tasks);
	} 
  
 public function destroy($id)
	{
   $task = Task::findOrFail($id);
   $task->delete();
   return Redirect::action('TasksController@index');
	}     
  
}