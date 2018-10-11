<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Development</title>
</head>
<body>
    <h1>projects</h1>
    @foreach($projects as $project)
        <p>{{$project->title}}</p>
        <p>{{$project->status}}</p>
        <p>{{$project->start_date}}</p>
        <p>{{$project->death_line}}</p>
        <form action="{{route('development.done')}}" method="post">

            <input type="hidden" name="id" value="{{$project->id}}">
            @csrf
            <input type="submit" value="it is done">
        @endforeach


    </form>
</body>
</html>