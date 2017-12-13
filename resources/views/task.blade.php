
<!doctype html>
<html lang="en">
<head>

</head>
<body>
    <ul>
        @foreach($tasks as $task)
            <li>
                <a>{{$task}}</a>
            </li>
    </ul>
</body>
</html>