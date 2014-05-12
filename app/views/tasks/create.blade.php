<h1>{{ Lang::get("messages.New Task" ) }}</h1>

{{ Form::model('task', array('action' => 'TasksController@store')) }}
 
{{ Form::label('title', Lang::get("messages.Title")) }}
{{ Form::text('title', null) }}
{{ Form::submit(Lang::get("messages.Create")) }}
{{ Form::close() }}