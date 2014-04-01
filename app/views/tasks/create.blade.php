
{{ Form::model('task', array('action' => 'TasksController@store')) }}
 
{{ Form::label('title', 'Title') }}
{{ Form::text('title', null) }}
{{ Form::submit('Create') }}
{{ Form::close() }}