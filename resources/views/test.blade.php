<!doctype html>
<html lang="en">
<head>

</head>
<body>
    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="/tasks/{{$task->id}}">
                {{$task->body}}
                    {{$task->timestamps}}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>