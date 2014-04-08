@foreach ($tasks as $task)
  {{ $task->id }}
  {{ $task->title }}
  {{ $task->done }}
@endforeach
