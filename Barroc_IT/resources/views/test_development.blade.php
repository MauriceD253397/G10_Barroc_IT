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
    {{--test form--}}
    @foreach($projects as $project)
        <H3>{{$project->title}}</H3>
        <p>{{$project->status}}</p>
        <p>{{$project->start_date}}</p>
        <p>{{$project->death_line}}</p>
        {{--knop om te zeggen dat het project klaar is--}}
        <form action="{{route('development.done')}}" method="post">
            <input type="hidden" name="id" value="{{$project->id}}">
            @csrf
            <input type="submit" value="it is done">
        </form>
        @endforeach



</body>
</html>