<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
  return View::make('hello');
});

Route::get('test', function()
{
    return 'test';
});

Route::get('test/{id}', function($id)
{
    return 'test '.$id;
});

Route::get('test2/{id}', function($id)
{
  //return View::make('viewcbr')->with('id', $id);
  //return View::make('viewcbr', array('id' => $id));
    return View::make('viewcbr', compact('id'));
});

Route::get('test3/{id}', function($id)
{
    return View::make('viewcbr3', compact('id'));
});

Route::get('test4/index/{id}', array ('as' => 'index', 'uses' => 'TestController@index'));

Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});

Route::get('user2/{name?}', function($name = 'John')
{
    return 'Name '.$name;
});

Route::get('user3/{id}/{name}', function($id, $name)
{
    return 'User: '.$id.'; Name: '.$name;
})
->where(array('id' => '[0-9]+', 'name' => '[a-z]+'));

Route::get('tasks/create', array ('as' => 'tasks-create', 'uses' => 'TasksController@create'));
Route::post('tasks/store', array ('as' => 'tasks-store', 'uses' => 'TasksController@store'));

Route::get('tasks/index', function()
{
  return View::make('tasks.index');
});