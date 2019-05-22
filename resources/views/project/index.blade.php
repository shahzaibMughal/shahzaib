<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Projects</title>
</head>
<body>
    <a href="{{route('admin.project.create')}}">Create Project</a>

    <table>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->title}}</td>
                    <td><a href="{{ route('admin.project.edit',['id'=>$project->id])  }}">Edit</a></td>
                    <td><a href="{{ route('admin.project.delete',['id'=>$project->id])  }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

