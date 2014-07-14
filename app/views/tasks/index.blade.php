<h1>View</h1>
<div class="container">
@foreach ($tasks as $task)
  {{ $task->id }}
  {{ $task->title }}
  {{ $task->done }} 
  {{ Form::model('task', array('action' => array('TasksController@destroy', $task->id), 'method' => 'delete')) }}
  {{ HTML::decode(Form::button('Delete', array('type' => 'submit'))) }}
  {{ Form::close() }}
  <br/>
@endforeach
</div>

{{link_to_route('tasks-create', 'New Task')}}
 <br/>

{{ count ($tasks)}} {{Lang::choice("messages.task",  count ($tasks))}}